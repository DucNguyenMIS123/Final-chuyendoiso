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
                <h5 class="fw-bold mb-4">Pathology / Lab Results</h5>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Test Name</th>
                                <th>Result</th>
                                <th>Reference Range</th>
                                <th>Date</th>
                                <th>Flag</th>
                                <th>Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>HbA1c</strong></td>
                                <td class="text-danger fw-bold">7.2%</td>
                                <td>4.0% - 5.6%</td>
                                <td>Nov 10, 2025</td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td><i class="fa-solid fa-arrow-trend-up text-danger"></i></td>
                            </tr>
                            <tr>
                                <td><strong>Fasting Glucose</strong></td>
                                <td class="text-warning fw-bold">120 mg/dL</td>
                                <td>70 - 100 mg/dL</td>
                                <td>Nov 10, 2025</td>
                                <td><span class="badge bg-warning text-dark">Borderline</span></td>
                                <td><i class="fa-solid fa-arrow-right text-warning"></i></td>
                            </tr>
                            <tr>
                                <td><strong>Total Cholesterol</strong></td>
                                <td>180 mg/dL</td>
                                <td>
                                    < 200 mg/dL</td>
                                <td>Nov 10, 2025</td>
                                <td><span class="badge bg-success">Normal</span></td>
                                <td><i class="fa-solid fa-arrow-trend-down text-success"></i></td>
                            </tr>
                            <tr>
                                <td><strong>Creatinine</strong></td>
                                <td>0.9 mg/dL</td>
                                <td>0.7 - 1.3 mg/dL</td>
                                <td>Nov 10, 2025</td>
                                <td><span class="badge bg-success">Normal</span></td>
                                <td><i class="fa-solid fa-arrow-right text-secondary"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>