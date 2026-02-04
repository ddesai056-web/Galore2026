<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galore 2026 - Schedule</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-red-dark: #b02a37;
            --galore-white: #fff;
            --galore-gray: #6c757d;
            --galore-bg: #fff5f5;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
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


        /* SCHEDULE CARDS */
        .schedule-section {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px 80px;
        }

        .day-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(220, 53, 69, 0.15);
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.4s, box-shadow 0.4s;
        }

        .day-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(220, 53, 69, 0.3);
        }

        .day-header {
            background: var(--galore-red);
            color: #fff;
            padding: 20px;
            text-align: center;
            font-weight: 700;
            font-size: 1.5rem;
            position: relative;
        }

        .event-list {
            padding: 20px;
        }

        .event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .event-item:last-child {
            border-bottom: none;
        }

        .event-item:hover {
            background: rgba(220, 53, 69, 0.05);
            border-left: 4px solid var(--galore-red);
            padding-left: 16px;
        }

        .event-time {
            font-weight: 600;
            color: var(--galore-red-dark);
        }

        .event-name {
            font-weight: 500;
            color: #333;
        }

        .event-location {
            font-size: 0.9rem;
            color: var(--galore-gray);
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .event-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .event-time {
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- HERO -->
    <section class="hero">
        <h1>Galore 2026 Schedule</h1>
        <p>Check out the day-wise exciting events planned for the festival!</p>
    </section>

    <!-- SCHEDULE SECTION -->
    <section class="schedule-section">

        <!-- Day 1 -->
        <div class="day-card" data-aos="fade-up">
            <div class="day-header">Day 1 - 10th Jan 2026</div>
            <div class="event-list">
                <div class="event-item">
                    <div>
                        <div class="event-time">09:00 AM</div>
                        <div class="event-name">Opening Ceremony</div>
                        <div class="event-location">Main Auditorium</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">10:30 AM</div>
                        <div class="event-name">Football Tournament</div>
                        <div class="event-location">Sports Ground</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">02:00 PM</div>
                        <div class="event-name">Dance Competition</div>
                        <div class="event-location">Cultural Hall</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Day 2 -->
        <div class="day-card" data-aos="fade-up" data-aos-delay="100">
            <div class="day-header">Day 2 - 11th Jan 2026</div>
            <div class="event-list">
                <div class="event-item">
                    <div>
                        <div class="event-time">09:00 AM</div>
                        <div class="event-name">Rangoli Competition</div>
                        <div class="event-location">Open Area</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">11:00 AM</div>
                        <div class="event-name">Singing Competition</div>
                        <div class="event-location">Cultural Hall</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">03:00 PM</div>
                        <div class="event-name">Carrom Tournament</div>
                        <div class="event-location">Indoor Games Hall</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Day 3 -->
        <div class="day-card" data-aos="fade-up" data-aos-delay="200">
            <div class="day-header">Day 3 - 12th Jan 2026</div>
            <div class="event-list">
                <div class="event-item">
                    <div>
                        <div class="event-time">09:30 AM</div>
                        <div class="event-name">Cricket Matches</div>
                        <div class="event-location">Sports Ground</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">12:30 PM</div>
                        <div class="event-name">Dance Finale</div>
                        <div class="event-location">Cultural Hall</div>
                    </div>
                </div>
                <div class="event-item">
                    <div>
                        <div class="event-time">05:00 PM</div>
                        <div class="event-name">Closing Ceremony</div>
                        <div class="event-location">Main Auditorium</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true
        });
    </script>
</body>

</html>