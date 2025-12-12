<?php
include 'includes/header.php';
include 'includes/mock_data.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <div class="col-md-10 p-4 bg-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0">Patient Registry</h2>
                <div class="input-group w-25">
                    <span class="input-group-text bg-white border-end-0"><i
                            class="fa-solid fa-search text-muted"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0" placeholder="Search patients...">
                </div>
            </div>

            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name / ID</th>
                                <th>Demographics</th>
                                <th>Conditions</th>
                                <th>Risk Level</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($patients as $p): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle me-3"
                                                style="background: <?php echo $p['avatar_color']; ?>;">
                                                <?php echo $p['initials']; ?></div>
                                            <div>
                                                <h6 class="mb-0 fw-bold"><?php echo $p['name']; ?></h6>
                                                <small class="text-muted">ID: #839<?php echo $p['id']; ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $p['age']; ?> yrs <br>
                                        <small class="text-muted"><?php echo $p['gender']; ?></small>
                                    </td>
                                    <td>
                                        <?php foreach ($p['conditions'] as $c): ?>
                                            <span
                                                class="badge bg-secondary bg-opacity-10 text-secondary mb-1"><?php echo $c; ?></span>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?php echo getRiskBadge($p['risk_level']); ?></td>
                                    <td><?php echo $p['last_vital']; ?></td>
                                    <td>
                                        <a href="ehr_overview.php?id=<?php echo $p['id']; ?>"
                                            class="btn btn-purple btn-sm">View EHR</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>