<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galore Header Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery (optional, not required by Bootstrap 5 but kept safe) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
body {
    background-color: #f8f9fa;
    font-family: "Segoe UI", Arial, sans-serif;
}

    /* ===== BUTTON ===== */
    .download-btn {
      display: inline-block;
      padding: 12px 32px;
      background: linear-gradient(135deg, #ff4d5a, var(--galore-red));
      color: #fff;
      text-decoration: none;
      border: 3px #dc3545;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .download-btn:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(220, 53, 69, 0.45);
    }

/* ===== HEADER LOGOS ===== */
.header-box {
    background: #ffffff;
    border-radius: 0 0 20px 20px;
    padding: 8px 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.header-logo {
    max-height: 80px;
}

/* ===== NAVBAR ===== */
.navbar {
    background: #ffffff;
    border-top: 3px solid #dc3545;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
}

/* ===== MAIN MENU ===== */
.main-menu {
    justify-content: center;
    width: 100%;
}

.main-menu .nav-item {
    margin: 0 14px;
    white-space: nowrap;
}

.main-menu .nav-link {
    font-size: 14px;
    font-weight: 600;
    color: #000;
    position: relative;
    transition: color 0.3s ease;
}

/* underline hover effect */
.main-menu .nav-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: #dc3545;
    left: 0;
    bottom: -5px;
    transition: width 0.3s ease;
}

.main-menu .nav-link:hover {
    color: #dc3545;
}

.main-menu .nav-link:hover::after {
    width: 100%;
}

/* ===== DROPDOWN MENU ===== */
.dropdown-menu {
    border-radius: 12px;
    border: none;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    margin-top: 8px;
    animation: dropdownFade 0.25s ease;
    transform-origin: top;
}

.dropdown-item {
    padding: 10px 18px;
    font-weight: 500;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: #dc3545;
    color: #fff;
}

/* remove default bootstrap arrow */
.dropdown-toggle::after {
    display: none !important;
}

/* caret icon */
.navbar .nav-link .bi {
    color: red;
    margin-left: -2px;
    font-size: 0.8em;
}

/* ===== DESKTOP HOVER DROPDOWN ===== */
@media (min-width: 992px) {

    .navbar .dropdown:hover > .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    .navbar .dropdown-toggle {
        pointer-events: none; /* avoid click conflict */
    }
}

/* ===== MOBILE DROPDOWN FIX ===== */
@media (max-width: 991px) {

    .navbar-actions {
        flex-direction: column;
        margin-top: 15px;
        gap: 12px;
    }

    .search-form input {
        width: 100%;
    }

    .main-menu {
        text-align: center;
    }

    .navbar .dropdown-menu {
        position: static;
        float: none;
        box-shadow: none;
        margin-top: 0;
    }

    .navbar .dropdown-toggle {
        pointer-events: auto;
    }
}

/* ===== PROFILE ICON ===== */
.profile-icon {
    font-size: 28px;
    color: #dc3545;
    transition: 0.3s ease;
}

.profile-icon:hover {
    color: darkred;
    transform: scale(1.1);
}

/* ===== SEARCH ===== */
.search-form input {
    width: 180px;
    border-radius: 20px;
    border: 1px solid #ccc;
    padding: 6px 12px;
}

.search-form input:focus {
    border-color: #dc3545;
    box-shadow: 0 0 6px #dc3545;
}

.search-form button {
    border-radius: 20px;
    padding: 6px 18px;
}

/* ===== RIGHT SIDE ===== */
.navbar-actions {
    margin-left: auto;
    gap: 15px;
}

/* ===== DROPDOWN ANIMATION ===== */
@keyframes dropdownFade {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>

<body>

    <!-- ===== HEADER LOGOS ===== -->
    <div class="container-fluid header-box">
        <div class="row text-center align-items-center gx-1">
            <div class="col-6 col-md-3">
                <img src="Website/galore_half1.jpg" class="img-fluid header-logo">
            </div>
            <div class="col-6 col-md-3">
                <img src="Website/rku_logo.png" class="img-fluid header-logo">
            </div>
            <div class="col-6 col-md-3">
                <img src="Website/galore_logo.png" class="img-fluid header-logo">
            </div>
            <div class="col-6 col-md-3">
                <img src="Website/galore_half2.png" class="img-fluid header-logo">
            </div>
        </div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container-fluid">

            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">

                <!-- CENTER MENU -->
                <ul class="navbar-nav align-items-center main-menu">

                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="co_dashboard.php">Dashboard</a>
                    </li>

                    <!-- Schools -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Schools <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Engineering</a></li>
                            <li><a class="dropdown-item" href="#">Management</a></li>
                            <li><a class="dropdown-item" href="#">Pharmacy</a></li>
                            <li><a class="dropdown-item" href="#">Science</a></li>
                            <li><a class="dropdown-item" href="#">Physiotherapy</a></li>
                            <li><a class="dropdown-item" href="#">Ayurvedic</a></li>
                        </ul>
                    </li>

                    <!-- University Events -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            University Events <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">All Events</a></li>
                            <li><a class="dropdown-item" href="#">Add University Event</a></li>
                            <li><a class="dropdown-item" href="#">Inter-School Events</a></li>
                        </ul>
                    </li>

                    <!-- Approvals -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Approvals <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Event Requests</a></li>
                            <li><a class="dropdown-item" href="#">Schedule Approval</a></li>
                            <li><a class="dropdown-item" href="#">Result Approval</a></li>
                        </ul>
                    </li>

                    <!-- Registrations -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Registrations <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">All Registrations</a></li>
                            <li><a class="dropdown-item" href="#">School-wise</a></li>
                            <li><a class="dropdown-item" href="#">Event-wise</a></li>
                        </ul>
                    </li>

                    <!-- Results & Rankings -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Results & Rankings <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">All Results</a></li>
                            <li><a class="dropdown-item" href="#">School Rankings</a></li>
                            <li><a class="dropdown-item" href="#">University Winners</a></li>
                        </ul>
                    </li>

                    <!-- Reports -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Reports <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Participation Report</a></li>
                            <li><a class="dropdown-item" href="#">Event Performance</a></li>
                            <li><a class="dropdown-item" href="#">School Performance</a></li>
                        </ul>
                    </li>

                    <!-- Announcements -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Announcements <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">University Announcement</a></li>
                            <li><a class="dropdown-item" href="#">School-Specific Announcement</a></li>
                        </ul>
                    </li>

                    <!-- More -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            More <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="home.php">Student View</a></li>
                            <li><a class="dropdown-item" href="c_dashboard.php">Coordinator View</a></li>
                            <li><a class="dropdown-item" href="co_dashboard.php">Co-Coordinator View</a></li>
                        </ul>
                    </li>

                </ul>


                <!-- RIGHT SIDE -->
                <div class="d-flex align-items-center navbar-actions ms-auto">
                    <a href="profile.php" class="profile-icon">
                        <i class="bi bi-person-circle"></i>
                    </a>

                    <form class="d-flex search-form">
                        <input class="form-control me-2" type="search" placeholder="Search">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </form>
                </div>

            </div>
        </div>
    </nav>

</body>

</html>