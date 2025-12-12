<?php
include 'includes/header.php';
include 'includes/mock_data.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <div class="col-md-10 p-4 bg-light">
            <?php include 'includes/ehr_common.php'; ?>

            <!-- Dashboard Grid -->
            <div class="row g-4">
                <!-- Vitals Summary -->
                <div class="col-md-8">
                    <div class="card p-4 h-100">
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="fw-bold">Recent Vitals</h5>
                            <small class="text-muted">Updated: <?php echo $p['last_vital']; ?></small>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block">Blood Pressure</small>
                                    <h3
                                        class="fw-bold <?php echo $p['risk_level'] == 'High' ? 'text-danger' : 'text-dark'; ?>">
                                        <?php echo $p['bp']; ?>
                                    </h3>
                                    <small>mmHg</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block">Heart Rate</small>
                                    <h3 class="fw-bold text-dark"><?php echo $p['hr']; ?></h3>
                                    <small>bpm</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block">Glucose</small>
                                    <h3 class="fw-bold text-warning"><?php echo $p['glucose']; ?></h3>
                                    <small>mg/dL</small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6>7-Day BP Trend</h6>
                            <canvas id="overviewChart" height="100"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Profile & Alerts -->
                <div class="col-md-4">
                    <div class="card p-4 mb-4">
                        <h5 class="fw-bold mb-3">Medical Profile</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>Conditions:</strong> <br>
                                <?php echo implode(', ', $p['conditions']); ?></li>
                            <li class="mb-2"><strong>Allergies:</strong> <br> <span
                                    class="text-danger"><?php echo implode(', ', $p['allergies']); ?></span></li>
                            <li class="mb-2"><strong>Primary Dr:</strong> <br> Dr. Nguyen</li>
                        </ul>
                    </div>

                    <div class="card p-4">
                        <h5 class="fw-bold mb-3">Active Alerts</h5>
                        <?php if ($p['risk_level'] == 'High'): ?>
                            <div class="alert alert-danger d-flex align-items-start">
                                <i class="fa-solid fa-triangle-exclamation mt-1 me-2"></i>
                                <div>
                                    <strong>BP Spike Critical</strong>
                                    <div class="small">Sustained > 160mmHg for 48h.</div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="alert alert-warning d-flex align-items-start">
                            <i class="fa-solid fa-pills mt-1 me-2"></i>
                            <div>
                                <strong>Adherence Drop</strong>
                                <div class="small">Missed evening dose yesterday.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Quick Notes -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold">Latest Clinical Note</h5>
                            <a href="ehr_notes.php?id=<?php echo $p['id']; ?>"
                                class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="bg-light p-3 rounded border-start border-4 border-primary">
                            <small class="text-muted d-block mb-1">Nov 12, 2025 • Teleconsultation</small>
                            <p class="mb-0">Patient reports slight dizziness in mornings. BP remains elevated despite
                                medication adherence. Advised to increase hydration and monitor sodium intake. Will
                                review in 3 days.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    // Overview Mini Chart
    new Chart(document.getElementById('overviewChart'), {
        type: 'line',
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [{
                label: 'Systolic',
                data: [145, 148, 150, 155, 160, 162, 165],
                borderColor: '#D62828',
                tension: 0.3
            }]
        },
        options: { plugins: { legend: { display: false } }, responsive: true }
    });
</script>