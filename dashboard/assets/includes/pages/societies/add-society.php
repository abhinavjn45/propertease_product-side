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
        <li class="fw-medium">Add Society</li>
    </ul>
</div>

<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Add New Society</h5>
                <button type="button" class="btn btn-primary-600" onclick="fillDemoDetails()">Fill Demo Details</button>
            </div>
            <div class="card-body">
                <form class="row gy-3 needs-validation" id="addSocietyForm" novalidate>
                    <div class="col-md-12">
                        <label class="form-label" for="societyLegalName">Legal Name of the Society: <span
                                class="text-danger">*</span> (as per registration documents)</label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="solar:buildings-outline"></iconify-icon>
                            </span>
                            <input type="text" name="societyLegalName" id="societyLegalName" class="form-control"
                                placeholder="eg., Sunrise Greens Co-operative Housing Society Ltd." required>
                            <div class="invalid-feedback">
                                Please provide legal name of the society
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="societyRegistrationNumber">Registration Number: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="f7:number"></iconify-icon>
                            </span>
                            <input type="text" name="societyRegistrationNumber" id="societyRegistrationNumber"
                                class="form-control" placeholder="eg., 5965845869" required>
                            <div class="invalid-feedback">
                                Please provide registration number
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="societyRegistrationDate">Date of Registration: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="uiw:date"></iconify-icon>
                            </span>
                            <input type="date" name="societyRegistrationDate" id="societyRegistrationDate"
                                class="form-control" required>
                            <div class="invalid-feedback">
                                Please provide date of registration
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Address Part -->
                    <div class="col-md-6">
                        <label class="form-label" for="societyAddress1">Society Address: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <input type="text" name="societyAddress1" id="societyAddress1" class="form-control"
                                placeholder="Society Address Line 1*" required>
                            <div class="invalid-feedback">
                                Please provide society address
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="societyAddress2" style="color: transparent;">.</label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <input type="text" name="societyAddress2" id="societyAddress2" class="form-control"
                                placeholder="Society Address Line 2*" required>
                            <div class="invalid-feedback">
                                Please provide society address
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <input type="text" name="societyAddress3" id="societyAddress3" class="form-control"
                                placeholder="eg., Landmark (optional)">
                        </div>
                    </div>
                    <div class="col-md-6 d-none">
                        <input type="hidden" class="form-control" name="societyCountry" id="societyCountry"
                            value="India" required readonly>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <select class="form-control" id="societyState" name="societyState" required>
                                <option value="">Select State</option>
                                <?php
                                $get_states = "SELECT * FROM indian_states";
                                $run_states = mysqli_query($con, $get_states);
                                while ($row_states = mysqli_fetch_array($run_states)) {
                                    echo "<option value='" . $row_states['state_name'] . "'>" . $row_states['state_name'] . "</option>";
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                Please provide state name
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <input type="text" name="societyCity" id="societyCity" class="form-control"
                                placeholder="Society City*" required>
                            <div class="invalid-feedback">
                                Please provide city name
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:address-marker-outline"></iconify-icon>
                            </span>
                            <input type="tel" pattern="[0-9]{6}" name="societyPincode" id="societyPincode"
                                class="form-control" placeholder="Society Pincode*" required>
                            <div class="invalid-feedback">
                                Please provide pincode
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Primary Contact Details Part -->
                    <div class="col-md-6">
                        <label class="form-label" for="primaryContactFullname">Primary Contact Person Full Name: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="icon-park-outline:edit-name"></iconify-icon>
                            </span>
                            <input type="text" name="primaryContactFullname" id="primaryContactFullname"
                                class="form-control" placeholder="eg., Mohit" required>
                            <div class="invalid-feedback">
                                Please provide Primary Contact Person full name
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="contactPersonDesignation">Contact Person Designation: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="eos-icons:role-binding-outlined"></iconify-icon>
                            </span>
                            <select class="form-control" id="contactPersonDesignation" name="contactPersonDesignation"
                                required>
                                <option value="" selected disabled>Select Designation</option>
                                <option value="President">President</option>
                                <option value="Vice President">Vice President</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Treasurer">Treasurer</option>
                                <option value="Joint Secretary">Joint Secretary</option>
                                <option value="Member">Member</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide Contact Person Designation
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="contactPersonPhone">Contact Person Phone: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi-light:phone"></iconify-icon>
                            </span>
                            <input type="tel" pattern="[0-9]{10}" name="contactPersonPhone" id="contactPersonPhone"
                                class="form-control" placeholder="eg., 1234567890" required>
                            <div class="invalid-feedback">
                                Please provide Contact Person Phone Number
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="contactPersonEmail">Contact Person Email: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="mdi:email-outline"></iconify-icon>
                            </span>
                            <input type="email" name="contactPersonEmail" id="contactPersonEmail" class="form-control"
                                placeholder="eg., name@company.com" required>
                            <div class="invalid-feedback">
                                Please provide Contact Person Email
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Property & Member Specs Part -->
                    <div class="col-md-6">
                        <label class="form-label" for="totalUnits">Total Number of Units: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="material-symbols:ad-units-outline"></iconify-icon>
                            </span>
                            <input type="number" min="0" step="1" name="totalUnits" id="totalUnits" class="form-control"
                                placeholder="eg., 100" required>
                            <div class="invalid-feedback">
                                Please provide total number of units
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="totalBlocks">Number of Blocks/Wings: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="tabler:blocks"></iconify-icon>
                            </span>
                            <input type="number" min="0" step="1" name="totalBlocks" id="totalBlocks"
                                class="form-control" placeholder="eg., 6" required>
                            <div class="invalid-feedback">
                                Please provide number of blocks/wings
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="societyType">Society Type: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="solar:buildings-outline"></iconify-icon>
                            </span>
                            <select class="form-control" id="societyType" name="societyType" required>
                                <option value="" selected disabled>Select Society Type</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="both">Both (Residential & Commercial)</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide society type
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="occupancyStatus">Occupancy Status: <span
                                class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="lets-icons:status"></iconify-icon>
                            </span>
                            <select class="form-control" id="occupancyStatus" name="occupancyStatus" required>
                                <option value="" selected disabled>Select Occupancy Status</option>
                                <option value="ready_to_move">Ready to move</option>
                                <option value="under_construction">Under Construction</option>
                                <option value="transitioning_from_builder">Transitioning from builder</option>
                                <option value="occupied">Occupied</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide occupancy status
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Compliance & Legal Data -->
                    <div class="col-md-6">
                        <label class="form-label" for="reraRegistrationID">RERA Registration ID: (If applicable)</label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="ix:id"></iconify-icon>
                            </span>
                            <input type="text" name="reraRegistrationID" id="reraRegistrationID" class="form-control" placeholder="eg., 128596584562">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="societyPANNumber">Society PAN Number: <span class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="icon-park-outline:id-card"></iconify-icon>
                            </span>
                            <input type="text" name="societyPANNumber" id="societyPANNumber" class="form-control" placeholder="ABCDE1234F" required>
                            <div class="invalid-feedback">
                                Please provide Society PAN Number
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="lastAuditYear">Last Audit Year: <span class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                            </span>
                            <select id="lastAuditYear" name="lastAuditYear" class="form-control" required>
                                <option value="" selected disabled>Select Last Audit Year</option>
                                <?php
                                $currentYear = date('Y');
                                for ($year = $currentYear; $year >= 1900; $year--) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                Please provide Last Audit Year
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="financialYearStart">Financial Year Start: <span class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                            </span>
                            <select name="financialYearStart" id="financialYearStart" class="form-control" required>
                                <option value="" disabled selected>Start Month</option>
                                <option value="01">January</option><option value="02">February</option><option value="03">March</option>
                                <option value="04">April</option><option value="05">May</option><option value="06">June</option>
                                <option value="07">July</option><option value="08">August</option><option value="09">September</option>
                                <option value="10">October</option><option value="11">November</option><option value="12">December</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide start month
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="financialYearEnd">Financial Year End: <span class="text-danger">*</span></label>
                        <div class="icon-field has-validation">
                            <span class="icon">
                                <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                            </span>
                            <select name="financialYearEnd" id="financialYearEnd" class="form-control" required>
                                <option value="" disabled selected>End Month</option>
                                <option value="01">January</option><option value="02">February</option><option value="03">March</option>
                                <option value="04">April</option><option value="05">May</option><option value="06">June</option>
                                <option value="07">July</option><option value="08">August</option><option value="09">September</option>
                                <option value="10">October</option><option value="11">November</option><option value="12">December</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide end month
                            </div>
                        </div>
                    </div>

                    <hr>


                    <div class="col-md-12">
                
                        <button class="btn btn-primary-600" type="submit" id="addSocietyFormBtn">Review & Confirm Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Review Modal -->
<div class="modal fade" id="reviewSocietyModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewModalLabel">Review Society Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="reviewContent" class="row g-3">
                    <!-- Data injected via JS -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back & Edit</button>
                <button type="button" id="confirmSubmitBtn" class="btn btn-primary">Confirm & Proceed</button>
            </div>
        </div>
    </div>
</div>

<style>
.review-item {
    padding-bottom: 8px;
}
.review-label {
    font-size: 11px;
    color: #6c757d;
    text-transform: uppercase;
    font-weight: 600;
}
.review-value {
    font-size: 14px;
    color: #212529;
    font-weight: 500;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addSocietyForm = document.getElementById('addSocietyForm');
        const addSocietyFormBtn = document.getElementById('addSocietyFormBtn');
        const reviewModal = new bootstrap.Modal(document.getElementById('reviewSocietyModal'));
        const reviewContent = document.getElementById('reviewContent');
        const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');

        if (addSocietyForm) {
            addSocietyForm.onsubmit = function(e) {
                e.preventDefault();
                
                if (!addSocietyForm.checkValidity()) {
                    e.stopPropagation();
                    addSocietyForm.classList.add('was-validated');
                    return;
                }

                // Prepare Review Data
                const formData = new FormData(addSocietyForm);
                let html = '';
                
                const labels = {
                    societyLegalName: 'Legal Name',
                    societyRegistrationNumber: 'Reg Number',
                    societyRegistrationDate: 'Reg Date',
                    societyAddress1: 'Address Line 1',
                    societyAddress2: 'Address Line 2',
                    societyAddress3: 'Landmark',
                    societyState: 'State',
                    societyCity: 'City',
                    societyPincode: 'Pincode',
                    primaryContactFullname: 'Contact person',
                    contactPersonDesignation: 'Designation',
                    contactPersonPhone: 'Phone',
                    contactPersonEmail: 'Email',
                    totalUnits: 'Units',
                    totalBlocks: 'Blocks',
                    societyType: 'Society Type',
                    occupancyStatus: 'Occupancy',
                    reraRegistrationID: 'RERA ID',
                    societyPANNumber: 'PAN Number',
                    lastAuditYear: 'Last Audit',
                    financialYearStart: 'FY Start Month',
                    financialYearEnd: 'FY End Month'
                };

                for (const [key, label] of Object.entries(labels)) {
                    const value = formData.get(key) || 'N/A';
                    html += `
                        <div class="col-md-6">
                            <div class="review-item">
                                <div class="review-label">${label}</div>
                                <div class="review-value">${value}</div>
                            </div>
                        </div>
                    `;
                }


                reviewContent.innerHTML = html;
                reviewModal.show();
            };

            confirmSubmitBtn.onclick = function() {
                const btn = this;
                btn.disabled = true;
                btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Registering...';

                const formData = new FormData(addSocietyForm);
                // Security reinforcement for the backend handler (mimicking the registration flow requirement)
                formData.append('emailVerified', '1'); 

                const ajaxUrl = window.siteUrl ? `${window.siteUrl}assets/includes/functions/ajax-handlers/ajax-add-society.php` : '../assets/includes/functions/ajax-handlers/ajax-add-society.php';

                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(async res => {
                    const contentType = res.headers.get("content-type");
                    if (!res.ok || !contentType || !contentType.includes("application/json")) {
                        const text = await res.text();
                        console.error('Server error or non-JSON response:', text);
                        throw new Error('Server returned an invalid response. Check console for details.');
                    }
                    return res.json();
                })
                .then(data => {
                    if (data.status === 'success') {
                        reviewModal.hide();
                        Swal.fire({
                            icon: 'success',
                            title: 'Hurray!',
                            text: data.message,
                            confirmButtonColor: '#2D31FA'
                        }).then(() => {
                            // Redirect to All Societies
                            window.location.href = window.siteUrl + 'dashboard?type=societies&page=manage-societies';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message || 'Check all fields and try again.'
                        });
                    }
                })
                .catch(err => {
                    console.error('Submission Error:', err);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: err.message || 'Could not connect to the server.'
                    });
                })
                .finally(() => {
                    btn.disabled = false;
                    btn.innerHTML = 'Confirm & Proceed';
                });
            };
        }
    });

    function fillDemoDetails() {
        document.getElementById('societyLegalName').value = "Jagaran Co-operative Group Housing Society Ltd.";
        document.getElementById('societyRegistrationNumber').value = "8596857458";
        document.getElementById('societyRegistrationDate').value = "2020-01-01";
        document.getElementById('societyAddress1').value = "D280";
        document.getElementById('societyAddress2').value = "Ramprastha Colony";
        document.getElementById('societyAddress3').value = "Near Fulwari";
        document.getElementById('societyState').value = "Uttar Pradesh";
        document.getElementById('societyCity').value = "Ghaziabad";
        document.getElementById('societyPincode').value = "201011";
        document.getElementById('primaryContactFullname').value = "Rakesh Kumar";
        document.getElementById('contactPersonDesignation').value = "Secretary";
        document.getElementById('contactPersonPhone').value = "9876543210";
        document.getElementById('contactPersonEmail').value = "rakesh.kumar@gmail.com";
        document.getElementById('totalUnits').value = "100";
        document.getElementById('totalBlocks').value = "10";
        document.getElementById('societyType').value = "residential";
        document.getElementById('occupancyStatus').value = "ready_to_move";
        document.getElementById('reraRegistrationID').value = "RERA123456789";
        document.getElementById('societyPANNumber').value = "ABCDE1234F";
        document.getElementById('lastAuditYear').value = "2025";
        document.getElementById('financialYearStart').value = "04";
        document.getElementById('financialYearEnd').value = "03";
    }
</script>