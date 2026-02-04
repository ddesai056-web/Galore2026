<!DOCTYPE html>
<html lang="en">

<head>
  <title>Galore – Animated Page with Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS CSS for scroll animations -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

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
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background: linear-gradient(135deg, #ffffff 0%, #fff5f5 40%, #f8f9fa 100%);
    }

    .header-content {
      text-align: center;
      margin-bottom: 60px;
    }

    .header-content h2 {
      font-size: 2.2rem;
      color: var(--galore-red);
      font-weight: 700;
    }

    .header-content p {
      color: var(--galore-gray);
      font-weight: 500;
    }

    .underline {
      width: 60px;
      height: 4px;
      background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
      margin: 12px auto;
      border-radius: 10px;
    }

    .about-grid {
      display: flex;
      gap: 50px;
      align-items: center;
      margin-bottom: 90px;
    }

    .about-grid.reverse {
      flex-direction: row-reverse;
    }

    .about-image img {
      width: 100%;
      border-radius: 16px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
      transition: transform 0.5s ease;
    }

    .about-image img:hover {
      transform: scale(1.06);
    }

    .about-text h3 {
      font-weight: 700;
      margin-bottom: 15px;
    }

    .about-text h3 span {
      color: var(--galore-red);
    }

    .about-text p {
      color: #444;
      line-height: 1.7;
    }



    /* ================= CAROUSEL ================= */
    #fastCarousel {
      width: 100%;
      height: 70vh; /* half screen height */
      overflow: hidden;
    }

    #fastCarousel .carousel-inner,
    #fastCarousel .carousel-item {
      height: 100%;
    }

    #fastCarousel .carousel-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 1s ease;
    }

    /* #fastCarousel .carousel-item.active img {
      transform: scale(1.05);
    } */

    /* ================= COORDINATOR AUTO SCROLL ================= */
    .coordinator-scroll-wrapper {
      overflow: hidden;
      position: relative;
      width: 100%;
      padding-bottom: 15px;
    }

    .coordinator-scroll.track {
      display: flex;
      gap: 20px;
      animation: scroll-left 25s linear infinite;
    }

    .coordinator-scroll.track:hover {
      animation-play-state: paused;
    }

    @keyframes scroll-left {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .coordinator-card {
      min-width: 260px;
      max-width: 260px;
      flex-shrink: 0;
    }
  </style>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <!-- ================= CAROUSEL ================= -->
  <div class="container-fluid p-0">
    <div id="fastCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000"
      data-bs-pause="false">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#fastCarousel" data-bs-slide-to="5"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active"><img src="website/drowing_galore_event.jpg" alt="Drowing"></div>
        <div class="carousel-item"><img src="website/dance_galore_event.jpg" alt="Dance"></div>
        <div class="carousel-item"><img src="website/football_galore_evnt.png" alt="Football"></div>
        <div class="carousel-item"><img src="website/music_galore_event.jpg" alt="Singing"></div>
        <div class="carousel-item"><img src="website/carrom_galore_event.png" alt="Carrom"></div>
        <div class="carousel-item"><img src="website/rangoli_galore_event.jpg" alt="Rangoli"></div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#fastCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#fastCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div><br>

  <!-- ================= ABOUT SECTION ================= -->
  <section class="about-section">
    <div class="container">

      <div class="header-content" data-aos="fade-down">
        <h2>Galore</h2>
        <p>Sports and Cultural Festival of RK University</p>
        <div class="underline"></div>
      </div>

      <!-- FOOTBALL -->
      <div class="about-grid" data-aos="fade-right">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/football_galore_evnt.png" alt="Football">
        </div>
        <div class="about-text" data-aos="fade-left">
          <h3>Most Popular <span>Football</span></h3>
          <p>Football is a global phenomenon that unites cultures, emotions, and dreams. Teams demonstrate strategy,
            teamwork, and skill, while players showcase agility, endurance, and creativity. Football is more than a
            sport; it's a celebration of spirit, dedication, and joy of competition.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Football Event</a>
        </div>
      </div>

      <!-- RANGOLI -->
      <div class="about-grid reverse" data-aos="fade-left">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/rangoli_galore_event.jpg" alt="Rangoli">
        </div>
        <div class="about-text" data-aos="fade-right">
          <h3>Creative <span>Rangoli</span></h3>
          <p>Rangoli is a traditional art form that uses colors, patterns, and creativity. Participants explore intricate
            designs inspired by culture and festivals. Rangoli encourages focus, patience, and artistic expression.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Rangoli Event</a>
        </div>
      </div>

      <!-- DANCE -->
      <div class="about-grid" data-aos="fade-right">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/dance_galore_event.jpg" alt="Dance">
        </div>
        <div class="about-text" data-aos="fade-left">
          <h3>Energetic <span>Dance</span></h3>
          <p>Dance is a powerful form of expression combining rhythm, movement, and emotion. Performers showcase cultural
            traditions and creativity. Competitions celebrate talent, coordination, and joy.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Dance Event</a>
        </div>
      </div>

      <!-- SINGING -->
      <div class="about-grid reverse" data-aos="fade-left">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/music_galore_event.jpg" alt="Singing">
        </div>
        <div class="about-text" data-aos="fade-right">
          <h3>Melodious <span>Singing</span></h3>
          <p>Singing connects hearts through melody, pitch, and rhythm. Participants perform solos or group numbers,
            covering classical, contemporary, or regional music. Singing competitions encourage confidence, creativity, and
            a love for music.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Singing Event</a>
        </div>
      </div>

      <!-- CARROM -->
      <div class="about-grid" data-aos="fade-right">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/carrom_galore_event.png" alt="Carrom">
        </div>
        <div class="about-text" data-aos="fade-left">
          <h3>Strategic <span>Carrom</span></h3>
          <p>Carrom is a game of precision, strategy, and concentration. Players combine skill and focus to pocket coins
            and win. It encourages patience, logical thinking, and mental agility.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Carrom Event</a>
        </div>
      </div>

      <!-- CRICKET -->
      <div class="about-grid reverse" data-aos="fade-left">
        <div class="about-image" data-aos="zoom-in">
          <img src="website/cricket_galore_event.png" alt="Cricket">
        </div>
        <div class="about-text" data-aos="fade-right">
          <h3>Exciting <span>Cricket</span></h3>
          <p>Cricket combines skill, strategy, and teamwork. Matches are filled with suspense, outstanding plays, and
            moments of glory. Cricket inspires sportsmanship, excitement, and passion among students.</p>
          <a href="sports-indoor.php" class="download-btn" data-aos="flip-up">Cricket Event</a>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= COORDINATOR SECTION ================= -->
  <section class="coordinator-section">
    <div class="container" data-aos="fade-up">

      <div class="text-center mb-4">
        <h3>Event Coordinators</h3>
        <div class="underline"></div>
      </div>

      <div class="coordinator-scroll-wrapper">
        <div class="coordinator-scroll track">

          <!-- Coordinator Cards -->
          <div class="card coordinator-card shadow">
            <img src="website/rahul.png" class="card-img-top" alt="Rahul">
            <div class="card-body text-center">
              <h5>Rahul Sharma</h5>
              <p class="mb-1">Football Coordinator</p>
              <small class="text-muted">📞 +91 98765 43210</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/priya.png" class="card-img-top" alt="Priya">
            <div class="card-body text-center">
              <h5>Priya Patel</h5>
              <p class="mb-1">Cultural Coordinator</p>
              <small class="text-muted">📞 +91 91234 56789</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/amit.png" class="card-img-top" alt="Amit">
            <div class="card-body text-center">
              <h5>Amit Verma</h5>
              <p class="mb-1">Sports Coordinator</p>
              <small class="text-muted">📞 +91 99887 66554</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/neha.png" class="card-img-top" alt="Neha">
            <div class="card-body text-center">
              <h5>Neha Joshi</h5>
              <p class="mb-1">Dance Coordinator</p>
              <small class="text-muted">📞 +91 90123 45678</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/rohit.png" class="card-img-top" alt="Rohit">
            <div class="card-body text-center">
              <h5>Rohit Mehta</h5>
              <p class="mb-1">Music Coordinator</p>
              <small class="text-muted">📞 +91 88990 11223</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/megha.png" class="card-img-top" alt="Drawing Coordinator">
            <div class="card-body text-center">
              <h5>Megha Parmar</h5>
              <p class="mb-1">Drawing Coordinator</p>
              <small class="text-muted">📞 +91 90765 33445</small>
            </div>
          </div>

          <div class="card coordinator-card shadow">
            <img src="website/sapana.png" class="card-img-top" alt="Carrom Coordinator">
            <div class="card-body text-center">
              <h5>Sapana Patel</h5>
              <p class="mb-1">Carrom Coordinator</p>
              <small class="text-muted">📞 +91 99876 54321</small>
            </div>
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
