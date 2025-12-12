<?php
// Shared Logic for EHR Pages
if (!isset($_GET['id'])) {
    // Default to patient 1 if no ID provided
    $patient_id = 1;
} else {
    $patient_id = $_GET['id'];
}
$p = $patients[$patient_id] ?? $patients[1];

$current_page = basename($_SERVER['PHP_SELF']);
$nav_items = [
    'ehr_overview.php' => 'Overview',
    'ehr_vitals_history.php' => 'Vitals History',
    'ehr_consultations.php' => 'Consultations',
    'ehr_notes.php' => 'Clinical Notes',
    'ehr_medications.php' => 'Medications',
    'ehr_labs.php' => 'Lab Results',
    'ehr_care_plan.php' => 'Care Plan',
    'ehr_ai_risk.php' => 'AI Risk Analysis'
];
?>

<div class="mb-4">
    <!-- Patient Context Header -->
    <div class="d-flex justify-content-between align-items-center bg-white p-3 rounded-3 shadow-sm mb-3 border">
        <div class="d-flex align-items-center">
            <a href="patients_list.php" class="btn btn-light btn-sm me-3"><i class="fa-solid fa-arrow-left"></i>
                Back</a>
            <div class="avatar-circle me-3"
                style="width: 50px; height: 50px; background: <?php echo $p['avatar_color']; ?>;">
                <?php echo $p['initials']; ?>
            </div>
            <div>
                <h4 class="mb-0 fw-bold"><?php echo $p['name']; ?></h4>
                <small class="text-muted">
                    <?php echo $p['age']; ?> yrs • <?php echo $p['gender']; ?> •
                    Risk: <?php echo getRiskBadge($p['risk_level']); ?>
                </small>
            </div>
        </div>
        <div>
            <a href="consultation.php?id=<?php echo $p['id']; ?>&role=doctor" class="btn btn-purple"><i
                    class="fa-solid fa-video me-2"></i> Start Consultation</a>
        </div>
    </div>

    <!-- EHR Navigation Tabs -->
    <ul class="nav nav-pills bg-white p-2 rounded-3 shadow-sm border">
        <?php foreach ($nav_items as $file => $label): ?>
            <li class="nav-item">
                <a class="nav-link <?php echo $current_page == $file ? 'active bg-purple' : 'text-secondary'; ?>"
                    href="<?php echo $file; ?>?id=<?php echo $p['id']; ?>">
                    <?php echo $label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>