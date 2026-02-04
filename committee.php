<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galore Committee</title>

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-red-dark: #b02a37;
            --galore-gray: #6c757d;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        /* ===== GRID ===== */
        .committee-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            max-width: 1400px;
            margin: 40px auto;
            padding: 25px;
            box-sizing: border-box;
            flex: 1;
            animation: fadeSlide 1s ease forwards;
            opacity: 0;
        }

        /* ===== CARD ===== */
        .info-panel {
            background: #ffffff;
            border-radius: 20px;
            padding: 22px;
            display: flex;
            align-items: center;
            box-shadow: 0 10px 24px rgba(198, 40, 40, 0.18);
            transition: all 0.4s ease;
            cursor: pointer;
            border-left: 7px solid #c62828;
            opacity: 0;
            animation: cardFade 0.8s ease forwards;
        }

        .info-panel:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 18px 40px rgba(198, 40, 40, 0.35);
        }

        /* ===== IMAGE ===== */
        .category-image-container {
            width: 130px;
            height: 130px;
            margin-right: 22px;
            overflow: hidden;
            border-radius: 16px;
            flex-shrink: 0;
            border: 3px solid #c62828;
        }

        .category-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .info-panel:hover img {
            transform: scale(1.12);
        }

        /* ===== TEXT ===== */
        .event-type {
            background: #c62828;
            color: #fff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            text-transform: uppercase;
            margin-bottom: 8px;
            display: inline-block;
        }

        .person-bio h3 {
            margin: 8px 0;
            font-size: 1.25rem;
            color: #b71c1c;
        }

        .person-bio p {
            margin: 3px 0;
            font-size: 0.95rem;
            color: #555;
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeSlide {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes cardFade {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1100px) {
            .committee-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .committee-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<?php require 'navbar.php'; ?>

<!-- ===== HERO ===== -->
<section class="hero">
    <h1>Galore 2026 Committee</h1>
    <p>Meet the organizing committee behind Galore</p>
</section>

<!-- ===== COMMITTEE GRID ===== -->
<div class="committee-grid">

    <div class="info-panel">
        <div class="category-image-container">
            <img src="website/amit.png">
        </div>
        <div class="person-bio">
            <span class="event-type">Chairperson</span>
            <h3>Dr. Rajesh Patel</h3>
            <p>Head of Committee</p>
            <p>RK University</p>
        </div>
    </div>

    <div class="info-panel">
        <div class="category-image-container">
            <img src="website/priya.png">
        </div>
        <div class="person-bio">
            <span class="event-type">Convener</span>
            <h3>Prof. Neha Joshi</h3>
            <p>Event Convener</p>
            <p>📞 9123456789</p>
        </div>
    </div>

    <div class="info-panel">
        <div class="category-image-container">
            <img src="website/rahul.png">
        </div>
        <div class="person-bio">
            <span class="event-type">Co-Convener</span>
            <h3>Mr. Amit Verma</h3>
            <p>Sports & Cultural</p>
            <p>📞 9988766554</p>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
