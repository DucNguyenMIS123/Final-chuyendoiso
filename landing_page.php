<?php include 'includes/header.php'; ?>

<!-- Navbar (Landing Page Specific) -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-purple fs-3" href="#">
            <i class="fa-solid fa-heart-pulse me-2"></i>ChronicCare VN
        </a>
        <div class="d-flex gap-2">
            <a href="login.php" class="btn btn-outline-purple fw-bold px-4">Login</a>
            <a href="register.php?role=patient" class="btn btn-purple fw-bold px-4">Get Started</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center bg-light" style="padding-top: 100px; min-height: 90vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="badge bg-purple bg-opacity-10 text-purple mb-3 px-3 py-2 rounded-pill fw-bold">
                    <i class="fa-solid fa-star me-2"></i> #1 Telehealth Platform in Vietnam
                </span>
                <h1 class="display-3 fw-bold mb-4" style="line-height: 1.2;">
                    Remote Chronic Disease <span class="text-purple">Management</span>
                </h1>
                <p class="lead text-muted mb-5">
                    Track your health. Receive AI-powered real-time alerts. Connect with top doctors anytime, anywhere.
                </p>
                <div class="d-flex gap-3">
                    <a href="register.php?role=patient"
                        class="btn btn-purple btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg hover-scale">
                        Get Started <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                    <a href="login.php" class="btn btn-outline-dark btn-lg px-5 py-3 fw-bold rounded-pill hover-scale">
                        Login
                    </a>
                </div>
                <div class="mt-5 d-flex gap-4 text-muted">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-check-circle text-success me-2"></i> Free for Patients
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-check-circle text-success me-2"></i> 24/7 Support
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-shield-halved text-success me-2"></i> Secure Data
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Decorative Mockup Circles -->
                    <div class="bg-purple position-absolute top-50 start-50 translate-middle rounded-circle opacity-10"
                        style="width: 500px; height: 500px; z-index: 0;"></div>
                    <img src="assets/img/9.png" class="img-fluid rounded-4 shadow-lg position-relative"
                        style="z-index: 1; max-width: 80%; transform: rotate(-2deg);" alt="Doctor Consultation">

                    <!-- Floating Cards -->
                    <div class="card p-3 shadow-lg border-0 position-absolute top-0 end-0 translate-middle-y me-4 animate-float"
                        style="z-index: 2; width: 200px;">
                        <div class="d-flex align-items-center">
                            <div class="bg-danger text-white rounded-circle p-2 me-3"><i
                                    class="fa-solid fa-heart-pulse"></i></div>
                            <div>
                                <small class="text-muted d-block">Heart Rate</small>
                                <strong>72 bpm</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3 shadow-lg border-0 position-absolute bottom-0 start-0 translate-middle-x ms-5 mb-5 animate-float-delay"
                        style="z-index: 2; width: 220px;">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-user-doctor text-purple fa-2x me-3"></i>
                            <div>
                                <small class="text-secondary fw-bold d-block">Dr. Nguyen</small>
                                <small class="text-muted">Is calling you...</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Value Proposition -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-purple fw-bold text-uppercase">Why Choose Us</h5>
            <h2 class="fw-bold display-6">Comprehensive Care Features</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 hover-move-up transition-all">
                    <div class="bg-purple bg-opacity-10 text-purple rounded-3 p-3 d-inline-block mb-3">
                        <i class="fa-solid fa-chart-line fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Smart Monitoring</h5>
                    <p class="text-muted">Track BP, Heart Rate, SpO2, and Glucose easily. Visualize trends over time.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 hover-move-up transition-all">
                    <div class="bg-danger bg-opacity-10 text-danger rounded-3 p-3 d-inline-block mb-3">
                        <i class="fa-solid fa-triangle-exclamation fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">AI Risk Alerts</h5>
                    <p class="text-muted">Instant notifications for critical vitals. Early detection saves lives.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 hover-move-up transition-all">
                    <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 d-inline-block mb-3">
                        <i class="fa-solid fa-book-medical fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Health Guidebook</h5>
                    <p class="text-muted">Access our extensive library of self-care guides and medical advice.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm p-4 hover-move-up transition-all">
                    <div class="bg-success bg-opacity-10 text-success rounded-3 p-3 d-inline-block mb-3">
                        <i class="fa-solid fa-video fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Teleconsultation</h5>
                    <p class="text-muted">Connect with specialists via secure HD video calls instantly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Split Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="row g-0 overflow-hidden shadow-lg rounded-4 bg-white">
            <div class="col-md-6 p-5 border-end border-light">
                <div class="p-3">
                    <span class="badge bg-primary mb-3">FOR PATIENTS</span>
                    <h2 class="fw-bold mb-3">Take Control of Your Health</h2>
                    <ul class="list-unstyled mb-4 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Personal Health Dashboard
                        </li>
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Medication Reminders</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Easy Access to Doctors</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-primary me-2"></i> Family Health Profile</li>
                    </ul>
                    <a href="register.php?role=patient" class="btn btn-primary px-4 py-2 fw-bold">I am a Patient</a>
                </div>
            </div>
            <div class="col-md-6 p-5 bg-purple text-white">
                <div class="p-3">
                    <span class="badge bg-white text-purple mb-3">FOR DOCTORS</span>
                    <h2 class="fw-bold mb-3">Streamline Your Practice</h2>
                    <ul class="list-unstyled mb-4 text-white-50">
                        <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> AI-Driven Patient
                            Prioritization</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Efficient EHR Management</li>
                        <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Secure Telehealth Platform
                        </li>
                        <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Automated Reporting</li>
                    </ul>
                    <a href="register.php?role=doctor" class="btn btn-light text-purple px-4 py-2 fw-bold">I am a
                        Doctor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Section -->
