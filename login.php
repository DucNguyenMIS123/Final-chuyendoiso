<?php include 'includes/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-5 shadow-lg" style="width: 400px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-purple mb-1">ChronicCare VN</h2>
            <p class="text-muted">Remote Chronic Disease Management</p>
        </div>

        <form action="">
            <!-- Javascript will handle the mock redirect -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="doctor@chroniccare.vn" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="••••••••" required>
            </div>

            <div class="d-grid gap-2">
                <button type="button" onclick="handleLogin()" class="btn btn-purple py-2">Sign In</button>
            </div>
            <div class="mt-3 text-center">
                <a href="landing_page.php" class="text-decoration-none text-muted small"><i
                        class="fa-solid fa-arrow-left"></i> Back to Home</a>
            </div>
        </form>

        <div class="mt-4 text-center">
            <small class="text-muted">Demo Credentials:</small><br>
            <small class="text-primary cursor-pointer" onclick="fillDoctor()">Doctor (doctor@chroniccare.vn)</small> |
            <small class="text-primary cursor-pointer" onclick="fillPatient()">Patient (patient@gmail.com)</small>
        </div>
    </div>
</div>

<script>
    function handleLogin() {
        const email = document.getElementById('email').value;
        if (email.includes('doctor')) {
            window.location.href = 'doctor_dashboard.php';
        } else {
            window.location.href = 'patient_dashboard.php';
        }
    }

    function fillDoctor() {
        document.getElementById('email').value = 'doctor@chroniccare.vn';
        document.getElementById('password').value = '123456';
    }

    function fillPatient() {
        document.getElementById('email').value = 'patient@gmail.com';
        document.getElementById('password').value = '123456';
    }
</script>

<?php include 'includes/footer.php'; ?>