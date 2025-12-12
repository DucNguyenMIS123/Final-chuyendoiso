<?php include 'includes/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-5 shadow-lg" style="width: 450px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-purple mb-1">Create Account</h2>
            <p class="text-muted">Join ChronicCare VN today</p>
        </div>

        <form>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Nguyen Van A">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Create a password">
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select class="form-select" disabled>
                    <option <?php echo ($_GET['role'] ?? '') == 'doctor' ? 'selected' : ''; ?>>Doctor</option>
                    <option <?php echo ($_GET['role'] ?? '') == 'patient' ? 'selected' : ''; ?>>Patient</option>
                    <option <?php echo !isset($_GET['role']) ? 'selected' : ''; ?>>Select Role</option>
                </select>
                <small class="text-muted">Role pre-selected from landing page.</small>
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="button" class="btn btn-success py-2"
                    onclick="alert('Registration feature coming soon!')">Sign Up</button>
            </div>

            <div class="text-center">
                <a href="login.php" class="text-decoration-none">Already have an account? Login</a>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>