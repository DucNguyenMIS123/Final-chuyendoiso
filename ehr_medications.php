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
                <div class="col-md-8">
                    <div class="card p-4 mb-4">
                        <h5 class="fw-bold mb-4">Active Medications</h5>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Drug Name</th>
                                        <th>Dosage</th>
                                        <th>Frequency</th>
                                        <th>Start Date</th>
                                        <th>Adherence (30d)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($p['medications'] as $med): ?>
                                        <tr>
                                            <td class="fw-bold"><?php echo $med['name']; ?></td>
                                            <td><?php echo $med['dose']; ?></td>
                                            <td><?php echo $med['freq']; ?></td>
                                            <td>Sep 10, 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                                        <div class="progress-bar <?php echo $med['adherence'] > 80 ? 'bg-success' : 'bg-warning'; ?>"
                                                            style="width: <?php echo $med['adherence']; ?>%"></div>
                                                    </div>
                                                    <small><?php echo $med['adherence']; ?>%</small>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Active</span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h5 class="fw-bold mb-4">Overall Adherence</h5>
                        <div class="d-flex justify-content-center">
                            <canvas id="adherenceChart" style="max-height: 200px;"></canvas>
                        </div>
                        <div class="mt-3">
                            <small class="text-warning"><i class="fa-solid fa-triangle-exclamation"></i> Patient missed
                                2 doses this week.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    new Chart(document.getElementById('adherenceChart'), {
        type: 'doughnut',
        data: {
            labels: ['Taken', 'Missed'],
            datasets: [{
                data: [85, 15],
                backgroundColor: ['#10B981', '#F59E0B']
            }]
        },
        options: { cutout: '70%', responsive: true }
    });
</script>