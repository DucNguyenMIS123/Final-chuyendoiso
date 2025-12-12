<?php include 'includes/header.php'; ?>

<div class="container py-5 d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="card p-5 text-center shadow-lg border-0" style="max-width: 600px; border-radius: 20px;">
        <div class="mb-4">
            <div class="bg-success bg-opacity-10 text-success d-inline-flex p-4 rounded-circle mb-3">
                <i class="fa-solid fa-book-medical fa-3x"></i>
            </div>
            <h2 class="fw-bold mb-3">Journal Entry Saved</h2>
            <p class="text-muted fs-5">Your symptoms and self-care actions have been recorded in your private health
                journal.</p>
        </div>

        <div class="d-grid gap-3">
            <a href="patient_dashboard.php" class="btn btn-purple btn-lg py-3 fw-bold">
                <i class="fa-solid fa-house me-2"></i> Return to Dashboard
            </a>
            <a href="selfcare_guidebook.php" class="btn btn-outline-primary btn-lg py-3 fw-bold">
                <i class="fa-solid fa-book-open me-2"></i> Browse Health Guidebook
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>