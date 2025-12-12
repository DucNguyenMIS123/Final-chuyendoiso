<?php
include 'includes/header.php';
include 'includes/mock_data.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-10 p-4 bg-light">
            <?php include 'includes/ehr_common.php'; ?>

            <div class="row">
                <!-- Notes List -->
                <div class="col-md-7">
                    <div class="card p-4">
                        <h5 class="fw-bold mb-4">Historical Notes</h5>

                        <div class="list-group list-group-flush">
                            <div class="list-group-item p-3 border rounded mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-purple">Teleconsultation</span>
                                    <small class="text-muted">Nov 12, 2025</small>
                                </div>
                                <p class="mb-1 fw-bold">Subject: BP Elevation</p>
                                <p class="text-muted small"><strong>Plan:</strong> Increase Amlodipine to 10mg. Patient
                                    agreed to monitor daily.</p>
                            </div>

                            <div class="list-group-item p-3 border rounded mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-secondary">Routine Checkup</span>
                                    <small class="text-muted">Oct 15, 2025</small>
                                </div>
                                <p class="mb-1 fw-bold">Subject: Monthly Review</p>
                                <p class="text-muted small">Patient stable. Weight loss of 2kg noted. Encouraged to
                                    continue diet.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Note Form -->
                <div class="col-md-5">
                    <div class="card p-4 border-top border-4 border-purple">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-pen-to-square me-2"></i> New Clinical Note</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Subjective</label>
                                <textarea class="form-control" rows="2" placeholder="Patient complaints..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Objective</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Observed signs, Vitals (Auto-filled: BP 165/95)..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Assessment</label>
                                <textarea class="form-control" rows="2" placeholder="Diagnosis/Status..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Plan</label>
                                <textarea class="form-control" rows="2"
                                    placeholder="Treatment, prescriptions, follow-up..."></textarea>
                            </div>
                            <button type="button" class="btn btn-purple w-100">Save Note</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>