<section class="py-5 bg-white">
    <div class="container py-5 text-center">
        <h5 class="text-purple fw-bold text-uppercase mb-2">Experience the Platform</h5>
        <h2 class="fw-bold mb-5">Designed for Simplicity</h2>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-2 bg-light">
                            <div class="bg-white rounded p-4 mb-2"
                                style="height: 150px; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-user-doctor text-purple fa-4x"></i>
                            </div>
                            <h6 class="fw-bold">Doctor Dashboard</h6>
                            <p class="small text-muted">Risk stratification & queue</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-2 bg-light">
                            <div class="bg-white rounded p-4 mb-2"
                                style="height: 150px; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-hospital-user text-success fa-4x"></i>
                            </div>
                            <h6 class="fw-bold">Patient App</h6>
                            <p class="small text-muted">Vitals tracking & alerts</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-2 bg-light">
                            <div class="bg-white rounded p-4 mb-2"
                                style="height: 150px; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-book-open-reader text-warning fa-4x"></i>
                            </div>
                            <h6 class="fw-bold">Health Guide</h6>
                            <p class="small text-muted">Education & self-care</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h4 class="fw-bold mb-3"><i class="fa-solid fa-heart-pulse me-2"></i>ChronicCare VN</h4>
                <p class="text-secondary small">Advancing chronic care management through technology and compassion.
                    Connecting patients and providers seamlessly.</p>
            </div>
            <div class="col-md-2 mb-4">
                <h6 class="fw-bold mb-3">Platform</h6>
                <ul class="list-unstyled small text-secondary">
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">For Patients</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">For Doctors</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Features</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h6 class="fw-bold mb-3">Company</h6>
                <ul class="list-unstyled small text-secondary">
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Careers</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold mb-3">Newsletter</h6>
                <div class="input-group mb-3">
                    <input type="text" class="form-control bg-secondary border-0 text-white" placeholder="Enter email"
                        aria-label="Email">
                    <button class="btn btn-purple" type="button">Subscribe</button>
                </div>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="d-flex justify-content-between align-items-center flex-wrap small text-secondary">
            <div>&copy; 2025 ChronicCare VN. All rights reserved.</div>
            <div class="d-flex gap-3">
                <a href="#" class="text-secondary text-decoration-none">Privacy Policy</a>
                <a href="#" class="text-secondary text-decoration-none">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-scale:hover {
        transform: scale(1.05);
    }

    .hover-move-up:hover {
        transform: translateY(-10px);
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-float-delay {
        animation: float 3s ease-in-out 1.5s infinite;
    }

    @keyframes float {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, -15px);
        }

        100% {
            transform: translate(0, 0);
        }
    }
</style>

<!-- Note: Footer included above manually to control layout, but keeping generic scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>