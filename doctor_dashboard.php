<?php include 'includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="col-md-10 p-4 bg-light">
            
            <!-- Top Section: Header & Risk Cards -->
            <div class="row mb-5">
                <div class="col-12 mb-4">
                    <h2 class="section-title">AI-Driven Patient Risk Overview</h2>
                </div>
                
                <!-- Risk Cards -->
                <div class="col-md-4">
                    <div class="card risk-card p-4 border-start border-5" style="border-color: var(--risk-high) !important;">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted fw-bold small">High Risk</h6>
                                <h1 class="display-4 fw-bold mb-0" style="color: var(--risk-high);">05</h1>
                            </div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded-circle" style="color: var(--risk-high);">
                                <i class="fa-solid fa-triangle-exclamation fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger"><i class="fa-solid fa-arrow-up"></i> +2 today</span>
                            <small class="text-muted ms-2">Monitor closely</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card risk-card p-4 border-start border-5" style="border-color: var(--risk-med) !important;">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted fw-bold small">Moderate Risk</h6>
                                <h1 class="display-4 fw-bold mb-0" style="color: var(--risk-med);">12</h1>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded-circle" style="color: var(--risk-med);">
                                <i class="fa-solid fa-file-medical fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-warning bg-opacity-10 text-warning"><i class="fa-solid fa-minus"></i> Stable</span>
                            <small class="text-muted ms-2">Review medication</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card risk-card p-4 border-start border-5" style="border-color: var(--risk-low) !important;">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="text-uppercase text-muted fw-bold small">Stable / Low</h6>
                                <h1 class="display-4 fw-bold mb-0" style="color: var(--risk-low);">85</h1>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle" style="color: var(--risk-low);">
                                <i class="fa-solid fa-heart-pulse fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success"><i class="fa-solid fa-check"></i> On track</span>
                            <small class="text-muted ms-2">Standard checkups</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Left Column: Patient Table & Analytics (65%) -->
                <div class="col-lg-8">
                    
                    <!-- Real-time Patient Data -->
                    <div class="card p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="mb-0 fw-bold">Real-time Patient Data</h4>
                            <div class="input-group w-auto">
                                <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-search text-muted"></i></span>
                                <input type="text" class="form-control border-start-0 ps-0" placeholder="Search...">
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-vitals table-hover hover-shadow">
                                <thead>
                                    <tr>
                                        <th>PATIENT</th>
                                        <th>BP (mmHg)</th>
                                        <th>HR (bpm)</th>
                                        <th>SpO2 (%)</th>
                                        <th>GLUCOSE</th>
                                        <th>TREND</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Patient 1 -->
                                    <tr onclick="window.location='consultation.php'" style="cursor: pointer;">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3" style="background: var(--risk-high);">VN</div>
                                                <div>
                                                    <div class="fw-bold">Vo Van Na</div>
                                                    <small class="text-danger fw-bold">High Risk</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-danger fw-bold">165/95</td>
                                        <td class="fw-bold">92</td>
                                        <td>96%</td>
                                        <td>180</td>
                                        <td width="120"><canvas id="spark1" height="30"></canvas></td>
                                    </tr>
                                    <!-- Patient 2 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3" style="background: var(--risk-med);">TL</div>
                                                <div>
                                                    <div class="fw-bold">Tran Thi Le</div>
                                                    <small class="text-warning fw-bold">Moderate</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-warning fw-bold">135/88</td>
                                        <td class="fw-bold">78</td>
                                        <td>98%</td>
                                        <td>140</td>
                                        <td width="120"><canvas id="spark2" height="30"></canvas></td>
                                    </tr>
                                    <!-- Patient 3 -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3" style="background: var(--risk-low);">NM</div>
                                                <div>
                                                    <div class="fw-bold">Nguyen Minh</div>
                                                    <small class="text-success fw-bold">Stable</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-success fw-bold">118/76</td>
                                        <td class="fw-bold">72</td>
                                        <td>99%</td>
                                        <td>105</td>
                                        <td width="120"><canvas id="spark3" height="30"></canvas></td>
                                    </tr>
                                     <!-- Patient 4 -->
                                     <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-circle me-3 bg-secondary">PA</div>
                                                <div>
                                                    <div class="fw-bold">Pham Anh</div>
                                                    <small class="text-muted">Stable</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted">120/80</td>
                                        <td class="fw-bold">70</td>
                                        <td>99%</td>
                                        <td>100</td>
                                        <td width="120"><canvas id="spark4" height="30"></canvas></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-link text-purple">View All Patients</button>
                        </div>
                    </div>

                    <!-- Analytics Section -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card p-4">
                                <h5 class="fw-bold mb-3">Health Trends (Weekly)</h5>
                                <canvas id="mainChart" height="150"></canvas>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4">
                                <h5 class="fw-bold mb-3">Patient Distribution</h5>
                                <canvas id="pieChart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Control Center (35%) -->
                <div class="col-lg-4">
                    
                    <!-- Selected Patient Control -->
                    <div class="card p-4 mb-4 bg-purple text-white position-relative overflow-hidden">
                        <div class="position-relative z-1">
                            <h5 class="mb-4">Active Session</h5>
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-white text-purple rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 60px; height: 60px; font-weight: bold; font-size: 1.5rem;">VN</div>
                                <div>
                                    <h3 class="mb-0 fw-bold">Vo Van Na</h3>
                                    <span class="badge bg-danger">Critical Alert</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="consultation.php" class="btn btn-light text-purple fw-bold shadow-sm"><i class="fa-solid fa-video me-2"></i> Start Consultation</a>
                                <button class="btn btn-outline-light"><i class="fa-solid fa-message me-2"></i> Send Message</button>
                            </div>
                        </div>
                        <!-- Decorative circle -->
                        <div class="position-absolute bottom-0 end-0 translate-middle-y rounded-circle bg-white opacity-10" style="width: 150px; height: 150px; margin-right: -40px;"></div>
                    </div>

                    <!-- Alerts Panel -->
                    <div class="card p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold mb-0">Alerts</h5>
                            <span class="badge bg-danger rounded-pill">3 New</span>
                        </div>
                        
                        <div class="alert-item critical">
                            <div class="d-flex justify-content-between">
                                <strong class="text-danger">BP Spike Detected</strong>
                                <small class="text-muted">10m ago</small>
                            </div>
                            <p class="mb-1 small">Vo Van Na: 165/95 mmHg sustained.</p>
                            <button class="btn btn-sm btn-outline-danger py-0 mt-1">Open Case</button>
                        </div>

                        <div class="alert-item behavior">
                            <div class="d-flex justify-content-between">
                                <strong class="text-warning">Missed Medication</strong>
                                <small class="text-muted">1h ago</small>
                            </div>
                            <p class="mb-1 small">Tran Thi Le missed 8:00 AM dose.</p>
                            <button class="btn btn-sm btn-outline-warning py-0 mt-1">Remind</button>
                        </div>

                         <div class="alert-item behavior">
                            <div class="d-flex justify-content-between">
                                <strong class="text-warning">Low Activity</strong>
                                <small class="text-muted">2h ago</small>
                            </div>
                            <p class="mb-1 small">Nguyen Minh: Daily step count < 1000.</p>
                        </div>
                    </div>

                    <!-- Mini EHR Updates -->
                    <div class="card p-4">
                        <h5 class="fw-bold mb-3">Recent Notes</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between mb-1">
                                    <strong>Dr. Nguyen</strong>
                                    <small class="text-muted">2h ago</small>
                                </div>
                                <p class="small text-muted mb-0">Adjusted dosage for Patient #892. Monitoring response.</p>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between mb-1">
                                    <strong>System AI</strong>
                                    <small class="text-muted">5h ago</small>
                                </div>
                                <p class="small text-muted mb-0">Generated weekly summary for Dr. Le review.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Chart Logic -->
