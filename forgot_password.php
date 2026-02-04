<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password | RKU Galore</title>

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
      background: linear-gradient(135deg, #ffffff 0%, #fff5f5 40%, #f8f9fa 100%);
      margin: 0;
      min-height: 100vh;
    }

    /* ===== HERO (SAME AS OTHER PAGES) ===== */
    .hero {
      position: relative;
      background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
      color: #fff;
      text-align: center;
      padding: 140px 20px 60px;
      overflow: hidden;
    }

    .hero h1, .hero p { position: relative; z-index: 2; }
    .hero h1 { font-size: 3rem; font-weight: 700; margin-bottom: 12px; letter-spacing: 1px; }
    .hero p { font-size: 1.2rem; color: rgba(255,255,255,0.85); }

    .hero::before, .hero::after {
      content: ''; position: absolute; border-radius: 50%;
      background: rgba(255,255,255,0.1); z-index: 1;
      animation: float 6s ease-in-out infinite;
    }
    .hero::before { width: 200px; height: 200px; top: -50px; left: -50px; }
    .hero::after { width: 300px; height: 300px; bottom: -100px; right: -100px; }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(45deg); }
    }

    /* ===== CARD WRAPPER ===== */
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
      margin-bottom: 15px;
    }

    .recovery-info {
      text-align: center;
      font-size: 0.95rem;
      color: var(--galore-gray);
      margin-bottom: 30px;
      line-height: 1.5;
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
      display: block;
    }

    .galore-login-input {
      width: 100%;
      padding: 13px 15px;
      border: 2px solid #ddd;
      border-radius: 10px;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      box-sizing: border-box;
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
      transition: all 0.3s ease;
    }

    .galore-login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(220,53,69,0.45);
    }

    .galore-login-footer {
      text-align: center;
      margin-top: 25px;
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

<section class="hero">
  <h1>Forgot Password?</h1>
  <p>Don't worry, we'll help you get back to Galore 2026</p>
</section>

<div class="galore-login-wrapper">
  <div class="galore-login-card">

    <h2 class="galore-login-title">🔑 Recover Account</h2>
    
    <p class="recovery-info">
        Enter your registered email address or enrollment number. We will send you instructions to reset your password.
    </p>

    <form action="recovery_process.php" method="POST">

      <div class="galore-input-group">
        <label class="galore-login-label">Enrollment Number / Email</label>
        <input type="text" name="recovery_id"
               class="galore-login-input"
               placeholder="e.g. 21CE045 or email@rku.ac.in">
      </div>

      <button type="submit" class="galore-login-btn">
        Send Reset Link
      </button>

    </form>

    <div class="galore-login-footer">
      Remember your password? 
      <a href="login.php">Back to Login</a>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>