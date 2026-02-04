<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login | RKU Galore</title>

  <style>
    :root {
      --galore-red: #dc3545;
      --galore-red-dark: #b02a37;
      --galore-bg: #f8f9fa;
      --galore-dark: #212529;
      --galore-gray: #6c757d;
      --galore-white: #ffffff;
    }

    body {
      font-family: 'Segoe UI', Roboto, sans-serif;
      margin: 0;
      min-height: 100vh;
    }

/* ===== HERO (SAME AS RULES PAGE) ===== */
.hero {
  background: linear-gradient(135deg, #dc3545, #7a1c25);
  color: #fff;
  text-align: center;
  padding: 160px 20px 100px;
  position: relative;
  overflow: hidden;
}

.hero::after {
  content: "";
  position: absolute;
  bottom: -60px;
  left: 0;
  width: 100%;
  height: 120px;
  background: #fff;
  border-radius: 50% 50% 0 0;
}

.hero h1 {
  font-size: 3.5rem;
  font-weight: 900;
  letter-spacing: 2px;
  margin-bottom: 12px;
}

.hero p {
  font-size: 1.2rem;
  opacity: 0.95;
}


    /* ===== LOGIN CARD ===== */
    .galore-login-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px 80px;
    }

    .galore-login-card {
      background: #ffffff;
      width: 100%;
      max-width: 900px;
      padding: 40px;
      border-radius: 18px;
      border-top: 6px solid var(--galore-red);
      box-shadow: 0 20px 45px rgba(220,53,69,0.18);
      animation: fadeSlide 0.8s ease forwards;
    }

    @keyframes fadeSlide {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .galore-login-title {
      text-align: center;
      color: var(--galore-red);
      font-size: 2rem;
      margin-bottom: 8px;
    }

    .galore-login-deadline {
      text-align: center;
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--galore-red);
      background: rgba(220,53,69,0.1);
      padding: 6px 14px;
      border-radius: 20px;
      display: inline-block;
      margin: 0 auto 25px;
    }

    .galore-rules-box {
      background: #fff5f5;
      border-left: 5px solid var(--galore-red);
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 25px;
    }

    .galore-rules-box p {
      margin: 0;
      font-size: 0.85rem;
      line-height: 1.5;
      color: #b02a37;
    }

    .galore-input-group {
      margin-bottom: 18px;
    }

    .galore-login-label {
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--galore-gray);
      margin-bottom: 6px;
      text-transform: uppercase;
    }

    .galore-login-input {
      width: 100%;
      padding: 13px 15px;
      border: 2px solid #ddd;
      border-radius: 10px;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    .galore-login-input:focus {
      outline: none;
      border-color: var(--galore-red);
      box-shadow: 0 0 0 4px rgba(220,53,69,0.15);
    }

    .galore-login-btn {
      width: 100%;
      background: linear-gradient(135deg, #ff4d5a, var(--galore-red));
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .galore-login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(220,53,69,0.45);
    }

    .galore-login-footer {
      text-align: center;
      margin-top: 22px;
      font-size: 0.85rem;
      color: var(--galore-gray);
    }

    .galore-login-footer a {
      color: var(--galore-red);
      text-decoration: none;
      font-weight: 700;
    }

    .galore-login-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- ===== HERO ===== -->
<section class="hero">
  <h1>Galore 2026 Login</h1>
  <p>Login to register and manage your Galore events</p>
</section>

<!-- ===== LOGIN FORM ===== -->
<div class="galore-login-wrapper">
  <div class="galore-login-card">

    <h2 class="galore-login-title">🔐 Student Login</h2>
    <div class="galore-login-deadline">Last Date: 12 January 2026</div>

    <div class="galore-rules-box">
      <p>
        <strong>Note:</strong> Students can register for a maximum of
        <b>three sports events</b> (2 Outdoor & 1 Indoor) and
        <b>two cultural events</b>.
      </p>
    </div>

<form action="login_process.php" method="POST">

  <div class="galore-input-group">
    <label class="galore-login-label">Enrollment No</label>
    <input type="text" name="enrollment_no"
           class="galore-login-input"
           placeholder="Enter your enrollment number">
  </div>

  <div class="galore-input-group">
    <label class="galore-login-label">Password</label>
    <input type="password" name="password"
           class="galore-login-input"
           placeholder="Enter your password">
  </div>

  <button type="submit" class="galore-login-btn">
    Login to Galore
  </button>

</form>


    <div class="galore-login-footer">
      <a href="forgot_password.php">Forgot Password </a> <br>
      Don’t have an account?
      <a href="registration.php">Register Here</a>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
