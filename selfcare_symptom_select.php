<?php
include 'includes/header.php';
include 'includes/selfcare_data.php';
?>

<div class="container py-5">
    <div class="d-flex align-items-center mb-5">
        <a href="patient_dashboard.php" class="btn btn-light me-3 rounded-circle shadow-sm"
            style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;"><i
                class="fa-solid fa-arrow-left fa-lg"></i></a>
        <div>
            <h2 class="fw-bold mb-0">What are you feeling?</h2>
            <p class="text-muted mb-0">Select a symptom for immediate self-care advice.</p>
        </div>
    </div>

    <!-- Search -->
    <div class="mb-5 position-relative">
        <input type="text" class="form-control form-control-lg border-0 shadow-sm ps-5 py-3"
            placeholder="Search your symptom (e.g. Headache, Fever)..." style="border-radius: 50px;">
        <i class="fa-solid fa-search text-muted position-absolute top-50 start-0 translate-middle-y ms-4 fa-lg"></i>
    </div>

    <?php foreach ($symptom_categories as $cat_name => $cat_data): ?>
        <div class="mb-5">
            <h5 class="fw-bold text-uppercase text-muted mb-4 ls-1">
                <i class="fa-solid <?php echo $cat_data['icon']; ?> me-2 <?php echo $cat_data['color']; ?>"></i>
                <?php echo $cat_name; ?>
            </h5>
            <div class="row g-3">
                <?php foreach ($cat_data['symptoms'] as $id => $label): ?>
                    <div class="col-md-6 col-lg-4">
                        <a href="selfcare_guidance.php?symptom=<?php echo $id; ?>" class="text-decoration-none">
                            <div class="card h-100 p-4 border-0 shadow-sm hover-move-up transition-all cursor-pointer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="fw-bold text-dark mb-0"><?php echo $label; ?></h5>
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 40px; height: 40px;">
                                        <i class="fa-solid fa-chevron-right text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<style>
    .hover-move-up:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }
</style>

<?php include 'includes/footer.php'; ?>