<?php
include 'includes/header.php';
include 'includes/selfcare_data.php';

$symptom_id = $_GET['symptom'] ?? 'fatigue';
$data = $symptom_details[$symptom_id] ?? null;

if (!$data) {
    echo "<div class='container p-5 text-center'><h3>Symptom not found.</h3><a href='selfcare_symptom_select.php'>Back</a></div>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="container py-5">
    <div class="d-flex align-items-center mb-4">
        <a href="selfcare_symptom_select.php" class="btn btn-light me-3 rounded-circle shadow-sm"
            style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;"><i
                class="fa-solid fa-arrow-left fa-lg"></i></a>
        <div>
            <h5 class="text-muted text-uppercase small mb-1">Self-Care Guide</h5>
            <h2 class="fw-bold mb-0 text-purple"><?php echo $data['label']; ?></h2>
        </div>
        <div class="ms-auto">
            <button class="btn btn-outline-secondary"><i class="fa-solid fa-print me-2"></i> Print Guide</button>
        </div>
    </div>

    <div class="row g-4">
        <!-- Left Col: Overview -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 mb-4 h-100">
                <h5 class="fw-bold mb-3">Symptoms Overview</h5>

                <h6 class="text-purple fw-bold mb-2"><i class="fa-solid fa-circle-exclamation me-2"></i> Primary
                    Symptoms</h6>
                <ul class="mb-4">
                    <?php foreach ($data['primary_symptoms'] ?? [] as $s): ?>
                        <li><?php echo $s; ?></li>
                    <?php endforeach; ?>
                </ul>

                <h6 class="text-secondary fw-bold mb-2"><i class="fa-solid fa-plus-circle me-2"></i> Associated</h6>
                <ul class="mb-4">
                    <?php foreach ($data['secondary_symptoms'] ?? [] as $s): ?>
                        <li><?php echo $s; ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="alert alert-warning border-0 bg-warning bg-opacity-10">
                    <h6 class="fw-bold text-warning mb-2"><i class="fa-solid fa-triangle-exclamation me-2"></i> When to
                        Seek Help</h6>
                    <p class="small mb-0"><?php echo $data['when_to_seek_help']; ?></p>
                </div>
            </div>
        </div>

        <!-- Right Col: Action Plan -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 mb-4">
                <h4 class="fw-bold mb-4">Immediate Action Plan</h4>

                <div class="mb-4">
                    <h5 class="fw-bold text-success mb-3"><i class="fa-solid fa-check-circle me-2"></i> What to Do</h5>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($data['immediate_actions'] ?? [] as $step): ?>
                            <li class="list-group-item px-0 border-bottom-0 py-2"><i
                                    class="fa-solid fa-check text-success me-3"></i> <?php echo $step; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h6 class="fw-bold text-danger mb-3"><i class="fa-solid fa-ban me-2"></i> What to Avoid</h6>
                            <ul class="ps-3 mb-0 small">
                                <?php foreach ($data['what_to_avoid'] ?? [] as $avoid): ?>
                                    <li><?php echo $avoid; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="bg-light p-3 rounded h-100">
                            <h6 class="fw-bold text-primary mb-3"><i class="fa-solid fa-pills me-2"></i> OTC Suggestions
                            </h6>
                            <ul class="ps-3 mb-0 small">
                                <?php foreach ($data['otc_meds'] ?? [] as $med): ?>
                                    <li><?php echo $med; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Self-Monitoring -->
                <div class="mt-2">
                    <button
                        class="btn btn-light w-100 text-start fw-bold d-flex justify-content-between align-items-center p-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#monitoringCollapse">
                        <span><i class="fa-solid fa-clipboard-list me-2"></i> Self-Monitoring Checklist</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="collapse show" id="monitoringCollapse">
                        <div class="card card-body border-0 bg-light mt-2">
                            <?php foreach ($data['monitoring_checklist'] ?? [] as $check): ?>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check_<?php echo md5($check); ?>">
                                    <label class="form-check-label" for="check_<?php echo md5($check); ?>">
                                        <?php echo $check; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Feedback Actions -->
            <div class="d-flex gap-3">
                <a href="patient_journal.php" class="btn btn-success btn-lg flex-grow-1 py-3 fw-bold">
                    <i class="fa-solid fa-book-medical me-2"></i> Add to My Journal
                </a>
                <a href="consultation.php?role=patient" class="btn btn-outline-danger btn-lg flex-grow-1 py-3 fw-bold">
                    <i class="fa-solid fa-user-doctor me-2"></i> Symptoms Worsening
                </a>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>