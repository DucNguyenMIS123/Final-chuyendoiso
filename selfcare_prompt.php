<?php include 'includes/header.php'; ?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="card p-5 text-center shadow-lg border-0" style="max-width: 600px; border-radius: 20px;">
        <div class="mb-4">
            <div class="bg-warning bg-opacity-10 text-warning d-inline-flex p-4 rounded-circle mb-3">
                <i class="fa-solid fa-bell fa-3x"></i>
            </div>
            <h2 class="fw-bold mb-3">Health Alert Detected</h2>
            <p class="text-muted fs-5">We noticed a change in your vitals trends (Elevated BP). <br>How would you like
                to proceed?</p>
        </div>

        <div class="d-grid gap-3">
            <a href="consultation.php?role=patient" class="btn btn-purple btn-lg py-3 fw-bold">
                <i class="fa-solid fa-user-doctor me-2"></i> Star Consultation with Doctor
            </a>
            <div class="text-muted my-1">- OR -</div>
            <a href="selfcare_symptom_select.php" class="btn btn-outline-primary btn-lg py-3 fw-bold">
                <i class="fa-solid fa-hand-holding-heart me-2"></i> I want Self-Care Guidance
            </a>
        </div>
        <div class="mt-4">
            <a href="patient_dashboard.php" class="text-muted text-decoration-none"><i
                    class="fa-solid fa-xmark me-1"></i> Dismiss</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>