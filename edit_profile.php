<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile | RKU Galore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-red-dark: #b02a37;
            --galore-gray: #6c757d;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #fff5f5 40%, #f8f9fa 100%);
            margin: 0;
        }

        /* ===== HERO (Animated) ===== */
        .hero {
            position: relative;
            background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
            color: #fff;
            text-align: center;
            padding: 160px 20px 100px;
            overflow: hidden;
        }

        .hero h1, .hero p { position: relative; z-index: 2; }
        .hero h1 { font-size: 3rem; font-weight: 700; margin-bottom: 12px; letter-spacing: 1px; }
        .hero p { font-size: 1.2rem; color: rgba(255, 255, 255, 0.85); }

        .hero::before, .hero::after {
            content: ''; position: absolute; border-radius: 50%;
            background: rgba(255, 255, 255, 0.1); z-index: 1;
            animation: float 6s ease-in-out infinite;
        }
        .hero::before { width: 200px; height: 200px; top: -50px; left: -50px; }
        .hero::after { width: 300px; height: 300px; bottom: -100px; right: -100px; }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(45deg); }
        }

        /* ===== PROFILE CARD ===== */
        .profile-card {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: -60px auto 60px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 25px 50px rgba(220, 53, 69, 0.2);
            padding: 45px;
            border-top: 6px solid var(--galore-red);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-bottom: 35px;
        }

        .profile-header img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--galore-red);
        }

        /* ===== FORM STYLING (Integrated into Info Grid) ===== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-box {
            background: #fff5f5;
            border-left: 5px solid var(--galore-red);
            padding: 12px 20px;
            border-radius: 12px;
        }

        .info-box label {
            color: var(--galore-gray);
            font-weight: 600;
            font-size: 0.85rem;
            display: block;
            margin-bottom: 4px;
        }

        .form-control-galore {
            width: 100%;
            border: none;
            background: transparent;
            font-weight: 600;
            color: #333;
            font-size: 1.05rem;
            padding: 0;
        }

        .form-control-galore:focus {
            outline: none;
            color: var(--galore-red);
        }

        /* ===== BUTTONS ===== */
        .profile-actions {
            text-align: center;
            margin-top: 40px;
        }

        .galore-btn {
            padding: 14px 36px;
            background: linear-gradient(135deg, #ff4d5a, var(--galore-red));
            color: #fff;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            margin: 0 12px;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .galore-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(220, 53, 69, 0.45);
        }

        .btn-secondary-galore {
            background: var(--galore-gray);
        }

        @media (max-width: 768px) {
            .profile-header { flex-direction: column; text-align: center; }
            .info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<section class="hero">
    <h1>Edit Profile</h1>
    <p>Update your information for RKU Galore</p>
</section>

<div class="profile-card" data-aos="fade-up">
    <form action="update_logic.php" method="POST" enctype="multipart/form-data">
        
        <div class="profile-header">
            <div class="position-relative">
                <img src="website/me.jpg" alt="Student Photo" id="preview">
                <input type="file" name="profile_pic" class="form-control form-control-sm mt-2" accept="image/*">
            </div>
            <div>
                <h3 class="mb-1">Desai Dhara Dineshbhai</h3>
                <p class="mb-0 text-muted">Enrollment No: 25SOECE13006</p>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-box">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control-galore" value="Dipali Parabiya">
            </div>

            <div class="info-box">
                <label>Semester</label>
                <select name="semester" class="form-control-galore">
                    <option value="5">5</option>
                    <option value="6" selected>6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <div class="info-box">
                <label>School</label>
                <input type="text" name="school" class="form-control-galore" value="School of Engineering">
            </div>

            <div class="info-box">
                <label>RKU Email</label>
                <input type="email" name="email" class="form-control-galore" value="dipali@rku.ac.in">
            </div>

            <div class="info-box">
                <label>Gender</label>
                <select name="gender" class="form-control-galore">
                    <option value="Male">Male</option>
                    <option value="Female" selected>Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="info-box">
                <label>Branch</label>
                <input type="text" name="branch" class="form-control-galore" value="Computer Engineering">
            </div>
        </div>

        <div class="profile-actions">
            <button type="submit" class="galore-btn">Save Changes</button>
            <a href="profile.php" class="galore-btn btn-secondary-galore">Cancel</a>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1200, once: true });
</script>

</body>
</html>