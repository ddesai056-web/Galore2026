<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | RKU Galore</title>

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


    /* ===== REGISTRATION CARD ===== */
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
      padding: 45px;
      border-radius: 18px;
      border-top: 6px solid var(--galore-red);
      box-shadow: 0 20px 45px rgba(220, 53, 69, 0.18);
      animation: fadeSlide 0.8s ease forwards;
    }

    @keyframes fadeSlide {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .galore-login-title {
      text-align: center;
      color: var(--galore-red);
      font-size: 2.2rem;
      margin-bottom: 10px;
    }

    .galore-login-deadline {
      text-align: center;
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--galore-red);
      background: rgba(220, 53, 69, 0.1);
      padding: 6px 16px;
      border-radius: 20px;
      display: inline-block;
      margin: 0 auto 35px;
    }

    form {
      display: grid;
      grid-template-columns: 1fr;
      gap: 18px;
    }

    @media (min-width: 768px) {
      form {
        grid-template-columns: 1fr 1fr;
      }

      .galore-login-btn,
      .galore-login-footer {
        grid-column: span 2;
      }
    }

    .galore-input-group {
      display: flex;
      flex-direction: column;
    }

    .galore-login-label {
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--galore-gray);
      margin-bottom: 6px;
      text-transform: uppercase;
    }

    .galore-login-input {
      padding: 13px 15px;
      border: 2px solid #ddd;
      border-radius: 10px;
      font-size: 0.95rem;
      transition: all 0.3s ease;
    }

    .galore-login-input:focus {
      outline: none;
      border-color: var(--galore-red);
      box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.15);
    }

    .galore-email-note {
      font-size: 0.75rem;
      color: var(--galore-gray);
      margin-top: 6px;
      font-style: italic;
    }

    .galore-login-btn {
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

    .galore-login-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(220, 53, 69, 0.45);
    }

    .galore-login-footer {
      text-align: center;
      margin-top: 25px;
      font-size: 0.85rem;
      color: var(--galore-red);
      font-weight: 600;
      padding-top: 18px;
      border-top: 1px solid rgba(220, 53, 69, 0.25);
    }

    .error {
      color: #dc3545;
      font-size: 0.75rem;
      margin-top: 4px;
      display: none;
    }

    .galore-login-input.error-border {
      border-color: #dc3545;
    }
  </style>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <!-- ===== HERO ===== -->
  <!-- ===== HERO ===== -->
  <section class="hero">
    <h1>Galore 2026 Registration</h1>
    <p>Register now to participate in exciting Galore events</p>
  </section>


  <!-- ===== FORM ===== -->
  <div class="galore-login-wrapper">
    <div class="galore-login-card">

      <h2 class="galore-login-title">🎉 Student Registration</h2>
      <div class="galore-login-deadline">Last Date: 12 January 2026</div>

      <form id="registrationForm" action="registration_process.php" method="POST" enctype="multipart/form-data">

        <div class="galore-input-group">
          <label class="galore-login-label">Enrollment No</label>
          <input type="text" name="enrollment_no"
            class="galore-login-input"
            placeholder="Enter your enrollment number">
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">Full Name</label>
          <input type="text" name="name"
            class="galore-login-input"
            placeholder="Enter your full name">
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">Branch</label>
          <input type="text" name="branch"
            class="galore-login-input"
            placeholder="e.g. Computer Engineering">
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">Semester</label>
          <select name="semester" class="galore-login-input">
            <option value="">Select Semester</option>
            <?php for ($i = 1; $i <= 8; $i++) echo "<option value='$i'>Semester $i</option>"; ?>
          </select>
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">Gender</label>
          <select name="gender" class="galore-login-input">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">School</label>
          <input type="text" name="school"
            class="galore-login-input"
            placeholder="e.g. SOE, SOM">
          <small class="error"></small>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">RKU Email</label>
          <input type="email" name="rku_email"
            class="galore-login-input"
            placeholder="yourname@rku.ac.in">
          <small class="error"></small>
          <p class="galore-email-note">All updates will be sent to this email.</p>
        </div>

        <div class="galore-input-group">
          <label class="galore-login-label">Profile Picture</label>
          <input type="file" name="profile_pic" class="galore-login-input" accept="image/*">
          <small class="error"></small>
          <p class="galore-email-note">Upload a clear profile photo (optional).</p>
        </div>


        <button type="submit" class="galore-login-btn">
          Complete Registration
        </button>

      </form>

      <div class="galore-login-footer">
        Registration is mandatory for participation in Galore events.
      </div>

    </div>
  </div>

  <script>
    $(document).ready(function() {

      function showError(input, message) {
        const $error = $(input).next(".error");
        $error.text(message).show();
        $(input).addClass("error-border");
      }

      function clearError(input) {
        const $error = $(input).next(".error");
        $error.text("").hide();
        $(input).removeClass("error-border");
      }

      $("#registrationForm").on("submit", function(e) {
        e.preventDefault();
        let valid = true;

        const enrollment = $('[name="enrollment_no"]');
        const name = $('[name="name"]');
        const branch = $('[name="branch"]');
        const semester = $('[name="semester"]');
        const gender = $('[name="gender"]');
        const school = $('[name="school"]');
        const email = $('[name="rku_email"]');
        const profilePic = $('[name="profile_pic"]')[0];

        // Enrollment
        if ($.trim(enrollment.val()).length < 6) {
          showError(enrollment, "Enrollment number must be at least 6 characters");
          valid = false;
        } else clearError(enrollment);

        // Name
        if (!/^[a-zA-Z\s]+$/.test($.trim(name.val()))) {
          showError(name, "Name should contain only letters");
          valid = false;
        } else clearError(name);

        // Branch
        if ($.trim(branch.val()) === "") {
          showError(branch, "Branch is required");
          valid = false;
        } else clearError(branch);

        // Semester
        if (semester.val() === "") {
          showError(semester, "Please select semester");
          valid = false;
        } else clearError(semester);

        // Gender
        if (gender.val() === "") {
          showError(gender, "Please select gender");
          valid = false;
        } else clearError(gender);

        // School
        if ($.trim(school.val()) === "") {
          showError(school, "School is required");
          valid = false;
        } else clearError(school);

        // Email
        if (!email.val().endsWith("@rku.ac.in")) {
          showError(email, "Use your official RKU email");
          valid = false;
        } else clearError(email);

        // Profile Picture (optional)
        if (profilePic.files.length > 0) {
          const file = profilePic.files[0];
          const allowed = ["image/jpeg", "image/png", "image/jpg"];

          if (!allowed.includes(file.type)) {
            showError(profilePic, "Only JPG or PNG allowed");
            valid = false;
          } else clearError(profilePic);
        }

        if (valid) {
          this.submit(); // submit form if everything is valid
        }
      });

    });
  </script>

  <?php include 'footer.php'; ?>

</body>

</html>