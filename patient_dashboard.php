<?php include 'includes/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4">
    <a class="navbar-brand fw-bold text-purple" href="#">ChronicCare Patient</a>
    <div class="ms-auto d-flex align-items-center">
        <span class="me-3">Hello, Vo Van Na</span>
        <a href="index.php" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container py-5">
    <!-- Risk Alert Banner -->
    <div class="alert alert-danger d-flex align-items-center shadow-sm" role="alert">
        <i class="fa-solid fa-circle-exclamation fa-2x me-3"></i>
        <div>
            <h5 class="alert-heading fw-bold mb-0">Action Required: Blood Pressure High</h5>
            <p class="mb-0">Your recent readings are elevated (165/95). Please rest and re-measure, or consult your
                doctor.</p>
        </div>
        <a href="consultation.php?role=patient" class="btn btn-danger ms-auto px-4">Talk to Doctor</a>
        <div class="dropdown ms-3">
            <button class="btn btn-warning dropdown-toggle" type="button" id="selfCareDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Self-Care Guidance
            </button>
            <ul class="dropdown-menu" aria-labelledby="selfCareDropdown">
                <li><a class="dropdown-item" href="selfcare_symptom_select.php"><i
                            class="fa-solid fa-stethoscope me-2"></i> Check Symptoms</a></li>
                <li><a class="dropdown-item" href="selfcare_guidebook.php"><i class="fa-solid fa-book-medical me-2"></i>
                        Open Health Guidebook</a></li>
            </ul>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <!-- Vitals Cards -->
        <div class="col-md-3">
            <div class="card p-4 text-center h-100">
                <i class="fa-solid fa-heart-pulse text-danger fa-2x mb-3"></i>
                <h6 class="text-muted">Blood Pressure</h6>
                <h2 class="fw-bold text-danger">165/95</h2>
                <small class="text-muted">Last check: 10 mins ago</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center h-100">
                <i class="fa-solid fa-heart text-purple fa-2x mb-3"></i>
                <h6 class="text-muted">Heart Rate</h6>
                <h2 class="fw-bold">92 <small class="fs-6 text-muted">bpm</small></h2>
                <small class="text-muted">Normal</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center h-100">
                <i class="fa-solid fa-droplet text-info fa-2x mb-3"></i>
                <h6 class="text-muted">Glucose</h6>
                <h2 class="fw-bold">180 <small class="fs-6 text-muted">mg/dL</small></h2>
                <small class="text-warning">Slightly High</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center h-100 bg-purple text-white">
                <i class="fa-solid fa-notes-medical fa-2x mb-3"></i>
                <h6 class="text-white-50">Medication</h6>
                <h4 class="fw-bold">Amlodipine</h4>
                <small>Next dose: 2:00 PM</small>
                <div class="mt-3">
                    <button class="btn btn-light btn-sm w-100 text-purple fw-bold">Mark Taken</button>
                </div>
            </div>
        </div>
    </div>

    <!-- EHR Summary Card -->
    <div class="card mb-4">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">My Health Record (EHR)</h5>
                <a href="patient_ehr.php" class="btn btn-primary">View My Health Record</a>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <small class="text-muted d-block">Latest Vitals</small>
                    <strong>BP 165/95, HR 92, Glucose 180, Sleep 6h</strong>
                </div>
                <div class="col-md-3">
                    <small class="text-muted d-block">Alerts</small>
                    <strong class="text-danger">Critical Alert: High Blood Pressure</strong>
                </div>
                <div class="col-md-3">
                    <small class="text-muted d-block">Medications</small>
                    <strong>Amlodipine, next dose 2:00 PM</strong>
                </div>
                <div class="col-md-3">
                    <small class="text-muted d-block">Last Teleconsultation</small>
                    <strong>Yesterday</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row">
        <div class="col-md-8">
            <div class="card p-4">
                <h5 class="fw-bold mb-4">Weekly Blood Pressure Trend</h5>
                <canvas id="bpChart" height="120"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-4">Recent Activity</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0 d-flex justify-content-between">
                        <span><i class="fa-solid fa-video text-purple me-2"></i> Teleconsultation</span>
                        <small class="text-muted">Yesterday</small>
                    </li>
                    <li class="list-group-item px-0 d-flex justify-content-between">
                        <span><i class="fa-solid fa-pills text-success me-2"></i> Meds Taken</span>
                        <small class="text-muted">Today 8:00 AM</small>
                    </li>
                    <li class="list-group-item px-0 d-flex justify-content-between">
                        <span><i class="fa-solid fa-triangle-exclamation text-danger me-2"></i> High BP Alert</span>
                        <small class="text-muted">Today 10:30 AM</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    const ctx = document.getElementById('bpChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Systolic',
                data: [130, 132, 135, 128, 140, 155, 165],
                borderColor: '#DC2626',
                tension: 0.3
            }, {
                label: 'Diastolic',
                data: [80, 82, 85, 80, 88, 92, 95],
                borderColor: '#F59E0B',
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });
</script>