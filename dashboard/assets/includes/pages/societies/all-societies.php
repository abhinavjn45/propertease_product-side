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
                <a href="<?= $dashboard_url ?>?type=societies&page=add-society" class="btn btn-primary d-flex align-items-center gap-2">
                    <iconify-icon icon="ic:outline-plus"></iconify-icon>
                    Add Society
                </a>
            </div>
            <div class="card-body">
                <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
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
                    <tbody>
                        <tr>
                            <td>{serial_number}</td>
                            <td><a href="javascript:void(0)" class="text-primary-600">{society_unique_id}</a></td>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">{society_legal_name}</h6>
                                </div>
                            </td>
                            <td>25 Jan 2024</td>
                            <td>₹200.00</td>
                            <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                            <td>
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>
                                <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


