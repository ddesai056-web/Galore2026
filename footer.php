<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galore Header Layout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Footer Styling */
    .footer-section {
      background-color: #1a1a1a;
      color: #f8f9fa;
      font-family: "Segoe UI", Arial, sans-serif;
    }

    .footer-title {
      font-weight: 600;
      font-size: 18px;
      color: #dc3545; /* Red accent matching navbar */
      margin-bottom: 15px;
      position: relative;
    }

    .footer-title::after {
      content: '';
      display: block;
      width: 50px;
      height: 3px;
      background: #dc3545;
      margin-top: 5px;
      margin-bottom: 10px;
    }

    .footer-link {
      color: #f8f9fa;
      text-decoration: none;
      display: block;
      margin-bottom: 8px;
      transition: color 0.3s ease;
    }

    .footer-link:hover {
      color: #dc3545;
    }

    .footer-social .social-link {
      color: #f8f9fa;
      text-decoration: none;
      font-weight: 500;
      margin-right: 10px;
      transition: color 0.3s ease;
    }

    .footer-social .social-link:hover {
      color: #dc3545;
    }

    .footer-divider {
      border-top: 1px solid #444;
      margin: 20px 0;
    }

    @media (max-width: 767px) {
      .footer-social {
        text-align: center;
      }
    }


  </style>
</head>

<body>
  
<footer class="footer-section bg-dark text-light pt-5">
  <div class="container">

    <div class="row">

      <!-- About Galore -->
      <div class="col-md-4 mb-4">
        <h5 class="footer-title">About Galore</h5>
        <p>
          Galore is the most awaited Sports and Cultural Festival of RK University,
          bringing students together for competitions, performances, and celebrations of talent.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="about.php" class="footer-link">About Galore</a></li>
          <li><a href="registration.php" class="footer-link">Registration</a></li>
          <li><a href="login.php" class="footer-link">Login</a></li>
          <li><a href="co-cordinator.php" class="footer-link">Co-ordinators</a></li>
          <li><a href="#" class="footer-link">Gallery</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 class="footer-title">Contact Us</h5>
        <p>Email: info@rkgalore.com</p>
        <p>Phone: +91 98765 43210</p>
        <p>Address: RK University, Rajkot, Gujarat, India</p>

        <div class="footer-social mt-2">
          <a href="#" class="social-link">Facebook</a> |
          <a href="#" class="social-link">Instagram</a> |
          <a href="#" class="social-link">Twitter</a>
        </div>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="text-center pb-3">
      &copy; 2026 Galore Festival. All Rights Reserved.
    </div>

  </div>
</body>
</html>
