<?php include 'includes/header.php'; ?>

<div class="container-fluid vh-100 d-flex flex-column overflow-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white border-bottom px-4 flex-shrink-0">
        <div class="d-flex align-items-center">
            <a href="doctor_dashboard.php" class="btn btn-light me-3"><i class="fa-solid fa-arrow-left"></i> Exit</a>
            <span class="badge bg-danger animate-pulse me-2">● LIVE</span>
            <span class="fw-bold">Consultation with Vo Van Na (Patient)</span>
        </div>
        <div class="ms-auto" id="timer">00:00</div>
    </nav>

    <!-- Main Call Area -->
    <div class="row flex-grow-1 g-0">
        <!-- Video Feed (Left) -->
        <div class="col-md-9 bg-dark position-relative d-flex justify-content-center align-items-center">
            <!-- Placeholder for Video -->
            <div class="text-center text-white-50">
                <i class="fa-solid fa-user-doctor fa-5x mb-3"></i>
                <h3>Video Feed Active</h3>
                <p>Establishing secure connection...</p>
            </div>

            <!-- PIP (Patient View) -->
            <div class="position-absolute bottom-0 end-0 m-4 bg-black rounded shadow-lg"
                style="width: 200px; height: 150px; border: 2px solid #333;">
                <div class="w-100 h-100 d-flex align-items-center justify-content-center text-white">
                    <small>Self View</small>
                </div>
            </div>

            <!-- Controls -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 d-flex gap-3">
                <button class="btn btn-secondary rounded-circle p-3"><i class="fa-solid fa-microphone"></i></button>
                <button class="btn btn-secondary rounded-circle p-3"><i class="fa-solid fa-video"></i></button>
                <a href="doctor_dashboard.php" class="btn btn-danger rounded-circle p-3 px-4"><i
                        class="fa-solid fa-phone-slash"></i></a>
            </div>
        </div>

        <!-- Sidebar Info (Right) -->
        <div class="col-md-3 bg-white border-start d-flex flex-column">
            <!-- Patient Mini Profile -->
            <div class="p-3 border-bottom">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center me-3"
                        style="width: 48px; height: 48px;">VN</div>
                    <div>
                        <h6 class="mb-0 fw-bold">Vo Van Na</h6>
                        <small class="text-danger fw-bold">High Risk</small>
                    </div>
                </div>
                <div class="row text-center g-2">
                    <div class="col-4">
                        <div class="bg-light rounded p-2">
                            <small class="d-block text-muted">HR</small>
                            <strong>92</strong>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light rounded p-2">
                            <small class="d-block text-muted">BP</small>
                            <strong class="text-danger">165/95</strong>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-light rounded p-2">
                            <small class="d-block text-muted">Glu</small>
                            <strong>180</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notes Section -->
            <div class="flex-grow-1 p-3 d-flex flex-column">
                <h6 class="fw-bold mb-2">Doctor Notes</h6>
                <textarea class="form-control flex-grow-1 mb-3"
                    placeholder="Type consultation notes here..."></textarea>
                <button class="btn btn-purple w-100">Save to EHR</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple Timer
    let seconds = 0;
    setInterval(() => {
        seconds++;
        const mins = Math.floor(seconds / 60).toString().padStart(2, '0');
        const secs = (seconds % 60).toString().padStart(2, '0');
        document.getElementById('timer').innerText = `${mins}:${secs}`;
    }, 1000);
</script>

<!-- Note: Footer excluded here for full screen layout -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>