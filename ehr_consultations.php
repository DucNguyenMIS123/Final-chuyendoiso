<?php
include 'includes/header.php';
include 'includes/mock_data.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        <div class="col-md-10 p-4 bg-light">
            <?php include 'includes/ehr_common.php'; ?>

            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold">Consultation History</h5>
                    <a href="consultation.php?role=doctor" class="btn btn-purple"><i class="fa-solid fa-video me-2"></i>
                        Start
                        New</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Date/Time</th>
                                <th>Type</th>
                                <th>Provider</th>
                                <th>Summary</th>
                                <th>Risk @ Visit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nov 12, 2025<br><small class="text-muted">10:00 AM</small></td>
                                <td><i class="fa-solid fa-video text-purple me-2"></i> Telehealth</td>
                                <td>Dr. Nguyen</td>
                                <td>Emergency BP check. Med adjustment.</td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td><button class="btn btn-sm btn-outline-secondary">View Details</button></td>
                            </tr>
                            <tr>
                                <td>Oct 01, 2025<br><small class="text-muted">09:30 AM</small></td>
                                <td><i class="fa-solid fa-hospital-user text-secondary me-2"></i> In-Clinic</td>
                                <td>Dr. Nguyen</td>
                                <td>Routine diabetes screening.</td>
                                <td><span class="badge bg-warning text-dark">Moderate</span></td>
                                <td><button class="btn btn-sm btn-outline-secondary">View Details</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>