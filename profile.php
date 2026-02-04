<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Profile | RKU Galore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-red-dark: #b02a37;
            --galore-gray: #6c757d;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
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

        /* ===== PROFILE CARD ===== */
        .profile-card {
            max-width: 950px;
            margin: -70px auto 60px;
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 30px 60px rgba(220, 53, 69, 0.25);
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

        .profile-header h3 {
            margin: 0;
            color: var(--galore-red);
            font-weight: 700;
        }

        .profile-header p {
            margin: 2px 0;
            color: var(--galore-gray);
        }

        /* ===== INFO GRID ===== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-box {
            background: #fff5f5;
            border-left: 5px solid var(--galore-red);
            padding: 18px 20px;
            border-radius: 12px;
        }

        .info-box small {
            color: var(--galore-gray);
            font-weight: 600;
        }

        .info-box p {
            margin: 6px 0 0;
            font-weight: 600;
        }

        /* ===== PARTICIPATION ===== */
        .participation-section {
            margin-top: 50px;
            padding-top: 40px;
            border-top: 2px dashed #f1b3b8;
        }

        .participation-section h4 {
            text-align: center;
            font-weight: 800;
            color: var(--galore-red);
        }

        .subtitle {
            text-align: center;
            color: var(--galore-gray);
            margin-bottom: 30px;
        }

        .participation-box {
            background: linear-gradient(135deg, #fff1f1, #ffffff);
            padding: 22px 25px;
            border-radius: 14px;
            border-left: 5px solid var(--galore-red);
            margin-bottom: 25px;
        }

        .participation-events {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 10px;
        }

        /* ===== CHECKBOX CHIP ===== */
        .event-chip {
            background: #fff5f5;
            padding: 10px 16px;
            border-radius: 30px;
            font-weight: 600;
            border: 1px solid #f3c1c5;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .event-chip input {
            accent-color: var(--galore-red);
            width: 18px;
            height: 18px;
        }

        /* ===== BUTTONS ===== */

        .profile-actions  {
            padding: 12px 32px;
            font-size: 16px;
        }

  

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <section class="hero">
        <h1>My Profile</h1>
        <p>View & manage your Galore participation</p>
    </section><br><br><br>

    <div class="profile-card" data-aos="fade-up">

        <div class="profile-header">
            <img src="website/me.jpg">
            <div>
                <h3>Dipali Parabiya</h3>
                <p>Enrollment No: 25SOECE13016</p>
                <p>Computer Engineering</p>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-box"><small>Semester</small>
                <p>IV</p>
            </div>
            <div class="info-box"><small>School</small>
                <p>School of Engineering</p>
            </div>
            <div class="info-box"><small>Gender</small>
                <p>Female</p>
            </div>
            <div class="info-box"><small>Email</small>
                <p>dparabiya325@rku.ac.in</p>
            </div>
        </div>

        <div class="profile-actions text-center mt-4">
            <a href="edit_profile.php" class="download-btn">
                 Edit Profile
            </a>
        </div>


        <form method="post">
            <div class="participation-section">
                <h4 class="text-center text-danger fw-bold">My Event Participation</h4>

                <!-- SPORTS OUTDOOR -->
                <div class="participation-box">
                    <strong>Sports – Outdoor</strong>
                    <div class="participation-events">
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Cricket"> Cricket</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Volleyball"> Volleyball</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Basketball"> Basketball</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Dodgeball"> Dodgeball</label>
                    </div>
                </div>

                <!-- SPORTS INDOOR -->
                <div class="participation-box">
                    <strong>Sports – Indoor</strong>
                    <div class="participation-events">
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Carrom"> Carrom</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Duo Carrom"> Duo Carrom</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Chess"> Chess</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Table Tennis"> Table Tennis</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Duo Table Tennis"> Duo Table Tennis</label>
                    </div>
                </div>

                <!-- CULTURAL -->
                <div class="participation-box">
                    <strong>Cultural</strong>
                    <div class="participation-events">
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Drawing"> Drawing</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Singing"> Singing</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Public Speaking"> Public Speaking</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Rangoli"> Rangoli</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Solo Dance"> Solo Dance</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Duo Dance"> Duo Dance</label>
                        <label class="event-chip"><input type="checkbox" name="events[]" value="Group Dance"> Group Dance</label>
                    </div>
                </div>

                <div class="profile-actions text-center mt-4">
                    <button class="download-btn" type="submit">Save Participation</button>
                </div>
            </div>
        </form>

    </div>


    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true
        });
    </script>

</body>

</html>