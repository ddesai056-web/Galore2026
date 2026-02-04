<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galore 2026 - Events</title>

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
      background: var(--galore-bg);
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    /* HERO SECTION */
    .hero {
      position: relative;
      background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
      color: #fff;
      text-align: center;
      padding: 120px 20px 80px;
      overflow: hidden;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 15px;
      letter-spacing: 1px;
      animation: fadeInDown 1s ease forwards;
    }

    .hero p {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 20px;
      animation: fadeInUp 1s ease forwards;
    }

    .hero::before,
    .hero::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      z-index: 0;
      animation: float 6s ease-in-out infinite;
    }

    .hero::before {
      width: 200px;
      height: 200px;
      top: -50px;
      left: -50px;
    }

    .hero::after {
      width: 300px;
      height: 300px;
      bottom: -100px;
      right: -100px;
    }

    @keyframes float {
      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }
      50% {
        transform: translateY(-20px) rotate(45deg);
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* CATEGORY FILTER */
    .filter-buttons {
      text-align: center;
      margin-bottom: 50px;
    }

    .filter-buttons button {
      margin: 5px;
      padding: 10px 25px;
      border-radius: 30px;
      border: 2px solid var(--galore-red);
      background: #fff;
      color: var(--galore-red);
      font-weight: 600;
      transition: all 0.3s;
    }

    .filter-buttons button.active,
    .filter-buttons button:hover {
      background: var(--galore-red);
      color: #fff;
      box-shadow: 0 6px 15px rgba(220, 53, 69, 0.3);
    }

    /* EVENT CARDS */
    .events-section {
      max-width: 1200px;
      margin: auto;
      padding-bottom: 80px;
    }

    .event-card {
      background: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(220, 53, 69, 0.15);
      transition: transform 0.4s, box-shadow 0.4s;
      cursor: pointer;
    }

    .event-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(220, 53, 69, 0.35);
    }

    .event-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .event-card:hover img {
      transform: scale(1.08);
    }

    .event-card-body {
      padding: 20px;
      text-align: center;
    }

    .event-card-body h4 {
      color: var(--galore-red);
      font-weight: 700;
      margin-bottom: 10px;
    }

    .event-card-body p {
      color: #555;
      line-height: 1.6;
    }

    .event-btn {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 24px;
      border-radius: 30px;
      background: linear-gradient(135deg, var(--galore-red-dark), var(--galore-red));
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .event-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(220, 53, 69, 0.35);
    }

    /* TIMELINE */
    .timeline {
      position: relative;
      padding: 80px 0;
      background: #fff;
    }

    .timeline::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      width: 4px;
      height: 100%;
      background: var(--galore-red);
      transform: translateX(-50%);
      border-radius: 2px;
    }

    .timeline-item {
      position: relative;
      width: 50%;
      padding: 30px 40px;
      box-sizing: border-box;
    }

    .timeline-item.left {
      left: 0;
      text-align: right;
    }

    .timeline-item.right {
      left: 50%;
      text-align: left;
    }

    .timeline-item::before {
      content: "";
      position: absolute;
      top: 30px;
      width: 20px;
      height: 20px;
      background: #fff;
      border: 4px solid var(--galore-red);
      border-radius: 50%;
      z-index: 2;
    }

    .timeline-item.left::before {
      right: -12px;
    }

    .timeline-item.right::before {
      left: -12px;
    }

    .timeline-item h5 {
      font-weight: 700;
      color: var(--galore-red);
      margin-bottom: 10px;
    }

    .timeline-item p {
      color: #555;
    }

    @media(max-width: 768px) {
      .timeline::before {
        left: 20px;
      }
      .timeline-item {
        width: 100%;
        padding-left: 60px;
        padding-right: 20px;
        margin-bottom: 30px;
      }
      .timeline-item.left,
      .timeline-item.right {
        left: 0;
        text-align: left;
      }
      .timeline-item::before {
        left: 0;
      }
    }
  </style>
</head>

<body>

  <?php include 'navbar.php'; ?>

  <!-- HERO -->
  <section class="hero">
    <h1 data-aos="fade-down">Galore 2026</h1>
    <p data-aos="fade-up">The Ultimate Sports & Cultural Festival of RK University</p>
  </section>

  <!-- FILTER BUTTONS -->
  <div class="filter-buttons" data-aos="fade-up">
    <button class="active" onclick="filterEvents('all')">All Events</button>
    <button onclick="filterEvents('technical')">Technical</button>
    <button onclick="filterEvents('non-technical')">Non-Technical</button>
  </div>

  <!-- EVENTS CARDS -->
  <section class="events-section">
    <div class="container">
      <div class="row g-4">
        <!-- Event 1 -->
        <div class="col-md-4 event-item technical" data-aos="fade-up">
          <div class="event-card">
            <img src="website/football_galore_evnt.png" alt="Football">
            <div class="event-card-body">
              <h4>Football</h4>
              <p>Exciting football matches testing teamwork & strategy!</p>
              <a href="#" class="event-btn">Join Now</a>
            </div>
          </div>
        </div>
        <!-- Event 2 -->
        <div class="col-md-4 event-item non-technical" data-aos="fade-up" data-aos-delay="100">
          <div class="event-card">
            <img src="website/dance_galore_event.jpg" alt="Dance">
            <div class="event-card-body">
              <h4>Dance</h4>
              <p>Showcase your rhythm and creativity in dance competitions!</p>
              <a href="#" class="event-btn">Join Now</a>
            </div>
          </div>
        </div>
        <!-- Event 3 -->
        <div class="col-md-4 event-item non-technical" data-aos="fade-up" data-aos-delay="200">
          <div class="event-card">
            <img src="website/rangoli_galore_event.jpg" alt="Rangoli">
            <div class="event-card-body">
              <h4>Rangoli</h4>
              <p>Express artistic creativity through beautiful Rangoli designs.</p>
              <a href="#" class="event-btn">Join Now</a>
            </div>
          </div>
        </div>
        <!-- Add more events as needed -->
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <section class="timeline">
    <div class="timeline-item left" data-aos="fade-right">
      <h5>Opening Ceremony</h5>
      <p>Welcome speech and introduction of all events by chief guest.</p>
    </div>
    <div class="timeline-item right" data-aos="fade-left">
      <h5>Football Tournament</h5>
      <p>Exciting matches between department teams competing for glory.</p>
    </div>
    <div class="timeline-item left" data-aos="fade-right">
      <h5>Dance Competitions</h5>
      <p>Solo & group performances showcasing talent & rhythm.</p>
    </div>
    <div class="timeline-item right" data-aos="fade-left">
      <h5>Rangoli & Cultural Events</h5>
      <p>Creative events to show artistic & team skills.</p>
    </div>
    <div class="timeline-item left" data-aos="fade-right">
      <h5>Closing Ceremony</h5>
      <p>Prize distribution and celebration of Galore 2026.</p>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1200, once: true });

    // Event filter
    function filterEvents(category) {
      const buttons = document.querySelectorAll('.filter-buttons button');
      buttons.forEach(btn => btn.classList.remove('active'));

      event.target.classList.add('active');
      const items = document.querySelectorAll('.event-item');
      items.forEach(item => {
        if (category === 'all') item.style.display = 'block';
        else if (item.classList.contains(category)) item.style.display = 'block';
        else item.style.display = 'none';
      });
    }
  </script>
</body>
</html>
