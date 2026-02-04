<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | RKU Galore</title>

  <style>
    :root {
      --galore-red: #dc3545;
      --galore-red-dark: #b02a37;
      --galore-gray: #6c757d;
      --galore-white: #ffffff;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Roboto, sans-serif;
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


    /* ===== CONTACT CARD ===== */
    .galore-wrapper {
      display: flex;
      justify-content: center;
      padding: 60px 20px;
    }

    .galore-card {
      background: #fff;
      width: 100%;
      max-width: 900px;
      padding: 45px;
      border-radius: 18px;
      border-top: 6px solid var(--galore-red);
      box-shadow: 0 20px 45px rgba(220,53,69,0.18);
      animation: fadeSlide 0.8s ease forwards;
    }

    @keyframes fadeSlide {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .galore-title {
      text-align: center;
      color: var(--galore-red);
      font-size: 2.2rem;
      margin-bottom: 8px;
    }

    .galore-subtitle {
      text-align: center;
      font-size: 0.9rem;
      color: var(--galore-gray);
      margin-bottom: 35px;
    }

    form {
      display: grid;
      grid-template-columns: 1fr;
      gap: 18px;
    }

    @media (min-width: 768px) {
      form { grid-template-columns: 1fr 1fr; }
      .full-width { grid-column: span 2; }
    }

    .galore-input-group {
      display: flex;
      flex-direction: column;
    }

    .galore-label {
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--galore-gray);
      margin-bottom: 6px;
      text-transform: uppercase;
    }

    .galore-input {
      padding: 14px 16px;
      border: 2px solid #ddd;
      border-radius: 10px;
      font-size: 0.95rem;
      transition: 0.3s;
    }

    .galore-input:focus {
      outline: none;
      border-color: var(--galore-red);
      box-shadow: 0 0 0 4px rgba(220,53,69,0.15);
    }

    textarea.galore-input { resize: none; }

    .galore-btn {
      background: linear-gradient(135deg, #ff4d5a, var(--galore-red));
      color: #fff;
      padding: 15px;
      border: none;
      border-radius: 12px;
      font-size: 1.05rem;
      font-weight: bold;
      cursor: pointer;
      margin-top: 10px;
    }

    .galore-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(220,53,69,0.45);
    }

    .galore-footer {
      text-align: center;
      margin-top: 25px;
      font-size: 0.85rem;
      color: var(--galore-red);
      font-weight: 600;
      padding-top: 18px;
      border-top: 1px solid rgba(220,53,69,0.25);
    }
    .error {
  color: #dc3545;
  font-size: 0.75rem;
  margin-top: 4px;
  display: none;
}

.error-border {
  border-color: #dc3545 !important;
}

  </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- HERO -->
<section class="hero">
  <h1>Contact Galore Team</h1>
  <p>We’re here to help you with events & registration</p>
</section>

<!-- CONTACT FORM -->
<div class="galore-wrapper">
  <div class="galore-card">

    <h2 class="galore-title">📩 Get in Touch</h2>
    <p class="galore-subtitle">
      Have any questions? Fill out the form below.
    </p>

<form action="contact_process.php" method="POST">

  <div class="galore-input-group">
    <label class="galore-label">Full Name</label>
    <input type="text" name="name" class="galore-input"
           placeholder="Enter your full name">
           <small class="error"></small>
  </div>

  <div class="galore-input-group">
    <label class="galore-label">Email Address</label>
    <input type="email" name="email" class="galore-input"
           placeholder="yourname@email.com">
           <small class="error"></small>
  </div>

  <div class="galore-input-group">
    <label class="galore-label">Phone Number</label>
    <input type="text" name="phone" class="galore-input"
           placeholder="Enter your phone number">
           <small class="error"></small>
  </div>

  <div class="galore-input-group">
    <label class="galore-label">Subject</label>
    <input type="text" name="subject" class="galore-input"
           placeholder="Enter subject" >
           <small class="error"></small>
  </div>

  <div class="galore-input-group full-width">
    <label class="galore-label">Message</label>
    <textarea name="message" rows="5" class="galore-input"
              placeholder="Write your message here..." ></textarea>
              <small class="error"></small>
  </div>

  <button type="submit" class="galore-btn full-width">
    Send Message
  </button>

</form>

    <div class="galore-footer">
      Galore Team will respond within 24 hours.
    </div>

  </div>
</div>

<script>
$(document).ready(function () {

  function showError(input, message) {
    $(input).addClass("error-border");
    $(input).next(".error").text(message).show();
  }

  function clearError(input) {
    $(input).removeClass("error-border");
    $(input).next(".error").text("").hide();
  }

  $("form").on("submit", function (e) {
    e.preventDefault();
    let valid = true;

    const name = $('[name="name"]');
    const email = $('[name="email"]');
    const phone = $('[name="phone"]');
    const subject = $('[name="subject"]');
    const message = $('[name="message"]');

    // Name
    if (!/^[a-zA-Z\s]{3,}$/.test($.trim(name.val()))) {
      showError(name, "Enter a valid full name");
      valid = false;
    } else clearError(name);

    // Email
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.val())) {
      showError(email, "Enter a valid email address");
      valid = false;
    } else clearError(email);

    // Phone
    if (!/^[0-9]{10}$/.test(phone.val())) {
      showError(phone, "Enter a valid 10-digit phone number");
      valid = false;
    } else clearError(phone);

    // Subject
    if ($.trim(subject.val()) === "") {
      showError(subject, "Subject is required");
      valid = false;
    } else clearError(subject);

    // Message
    if ($.trim(message.val()).length < 10) {
      showError(message, "Message must be at least 10 characters");
      valid = false;
    } else clearError(message);

    if (valid) {
      this.submit(); // submit to contact_process.php
    }
  });

});
</script>


<?php include 'footer.php'; ?>

</body>
</html>
