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
                <div class="col-md-6 mb-4">
                    <div class="card p-4 h-100 border-start border-5 border-danger">
                        <h5 class="fw-bold mb-3">AI Risk Assessment</h5>
                        <div class="text-center py-4">
                            <h1 class="display-1 fw-bold text-danger">85<span class="fs-4">/100</span></h1>
                            <span class="badge bg-danger fs-5 px-4 mb-3">HIGH RISK</span>
                            <p class="text-muted">Calculated based on last 7 days of vital data.</p>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" style="width: 30%"></div>
                            <div class="progress-bar bg-warning" style="width: 30%"></div>
                            <div class="progress-bar bg-danger" style="width: 25%"></div>
                        </div>
                        <div class="d-flex justify-content-between small text-muted mt-1">
                            <span>Low</span><span>Moderate</span><span>High</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card p-4 h-100">
                        <h5 class="fw-bold mb-3">Contributing Factors (XAI)</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div><i class="fa-solid fa-arrow-trend-up text-danger me-2"></i> Sustained Systolic BP >
                                    160mmHg</div>
                                <strong class="text-danger">+40 pts</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div><i class="fa-solid fa-droplet text-warning me-2"></i> Elevated Fasting Glucose
                                </div>
                                <strong class="text-warning">+20 pts</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div><i class="fa-solid fa-person-cane text-secondary me-2"></i> Age Factor (>65)</div>
                                <strong class="text-secondary">+15 pts</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div><i class="fa-solid fa-pills text-success me-2"></i> Medication Adherence (>80%)
                                </div>
                                <strong class="text-success">-10 pts</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card p-4">
                <h5 class="fw-bold mb-4">Risk Score Trend (30 Days)</h5>
                <canvas id="riskTrendChart" height="80"></canvas>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    new Chart(document.getElementById('riskTrendChart'), {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Risk Score',
                data: [60, 65, 80, 85],
                borderColor: '#DC2626',
                backgroundColor: 'rgba(220, 38, 38, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: { responsive: true }
    });
</script>