<script>
    // Sparklines Configuration
    const commonOptions = {
        responsive: false,
        plugins: { legend: { display: false }, tooltip: { enabled: false } },
        scales: { x: { display: false }, y: { display: false } },
        elements: { point: { radius: 0 }, line: { borderWidth: 2 } }
    };

    function drawSpark(id, data, color) {
        new Chart(document.getElementById(id), {
            type: 'line',
            data: { labels: [1,2,3,4,5,6], datasets: [{ data: data, borderColor: color, fill: false, tension: 0.4 }] },
            options: commonOptions
        });
    }

    drawSpark('spark1', [150, 155, 160, 158, 162, 165], '#D62828');
    drawSpark('spark2', [130, 132, 135, 134, 136, 135], '#F2C94C');
    drawSpark('spark3', [118, 119, 118, 117, 118, 118], '#27AE60');
    drawSpark('spark4', [120, 121, 120, 119, 120, 120], '#6c757d');

    // Main Chart
    new Chart(document.getElementById('mainChart'), {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Consultations',
                data: [12, 19, 3, 5, 2, 3, 10],
                backgroundColor: 'rgba(108, 43, 217, 0.7)',
                borderRadius: 4
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } } }
    });

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'doughnut',
        data: {
            labels: ['High Risk', 'Medium', 'Stable'],
            datasets: [{
                data: [5, 12, 85],
                backgroundColor: ['#D62828', '#F2C94C', '#27AE60']
            }]
        },
        options: { responsive: true, cutout: '70%' }
    });
</script>