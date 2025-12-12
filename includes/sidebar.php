<div class="col-md-2 sidebar p-3 d-none d-md-block border-end bg-white">
    <div class="d-flex align-items-center mb-4 ps-2">
        <h4 class="text-purple fw-bold mb-0">ChronicCare VN</h4>
    </div>

    <ul class="nav flex-column gap-2">
        <li class="nav-item"><a href="doctor_dashboard.php"
                class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'doctor_dashboard.php' ? 'active' : ''; ?>"><i
                    class="fa-solid fa-chart-line me-2"></i> Dashboard</a></li>
        <li class="nav-item"><a href="patients_list.php"
                class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'patients_list.php' ? 'active' : ''; ?>"><i
                    class="fa-solid fa-user-group me-2"></i> Patients</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-calendar-check me-2"></i> Schedule</a>
        </li>
        <li class="nav-item"><a href="consultation.php?role=doctor"
                class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'consultation.php' ? 'active' : ''; ?>"><i
                    class="fa-solid fa-video me-2"></i> Consultations</a></li>
    </ul>

    <div class="mt-auto pt-5 border-top">
        <a href="index.php" class="nav-link text-danger"><i class="fa-solid fa-right-from-bracket me-2"></i> Logout</a>
    </div>
</div>