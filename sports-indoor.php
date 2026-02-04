<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sports Indoor | Galore 2026</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-dark: #7a1c25;
            --galore-gray: #6c757d;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f8f9fa;
        }

        /* ===== HERO (UNCHANGED) ===== */
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

        /* ===== SECTION ===== */
        .sports-section {
            padding: 80px 0;
            margin-top: -40px;
        }

        .section-title {
            text-align: center;
            font-weight: 800;
            color: var(--galore-red);
            margin-bottom: 6px;
        }

        .section-subtitle {
            text-align: center;
            color: var(--galore-gray);
            margin-bottom: 55px;
        }

        /* ===== EVENT CARD (RESTORED STYLE) ===== */
        .event-card {
            background: #fff;
            border-radius: 20px;
            padding: 32px 26px;
            height: 100%;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
            border-top: 5px solid var(--galore-red);
            transition: all 0.35s ease;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 55px rgba(220, 53, 69, 0.35);
        }

        .event-card h5 {
            font-weight: 800;
            color: var(--galore-red);
            margin-bottom: 14px;
            font-size: 1.15rem;
        }

        .event-card p {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.65;
        }

        /* ===== NOTE ===== */
        .note {
            text-align: center;
            margin-top: 55px;
            font-weight: 600;
            color: var(--galore-red);
        }
    </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- ===== HERO (UNCHANGED) ===== -->
<section class="hero">
    <h1>Sports – Indoor</h1>
    <p>Select your indoor sports for Galore 2026</p>
</section>

<!-- ===== CONTENT ===== -->
<section class="sports-section">
    <div class="container">

        <h3 class="section-title">Indoor Sports Events</h3>
        <p class="section-subtitle">
            Precision, focus, and strategy under one roof
        </p>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="event-card">
                    <h5>🎯 Carrom</h5>
                    <p>
                        A classic indoor board game that requires precision,
                        control, and strategic thinking. Played in singles
                        format under standard rules.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="event-card">
                    <h5>🎯 Duo Carrom</h5>
                    <p>
                        A doubles version of carrom that emphasizes teamwork,
                        coordination, and tactical play between partners.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="event-card">
                    <h5>♟ Chess</h5>
                    <p>
                        A game of intellect and patience where strategic
                        planning and foresight determine victory.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="event-card">
                    <h5>🏓 Table Tennis</h5>
                    <p>
                        A fast-paced indoor sport demanding agility,
                        concentration, and lightning-fast reflexes.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="event-card">
                    <h5>🏓 Duo Table Tennis</h5>
                    <p>
                        A doubles format of table tennis where teamwork,
                        coordination, and timing play a crucial role.
                    </p>
                </div>
            </div>

        </div>

        <p class="note">
            * Match rules, format, and schedule will be announced during Galore 2026
        </p>

    </div>
</section>

<?php include 'footer.php'; ?>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 900,
        once: true
    });
</script>

</body>
</html>
