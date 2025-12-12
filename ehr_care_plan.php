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
                        <h5 class="fw-bold mb-4 text-purple">Long-Term Care Plan (Hypertension Management)</h5>

                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase text-muted small">Treatment Goals</h6>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="fa-regular fa-square me-2"></i> Reduce SBP to <
                                        140 mmHg within 3 months.</li>
                                <li class="list-group-item"><i class="fa-regular fa-square-check me-2 text-success"></i>
                                    Maintain BMI < 25 (Achieved).</li>
                                <li class="list-group-item"><i class="fa-regular fa-square me-2"></i> Reduce daily
                                    sodium intake to < 2000mg.</li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold text-uppercase text-muted small">Lifestyle Strategy</h6>
                            <p><strong>Diet:</strong> DASH Diet implementation. Focus on leafy greens, reduced salt.</p>
                            <p><strong>Activity:</strong> 30 mins brisk walking, 5 days/week.</p>
                            <p><strong>Monitoring:</strong> Daily AM/PM BP logs transmitted via Wearable.</p>
                        </div>

                        <div>
                            <h6 class="fw-bold text-uppercase text-muted small">Care Team Notes</h6>
                            <div class="bg-light p-3 rounded">
                                <p class="mb-0 small">"Patient is motivated but struggles with dietary restrictions
                                    during holidays. Suggested meal prep service." - Dr. Nguyen</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-4 bg-purple text-white mb-4">
                        <h5><i class="fa-solid fa-calendar-days me-2"></i> Follow-up Schedule</h5>
                        <div class="mt-3">
                            <div class="d-flex border-bottom border-white border-opacity-25 pb-2 mb-2">
                                <span class="opacity-75 me-auto">Next Video Check-in</span>
                                <strong>Nov 20</strong>
                            </div>
                            <div class="d-flex border-bottom border-white border-opacity-25 pb-2 mb-2">
                                <span class="opacity-75 me-auto">Lab Panels</span>
                                <strong>Dec 15</strong>
                            </div>
                            <div class="d-flex">
                                <span class="opacity-75 me-auto">Cardiology Review</span>
                                <strong>Jan 10</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>