<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Society Verification</h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
            <a href="<?= $dashboard_url ?>" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li>-</li>
        <li class="fw-medium">Society Verification</li>
    </ul>
</div>

<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Finish Society Verification for <span class="fw-bold" id="society_legal_name">{society_legal_name}</span></h5>
            </div>
            <div class="card-body">
                <form class="row gy-3 needs-validation" id="addSocietyForm" novalidate>
                    <div class="col-md-12">
                        <div class="form-switch switch-primary d-flex align-items-center gap-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="ownADomain" name="ownADomain">
                            <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="ownADomain">I own a Domain for my Society</label>
                        </div>
                    </div>

                    <!-- Platform Suggestions (Shown when ownADomain is False) -->
                    <div class="col-md-12" id="platformSuggestionsSection">
                        <div class="bg-primary-50 p-24 radius-12 border border-primary-100">
                            <h6 class="text-md fw-semibold mb-12">Don't have a registered domain?</h6>
                            <p class="text-sm text-secondary-light mb-20">If you don't have a registered domain, you can get one from the following platforms:</p>
                            
                            <div class="row g-3">
                                <div class="col-sm-2">
                                    <a href="https://www.hostinger.in" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://cdn.brandfetch.io/idJjJ1f0bI/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1772358422431" alt="Hostinger" class="h-24-px object-fit-contain">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://www.godaddy.com/en-in" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://cdn.brandfetch.io/idKgLX8HGb/id30Py4bC_.svg?c=1bxid64Mup7aczewSAYMX&t=1646285938928" alt="GoDaddy" class="h-24-px object-fit-contain godaddy-logo">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://www.bigrock.in" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://www.bigrock.in/_next/image?url=https%3A%2F%2Fassets.bigrock.in%2Fui%2Fresellerdata%2F240000_269999%2F247133%2Fbigrock.in%2Fbigrock%2Fthemes%2FClassicBlue-MyTheme%2Fimages%2FmyUploadedImages%2Fphx_br_logo.svg&w=640&q=75" alt="BigRock" class="h-24-px object-fit-contain">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://www.bluehost.in" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://cdn.brandfetch.io/idDr4VyRyu/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1690812642111" alt="Bluehost" class="h-24-px object-fit-contain">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://www.hostgator.in" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://cdn.brandfetch.io/idZxPLi9CZ/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1668049460314" alt="HostGator" class="h-24-px object-fit-contain">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="https://www.namecheap.com" target="_blank" class="platform-card d-block p-16 radius-8 bg-white border text-center transition-all hover-border-primary hover-shadow-sm">
                                        <img src="https://cdn.brandfetch.io/idTVdakwPY/theme/dark/logo.svg?c=1bxid64Mup7aczewSAYMX&t=1768239869833" alt="Namecheap" class="h-24-px object-fit-contain">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Own Domain Form (Shown when ownADomain is True) -->
                    <div class="col-md-12 d-none" id="ownDomainFormSection">
                        <div class="bg-success-50 p-24 radius-12 border border-success-100">
                            <h6 class="text-md fw-semibold mb-12">Connect Your Existing Domain</h6>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="societyDomain">Enter your domain (e.g., mysociety.com):</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="societyDomain" id="societyDomain" placeholder="eg., jagarancghs.com">
                                        <button class="btn btn-primary" type="button" id="checkConnectionBtn">Check Connection</button>
                                    </div>
                                    <p class="text-xs text-secondary-light mt-8">Please enter the root domain only (e.g., <b>mysociety.com</b>). Do not include <b>http://</b>, <b>https://</b>, or <b>www</b>.</p>
                                </div>
                                
                                <!-- DNS Instructions Table (Generated via JS) -->
                                <div class="col-md-12 d-none" id="dnsInstructionsContainer">
                                    <div class="mt-24 p-20 radius-8 border border-primary-200 bg-primary-50">
                                        <h6 class="text-sm fw-semibold mb-12">Step 1: Update your DNS Settings</h6>
                                        <p class="text-xs text-secondary-light mb-16">Please log in to your domain provider (GoDaddy, Namecheap, etc.) and add the following records to connect your society portal:</p>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered bg-white text-xs mb-0">
                                                <thead class="bg-primary-600 text-white">
                                                    <tr>
                                                        <th class="p-8">Type</th>
                                                        <th class="p-8">Host / Name</th>
                                                        <th class="p-8">Value / Points To</th>
                                                        <th class="p-8">TTL</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dnsRecordsBody">
                                                    <!-- Injected via JS -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-16 d-flex align-items-start gap-2">
                                            <iconify-icon icon="solar:info-circle-bold" class="text-primary-600 mt-1"></iconify-icon>
                                            <p class="text-xs text-primary-900 mb-0"><b>Note:</b> DNS changes can take 24-48 hours to propagate globally. You can proceed with the rest of the verification while this happens.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

