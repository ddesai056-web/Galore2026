<!DOCTYPE html>
<html lang="en">

<head>
  <title>Galore Header Layout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

    @media (max-width: 768px) {

      .about-grid,
      .about-grid.reverse {
        flex-direction: column;
        text-align: center;
      }
    }

    /* ===== HEADER LOGOS ===== */
    .header-box {
      background: #ffffff;
      border-radius: 0 0 20px 20px;
      padding: 8px 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .logo-col {
      padding: 0;
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

    /* ===== MENU LINKS ===== */
    .main-menu .nav-item {
      margin: 0 14px;
    }

    .main-menu .nav-link {
      font-size: 17px;
      font-weight: 600;
      color: #000;
      position: relative;
      transition: color 0.3s ease;
    }

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

    /* ===== DROPDOWN ===== */
    .dropdown-menu {
      border-radius: 0 !important;
      border-radius: 12px;
      border: none;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
      margin-top: 8px;
      animation: dropdownFade 0.3s ease;
    }

    .dropdown-item {
      padding: 10px 18px;
      font-weight: 500;
    }

    .dropdown-item:hover {
      background: #dc3545;
      color: #fff;
    }

    /* REMOVE DROPDOWN ARROW */
    .dropdown-toggle::after {
      display: none !important;
    }

    .navbar .nav-link .bi {
      color: red;
      margin-left: 4px;
      font-size: 0.8em;
      vertical-align: middle;
    }

    /* Dropdown item hover and active/focus state */
    .dropdown-item:hover,
    .dropdown-item:focus,
    .dropdown-item:active {
      background-color: #dc3545 !important;
      /* red background */
      color: #fff !important;
      /* white text */
    }

    .dropdown-item {
      transition: background-color 0.3s ease, color 0.3s ease;
    }


    /* HOVER DROPDOWN DESKTOP */
    @media (min-width: 992px) {
      .navbar .dropdown:hover>.dropdown-menu {
        display: block;
      }
    }

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

    /* RIGHT SIDE */
    .navbar-actions {
      margin-left: auto;
      gap: 15px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 991px) {
      .navbar-actions {
        flex-direction: column;
        margin-top: 15px;
        gap: 10px;
      }

      .search-form input {
        width: 100%;
      }

      .main-menu {
        text-align: center;
      }
    }

    /* ===== FIX DROPDOWN RESPONSIVENESS ===== */

    /* Mobile: allow Bootstrap click dropdown */
    @media (max-width: 991px) {
      .navbar .dropdown-menu {
        display: none;
        position: static;
        box-shadow: none;
        animation: none;
      }

      .navbar .dropdown.show .dropdown-menu {
        display: block;
      }
    }
  </style>
</head>

<body>

  <!-- ===== HEADER LOGOS ===== -->
  <div class="container-fluid header-box">
    <div class="row text-center align-items-center gx-1">
      <div class="col-6 col-md-3 logo-col">
        <img src="Website/galore_half1.jpg" class="img-fluid header-logo">
      </div>
      <div class="col-6 col-md-3 logo-col">
        <img src="Website/rku_logo.png" class="img-fluid header-logo">
      </div>
      <div class="col-6 col-md-3 logo-col">
        <img src="Website/galore_logo.png" class="img-fluid header-logo">
      </div>
      <div class="col-6 col-md-3 logo-col">
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
        <ul class="navbar-nav align-items-center main-menu mx-auto">
          <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Events <i class="bi bi-caret-down-fill"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sports-outdoor.php">Sports-Outdoor</a></li>
              <li><a class="dropdown-item" href="sports-indoor.php">Sports-Indoor</a></li>
              <li><a class="dropdown-item" href="cultural.php">Cultural</a></li>
            </ul>
          </li>


          <li class="nav-item"><a class="nav-link" href="registration.php">Registration</a></li>
          <li class="nav-item"><a class="nav-link" href="schedual.php">Schedule</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>

          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              More <i class="bi bi-caret-down-fill"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="co-cordinator.php">Cordinators</a></li>
              <li><a class="dropdown-item" href="committee.php">Committee</a></li>
              <li><a class="dropdown-item" href="rules.php">Rules</a></li>
            </ul>
          </li>


        </ul>

        <!-- RIGHT SIDE -->
        <div class="d-flex align-items-center navbar-actions">
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  $con = mysqli_connect("localhost", "root", "");
  mysqli_select_db($con, "galore2026");


  // $sql = "ALTER TABLE registration
  //         ADD gender ENUM('Male','Female','Other') NOT NULL,
  //         ADD school VARCHAR(50) NOT NULL,
  //         ADD email VARCHAR(100) NOT NULL UNIQUE,
  //         ADD profile_pic VARCHAR(255)";

  // if(mysqli_query($con, $sql)){
  //     echo "Columns added successfully";
  // } else {
  //     echo "Error: " . mysqli_error($con);
  // }


  // $registration_table = "CREATE TABLE registration (
  //   id INT(11) AUTO_INCREMENT PRIMARY KEY,
  //   full_name VARCHAR(100) NOT NULL,
  //   enrollment_no VARCHAR(20) NOT NULL UNIQUE,
  //   password VARCHAR(255) NOT NULL,
  //   branch VARCHAR(50) NOT NULL,
  //   semester INT(2) NOT NULL
  // );";


  // if (mysqli_query($con, $registration_table)) {
  //    echo "Table Created";
  // } else {
  //    echo "Table not created: " . mysqli_error($con);
  // }


  //   $create_db = "Create database galore2026";
  //  if( mysqli_query($con, $create_db)){
  //   echo "Database Created";
  //  }
  //  else {
  //   echo "Database not created";
  //  }
  ?>
</body>

</html>