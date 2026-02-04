<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galore 2026 - Results</title>

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


        /* RESULTS SECTION */
        .results-section {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px 80px;
        }

        .results-section h2 {
            text-align: center;
            font-size: 2.8rem;
            color: var(--galore-red);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .underline {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
            margin: 0 auto 50px;
            border-radius: 10px;
        }

        /* RESULT CARDS */
        .result-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(220, 53, 69, 0.15);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.5s ease;
            display: flex;
            align-items: center;
            padding: 20px;
            position: relative;
            border-left: 6px solid transparent;
        }

        .result-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(220, 53, 69, 0.25);
            border-left-color: var(--galore-red);
        }

        .result-card .position-icon {
            font-size: 3rem;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .result-info h5 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--galore-red-dark);
        }

        .result-info p {
            margin: 4px 0;
            color: #444;
            font-weight: 500;
        }

        .medal-gold { color: #FFD700; }
        .medal-silver { color: #C0C0C0; }
        .medal-bronze { color: #CD7F32; }

        /* Event Icons */
        .event-icon {
            font-size: 2rem;
            margin-left: auto;
            color: var(--galore-red-dark);
        }

        /* RESPONSIVE */
        @media(max-width:768px) {
            .result-card { flex-direction: column; text-align: center; }
            .result-card .position-icon { margin-bottom: 10px; }
            .event-icon { margin-left: 0; margin-top: 10px; }
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- HERO -->
    <section class="hero">
        <h1>Galore 2026 Results</h1>
        <p>See the winners of all events and competitions!</p>
    </section>

    <!-- RESULTS SECTION -->
    <section class="results-section">

        <h2 data-aos="fade-up">Event Results</h2>
        <div class="underline" data-aos="fade-up" data-aos-delay="100"></div>

        <!-- RESULT CARDS -->
        <div data-aos="fade-up" data-aos-delay="200">

            <div class="result-card" data-aos="fade-right">
                <div class="position-icon medal-gold">🥇</div>
                <div class="result-info">
                    <h5>Football</h5>
                    <p>Winner: Rahul Sharma</p>
                    <p>Score: 3-1</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">⚽</div>
            </div>

            <div class="result-card" data-aos="fade-left" data-aos-delay="100">
                <div class="position-icon medal-silver">🥈</div>
                <div class="result-info">
                    <h5>Dance</h5>
                    <p>Winner: Priya Patel</p>
                    <p>Score: 95/100</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">💃</div>
            </div>

            <div class="result-card" data-aos="fade-right" data-aos-delay="200">
                <div class="position-icon medal-bronze">🥉</div>
                <div class="result-info">
                    <h5>Rangoli</h5>
                    <p>Winner: Amit Verma</p>
                    <p>Remarks: Top Creativity</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">🎨</div>
            </div>

            <div class="result-card" data-aos="fade-left" data-aos-delay="300">
                <div class="position-icon medal-gold">🥇</div>
                <div class="result-info">
                    <h5>Singing</h5>
                    <p>Winner: Neha Joshi</p>
                    <p>Score: 95/100</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">🎤</div>
            </div>

            <div class="result-card" data-aos="fade-right" data-aos-delay="400">
                <div class="position-icon medal-silver">🥈</div>
                <div class="result-info">
                    <h5>Carrom</h5>
                    <p>Winner: Sapana Patel</p>
                    <p>Result: Winner</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">🎯</div>
            </div>

            <div class="result-card" data-aos="fade-left" data-aos-delay="500">
                <div class="position-icon medal-gold">🥇</div>
                <div class="result-info">
                    <h5>Cricket</h5>
                    <p>Winner: Rohit Mehta</p>
                    <p>Score: 100/20 Overs</p>
                    <p>Team: RK University</p>
                </div>
                <div class="event-icon">🏏</div>
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
