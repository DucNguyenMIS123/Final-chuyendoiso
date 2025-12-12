<?php
include 'includes/header.php';
include 'includes/mock_data.php';

// Simulate Patient ID (Vo Van Na)
$p = $patients[1];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4">
    <div class="d-flex align-items-center">
        <a href="patient_dashboard.php" class="btn btn-light btn-sm me-3"><i class="fa-solid fa-arrow-left"></i> Back to
            Dashboard</a>
        <span class="navbar-brand fw-bold text-purple mb-0">My Health Record</span>
    </div>
</nav>

<div class="container py-5">
    <!-- Patient Profile -->
    <div class="card p-4 mb-4">
        <div class="d-flex align-items-center">
            <div class="avatar-circle me-3"
                style="width: 60px; height: 60px; background: <?php echo $p['avatar_color']; ?>; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; border-radius: 50%;">
                <?php echo $p['initials']; ?>
            </div>
            <div>
                <h4 class="fw-bold mb-0"><?php echo $p['name']; ?></h4>
                <p class="text-muted mb-0"><?php echo $p['age']; ?> Years • <?php echo $p['gender']; ?></p>
                <small class="text-muted">Conditions: <?php echo implode(', ', $p['conditions']); ?></small>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Vitals History -->
        <div class="col-md-8">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-4">Vitals History</h5>
                <div class="alert alert-light border">
                    <div class="d-flex justify-content-between">
                        <strong>Blood Pressure</strong>
                        <span class="text-danger fw-bold">165/95 mmHg</span>
                    </div>
                </div>
                <div class="alert alert-light border">
                    <div class="d-flex justify-content-between">
                        <strong>Heart Rate</strong>
                        <span>92 bpm</span>
                    </div>
                </div>
                <div class="alert alert-light border">
                    <div class="d-flex justify-content-between">
                        <strong>Glucose</strong>
                        <span class="text-warning">180 mg/dL</span>
                    </div>
                </div>
                <div class="alert alert-light border">
                    <div class="d-flex justify-content-between">
                        <strong>Sleep</strong>
                        <span>6 Hours</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="col-md-4">
            <!-- Alerts -->
            <div class="card p-4 mb-4">
                <h5 class="fw-bold mb-3">Alerts</h5>
                <div class="alert alert-danger">
                    <i class="fa-solid fa-triangle-exclamation me-2"></i> Critical: High Blood Pressure
                </div>
                <div class="alert alert-warning">
                    <i class="fa-solid fa-file-medical me-2"></i> Moderate: Glucose Spikes
                </div>
            </div>

            <!-- Medications -->
            <div class="card p-4 mb-4">
                <h5 class="fw-bold mb-3">Medications</h5>
                <ul class="list-group list-group-flush">
                    <?php foreach ($p['medications'] as $med): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <div>
                                <strong><?php echo $med['name']; ?></strong><br>
                                <small class="text-muted"><?php echo $med['dose']; ?> - <?php echo $med['freq']; ?></small>
                            </div>
                            <span class="badge bg-light text-dark border"><?php echo $med['adherence']; ?>% Adherence</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-3">Recent Consultations</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                        <div class="d-flex justify-content-between">
                            <strong>Dr. Nguyen</strong>
                            <small class="text-muted">Yesterday</small>
                        </div>
                        <p class="mb-0 small text-muted">Follow-up on high BP. Dosage adjusted.</p>
                    </li>
                    <li class="list-group-item px-0">
                        <div class="d-flex justify-content-between">
                            <strong>Dr. Le</strong>
                            <small class="text-muted">Nov 10, 2025</small>
                        </div>
                        <p class="mb-0 small text-muted">Routine checkup. Everything stable.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-3">Doctor Notes</h5>
                <div class="bg-light p-3 rounded mb-3">
                    <small class="text-muted d-block mb-1">Yesterday • Dr. Nguyen</small>
                    <p class="mb-0 fst-italic">"Patient reports consistent headaches in the morning. BP is elevated.
                        Increasing Amlodipine dose. Recommended low-sodium diet."</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>