.platform-card:hover {
    transform: translateY(-2px);
    border-color: #2D31FA !important;
}

.godaddy-logo {
    filter: brightness(0);
}
</style>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addSocietyForm = document.getElementById('addSocietyForm');
        const reviewModal = new bootstrap.Modal(document.getElementById('reviewSocietyModal'));
        const reviewContent = document.getElementById('reviewContent');
        const confirmSubmitBtn = document.getElementById('confirmSubmitBtn');
        const ownADomainSwitch = document.getElementById('ownADomain');
        const platformSuggestionsSection = document.getElementById('platformSuggestionsSection');
        const ownDomainFormSection = document.getElementById('ownDomainFormSection');
        const societyLegalNameSpan = document.getElementById('society_legal_name');

        // Toggle Domain Sections
        if (ownADomainSwitch) {
            ownADomainSwitch.addEventListener('change', function() {
                if (this.checked) {
                    platformSuggestionsSection.classList.add('d-none');
                    ownDomainFormSection.classList.remove('d-none');
                } else {
                    platformSuggestionsSection.classList.remove('d-none');
                    ownDomainFormSection.classList.add('d-none');
                }
            });
        }

        // Fetch Society Details via AJAX
        const urlParams = new URLSearchParams(window.location.search);
        const societyId = urlParams.get('society_id');

        if (societyId) {
            const ajaxGetUrl = window.siteUrl ? `${window.siteUrl}assets/includes/functions/ajax-handlers/ajax-get-societies.php` : '../assets/includes/functions/ajax-handlers/ajax-get-societies.php';
            
            fetch(`${ajaxGetUrl}`)
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    const society = data.data.find(s => s.society_unique_id === societyId);
                    if (society) {
                        societyLegalNameSpan.innerText = society.society_legal_name;
                        // Pre-fill fields if needed or set hidden ID
                        const idInput = document.createElement('input');
                        idInput.type = 'hidden';
                        idInput.name = 'society_unique_id';
                        idInput.value = societyId;
                        addSocietyForm.appendChild(idInput);

                        // Auto-detect and handle existing domain
                        if (society.society_domain) {
                            societyDomainInput.value = society.society_domain;
                            
                            // Auto-toggle to custom domain section
                            if (ownADomainSwitch && !ownADomainSwitch.checked) {
                                ownADomainSwitch.checked = true;
                                platformSuggestionsSection.classList.add('d-none');
                                ownDomainFormSection.classList.remove('d-none');
                            }

                            // Trigger auto-verification
                            setTimeout(() => {
                                if (checkConnectionBtn) {
                                    checkConnectionBtn.click();
                                }
                            }, 500);
                        }
                    } else {
                        console.error('Society not found');
                        societyLegalNameSpan.innerText = 'Unknown Society';
                    }
                }
            })
            .catch(err => console.error('Error fetching society details:', err));
        }

        // DNS Connection Flow
        const checkConnectionBtn = document.getElementById('checkConnectionBtn');
        const dnsInstructionsContainer = document.getElementById('dnsInstructionsContainer');
        const dnsRecordsBody = document.getElementById('dnsRecordsBody');
        const societyDomainInput = document.getElementById('societyDomain');

        if (checkConnectionBtn) {
            checkConnectionBtn.addEventListener('click', function() {
                const domain = societyDomainInput.value.trim().toLowerCase();
                
                if (!domain) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Domain Required',
                        text: 'Please enter your society domain first.'
                    });
                    return;
                }

                // Show loading state
                const originalText = this.innerHTML;
                this.disabled = true;
                this.innerHTML = '<iconify-icon icon="line-md:loading-twotone-loop" class="me-1"></iconify-icon> Checking...';

                // Simulate/Parse DNS logic (from user provided logic)
                const parts = domain.split('.');
                let recordsHtml = '';
                const masterServer = "app-propertease.abhinavjain.site";
                const serverIp = "82.112.229.182"; // Updated from resolution

                if (parts.length > 2) {
                    // Subdomain case: portal.society.com -> Host is 'portal'
                    const host = parts[0];
                    recordsHtml += `
                        <tr>
                            <td class="p-8"><span class="badge bg-primary-100 text-primary-600">CNAME</span></td>
                            <td class="p-8 fw-bold">${host}</td>
                            <td class="p-8 text-secondary-light">${masterServer}</td>
                            <td class="p-8 text-secondary-light">3600 (1 Hour)</td>
                        </tr>
                    `;
                } else {
                    // Root Domain Case: society.com -> Host 'www' and '@'
                    recordsHtml += `
                        <tr>
                            <td class="p-8"><span class="badge bg-primary-100 text-primary-600">CNAME</span></td>
                            <td class="p-8 fw-bold">www</td>
                            <td class="p-8 text-secondary-light">${masterServer}</td>
                            <td class="p-8 text-secondary-light">3600 (1 Hour)</td>
                        </tr>
                        <tr>
                            <td class="p-8"><span class="badge bg-success-100 text-success-600">A-Record</span></td>
                            <td class="p-8 fw-bold">@</td>
                            <td class="p-8 text-secondary-light">${serverIp}</td>
                            <td class="p-8 text-secondary-light">3600 (1 Hour)</td>
                        </tr>
                    `;
                }

                dnsRecordsBody.innerHTML = recordsHtml;
                dnsInstructionsContainer.classList.remove('d-none');
                dnsInstructionsContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                // Now perform LIVE DNS Verification via AJAX
                const verifyUrl = window.siteUrl ? `${window.siteUrl}assets/includes/functions/ajax-handlers/ajax-verify-society-domain.php` : '../assets/includes/functions/ajax-handlers/ajax-verify-society-domain.php';
                
                const verifyData = new FormData();
                verifyData.append('society_id', societyId);
                verifyData.append('domain', domain);

                fetch(verifyUrl, {
                    method: 'POST',
                    body: verifyData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Verification Successful!',
                            text: data.message,
                            showCancelButton: true,
                            confirmButtonText: 'Visit Society Website & Complete Setup',
                            cancelButtonText: 'Go to Dashboard',
                            confirmButtonColor: '#28a745',
                            cancelButtonColor: '#2D31FA',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to the live domain
                                window.location.href = `https://${domain}`;
                            } else {
                                // Fallback to societies dashboard
                                window.location.href = `${window.siteUrl}dashboard/index.php?type=societies`;
                            }
                        });
                    } else if (data.status === 'error' && data.is_duplicate) {
                        // Handle duplicate domain case specifically as requested
                        dnsInstructionsContainer.classList.add('d-none'); // Hide if already visible
                        Swal.fire({
                            icon: 'error',
                            title: 'Domain in Use',
                            text: data.message,
                            confirmButtonColor: '#2D31FA'
                        });
                    } else {
                        // Not pointing yet, instructions are already visible
                        console.log('DNS Verification:', data.message);
                    }
                })
                .catch(err => console.error('Verification Error:', err))
                .finally(() => {
                    this.disabled = false;
                    this.innerHTML = originalText;
                });
            });
        }

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
                    societyDomain: 'Society Domain'
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
                            window.location.reload();
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
</script>