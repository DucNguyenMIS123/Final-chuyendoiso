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
                    <h5 class="fw-bold">Vitals Trends</h5>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary active">24h</button>
                        <button class="btn btn-outline-secondary">7 Days</button>
                        <button class="btn btn-outline-secondary">30 Days</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card p-3 shadow-sm">
                            <h6 class="text-center">Blood Pressure</h6>
                            <canvas id="bpChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card p-3 shadow-sm">
                            <h6 class="text-center">Heart Rate</h6>
                            <canvas id="hrChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6 class="text-center">Glucose</h6>
                            <canvas id="gluChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6 class="text-center">Sleep Score</h6>
                            <canvas id="sleepChart"></canvas>
                        </div>
                    </div>
                </div>

                <h5 class="fw-bold mt-5 mb-3">Reading History</h5>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>BP (mmHg)</th>
                            <th>HR (bpm)</th>
                            <th>SpO2 (%)</th>
                            <th>Glucose (mg/dL)</th>
                            <th>Source</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Today, 08:00 AM</td>
                            <td>165/95</td>
                            <td>92</td>
                            <td>96</td>
                            <td>180</td>
                            <td>Wearable</td>
                        </tr>
                        <tr>
                            <td>Today, 04:00 AM</td>
                            <td>158/90</td>
                            <td>88</td>
                            <td>97</td>
                            <td>175</td>
                            <td>Wearable</td>
                        </tr>
                        <tr>
                            <td>Yesterday, 08:00 PM</td>
                            <td>160/92</td>
                            <td>90</td>
                            <td>96</td>
                            <td>190</td>
                            <td>Wearable</td>
                        </tr>
                        <tr>
                            <td>Yesterday, 12:00 PM</td>
                            <td>155/88</td>
                            <td>85</td>
                            <td>98</td>
                            <td>160</td>
                            <td>Manual Entry</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    function createChart(id, label, color, data) {
        new Chart(document.getElementById(id), {
            type: 'line',
            data: {
                labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00'],
                datasets: [{ label: label, data: data, borderColor: color, tension: 0.4 }]
            },
            options: { responsive: true }
        });
    }
    createChart('bpChart', 'Systolic', '#D62828', [140, 142, 145, 150, 160, 165]);
    createChart('hrChart', 'Heart Rate', '#10B981', [70, 68, 72, 85, 90, 92]);
    createChart('gluChart', 'Glucose', '#F59E0B', [110, 115, 120, 160, 175, 180]);
    createChart('sleepChart', 'Sleep Score', '#6C2BD9', [85, 82, 78, 80, 75, 70]);
</script>