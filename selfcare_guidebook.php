<?php
include 'includes/header.php';
include 'includes/selfcare_data.php';
?>

<div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="fw-bold mb-3">Health Guidebook</h1>
        <p class="text-muted fs-5" style="max-width: 700px; margin: 0 auto;">
            A comprehensive library of health conditions, symptoms, and physician-approved self-care advice.
        </p>
    </div>

    <!-- Search (Client-side implementation mock) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="input-group input-group-lg shadow-sm">
                <span class="input-group-text bg-white border-end-0"><i
                        class="fa-solid fa-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0"
                    placeholder="Search for a condition or symptom...">
                <button class="btn btn-purple px-4 fw-bold">Search</button>
            </div>
        </div>
    </div>

    <!-- Categories -->
    <?php foreach ($symptom_categories as $cat_name => $cat_data): ?>
        <div class="mb-5">
            <div class="d-flex align-items-center mb-4 pb-2 border-bottom">
                <span class="fa-stack fa-lg me-3">
                    <i class="fa-solid fa-circle fa-stack-2x <?php echo $cat_data['color'] == 'text-danger' ? 'text-danger' :
                        ($cat_data['color'] == 'text-warning' ? 'text-warning' :
                            ($cat_data['color'] == 'text-info' ? 'text-info' : 'text-primary')); ?> opacity-25"></i>
                    <i class="fa-solid <?php echo $cat_data['icon']; ?> fa-stack-1x <?php echo $cat_data['color']; ?>"></i>
                </span>
                <h3 class="fw-bold mb-0"><?php echo $cat_name; ?> Health</h3>
            </div>

            <div class="row g-4">
                <?php foreach ($cat_data['symptoms'] as $id => $label):
                    // Fetch detail to see if we have specific risk level or color needed? 
                    // For now we use generic styling.
                    ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="fw-bold mb-3"><?php echo $label; ?></h5>
                                <p class="text-muted small mb-4 flex-grow-1">
                                    Click to view symptoms, immediate actions, and care guide.
                                </p>
                                <a href="selfcare_guidance.php?symptom=<?php echo $id; ?>"
                                    class="btn btn-light text-purple fw-bold w-100">
                                    Learn More <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?php include 'includes/footer.php'; ?>