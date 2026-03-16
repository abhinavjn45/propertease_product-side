<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Add Society</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
            <a href="<?= $dashboard_url ?>" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li>-</li>
        <li class="fw-medium">All Societies</li>
    </ul>
</div>

<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Manage All Societies</h5>
                <a href="<?= $dashboard_url ?>?type=societies&page=add-society"
                    class="btn btn-primary d-flex align-items-center gap-2">
                    <iconify-icon icon="ic:outline-plus"></iconify-icon>
                    Add Society
                </a>
            </div>
            <div class="card-body">
                <table class="table bordered-table mb-0" id="allSocietiesDataTable" data-page-length='10'>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Society ID</th>
                            <th scope="col">Society Legal Name</th>
                            <th scope="col">Society Address</th>
                            <th scope="col">Society URL</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="societiesTableBody">
                        <tr>
                            <td colspan="7" class="text-center">Loading societies...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    .text-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        word-break: break-word;
        text-wrap: wrap;
        /* Ensure text wraps */
    }
</style>

<script>
    let allSocietyDataTable = null;

    function loadSocieties() {
        const ajaxUrl = window.siteUrl ? `${window.siteUrl}assets/includes/functions/ajax-handlers/ajax-get-societies.php` : '../assets/includes/functions/ajax-handlers/ajax-get-societies.php';

        fetch(ajaxUrl)
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    // If DataTable exists, clear it. Otherwise, initialize it later.
                    if (allSocietyDataTable) {
                        allSocietyDataTable.clear();
                    }

                    const rows = data.data.map((society, index) => {
                        const serialNumber = index + 1;
                        const logoUrl = society.society_logo ? (window.siteUrl + society.society_logo) : 'assets/images/default-society.png';

                        // Detailed Address Formatting
                        const addressParts = [
                            society.society_address1,
                            society.society_address2,
                            society.society_landmark,
                            society.society_city,
                            society.society_state,
                            society.society_country,
                            society.society_pincode
                        ].filter(Boolean).map(part => part.toString().trim());

                        const address = addressParts.join(', ');
                        const domain = society.society_domain || 'N/A';

                        // Status utility
                        const formatStatus = (s) => s.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                        const displayStatus = formatStatus(society.society_status);

                        let statusClass = 'bg-info-focus text-info-main';
                        if (society.society_status === 'active') statusClass = 'bg-success-focus text-success-main';
                        else if (society.society_status === 'pending_verification') statusClass = 'bg-warning-focus text-warning-main';
                        else if (society.society_status === 'inactive') statusClass = 'bg-danger-focus text-danger-main';

                        // Conditional Actions
                        let actionsHtml = '';
                        if (society.society_status === 'pending_verification') {
                            actionsHtml = `<a href="<?= $dashboard_url ?>?type=societies&page=finish-verification&society_id=${society.society_unique_id}" class="btn btn-sm btn-primary-600 rounded-pill">Finish Verification</a>`;
                        } else {
                            actionsHtml = `
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center" title="View">
                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center" title="Edit">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center" title="Delete">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            `;
                        }

                        return [
                            serialNumber,
                            `<a href="javascript:void(0)" class="text-primary-600">${society.society_unique_id}</a>`,
                            `<div class="d-flex align-items-center">
                                <img src="${logoUrl}" alt="" class="flex-shrink-0 me-12 radius-8" style="width: 40px; height: 40px; object-fit: cover;">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">
                                    <div class="text-clamp-2" title="${society.society_legal_name}">${society.society_legal_name}</div>
                                </h6>
                            </div>`,
                            `<div class="text-clamp-2" title="${address}">${address}</div>`,
                            `<div class="text-clamp-2" title="${domain}">${domain}</div>`,
                            `<span class="${statusClass} px-24 py-4 rounded-pill fw-medium text-sm">${displayStatus}</span>`,
                            actionsHtml
                        ];
                    });

                    if (allSocietyDataTable) {
                        allSocietyDataTable.rows.add(rows).draw(false);
                    } else {
                        // First load: Clear the "Loading" row and inject data manually to initialize
                        const tableBody = document.getElementById('societiesTableBody');
                        tableBody.innerHTML = '';

                        // Initialize DataTable
                        allSocietyDataTable = new DataTable('#allSocietiesDataTable', {
                            scrollX: true,
                            data: rows,
                            columns: [
                                { title: "#" },
                                { title: "Society ID" },
                                { title: "Society Legal Name" },
                                { title: "Society Address" },
                                { title: "Society URL" },
                                { title: "Status" },
                                { title: "Action" }
                            ],
                            destroy: true
                        });
                    }
                } else {
                    console.error('Fetch error:', data.message);
                }
            })
            .catch(err => {
                console.error('Error fetching societies:', err);
            });
    }

    // Load initial data
    document.addEventListener('DOMContentLoaded', () => {
        loadSocieties();
        // Set polling interval for real-time updates (every 10 seconds for dev, can be adjusted)
        setInterval(loadSocieties, 10000);
    });
</script>