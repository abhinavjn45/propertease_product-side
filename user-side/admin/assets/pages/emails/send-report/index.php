<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Send Report</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
            <a href="<?= get_site_option('dashboard_url') ?>" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li>/</li>
        <li class="fw-medium">Send Report</li>
    </ul>
</div>

<div class="card basic-data-table">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mb-0">Send Report</h5>
        <!-- <a href="<?= get_site_option('dashboard_url') ?>?page=send-report" class="btn btn-primary d-inline-flex align-items-center gap-2">
            <iconify-icon icon="solar:clipboard-list-outline" class="icon text-lg"></iconify-icon>
            Send Report
        </a> -->
    </div>
    <div class="card-body">
        <div class="row gy-3">
            <form id="sendReportForm">
                <?php 
                    echo csrf_input_field(); 
                ?>
                <div class="mb-3">
                    <label for="fromDate" class="form-label">From Date</label>
                    <input type="date" id="fromDate" name="from_date" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label for="toDate" class="form-label">To Date</label>
                    <input type="date" id="toDate" name="to_date" class="form-control" required />
                </div>
                <div class="mb-3">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary" id="submitSendReport">Send Report</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Handle Add Announcement form submit
    const sendReportForm = document.getElementById('sendReportForm');
    if (sendReportForm) {
        sendReportForm.onsubmit = function(e) {
            e.preventDefault();

            const btn = document.getElementById('submitSendReport');
            btn.disabled = true;
            btn.textContent = 'Saving...';

            const fromDate = document.getElementById('fromDate').value.trim();
            const toDate = document.getElementById('toDate').value.trim();
            const csrfToken = document.querySelector('input[name="csrf_token"]').value;

            if (!fromDate || !toDate) {
                Swal.fire('Validation Error', 'Please fill all fields.', 'warning');
                btn.disabled = false; btn.textContent = 'Send Report';
                return;
            }

            fetch('assets/includes/functions/ajax-handlers/reports/send_report.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'send_report',
                    from_date: fromDate,
                    to_date: toDate,
                    csrf_token: csrfToken
                }).toString()
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Success', 'Report sent successfully.', 'success').then(() => {
                        // Close modal and reload to show new entry
                        const modalEl = document.getElementById('addAnnouncementModal');
                        if (modalEl) {
                            const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                            modal.hide();
                        }
                        location.reload();
                    });
                } else {
                    Swal.fire('Error', data.error || 'Failed to send report.', 'error');
                }
            })
            .catch (err => {
                Swal.fire('Error', 'An error occurred while sending report.', 'error');
            })
            .finally(() => {
                btn.disabled = false; btn.textContent = 'Send Report';
            });
        }
    }
</script>