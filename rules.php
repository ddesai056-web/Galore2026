<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galore 2026 – Rules</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    :root {
      --galore-red: #dc3545;
      --galore-red-dark: #7a1c25;
    }

    body {
      background: linear-gradient(135deg, #ffffff, #fff1f1);
      font-family: "Segoe UI", Arial, sans-serif;
    }

    /* ===== HERO ===== */
    .hero {
      background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
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
    }

    .hero p {
      font-size: 1.2rem;
      opacity: 0.95;
    }

    /* ===== PAGE TITLE ===== */
    .page-title {
      text-align: center;
      margin-bottom: 30px;
    }

    .page-title h2 {
      color: var(--galore-red);
      font-weight: 800;
    }

    .underline {
      width: 80px;
      height: 4px;
      background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
      margin: 12px auto;
      border-radius: 10px;
    }

    /* ===== RULES CARD ===== */
    .rules-card {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(12px);
      border-radius: 22px;
      box-shadow: 0 25px 50px rgba(220, 53, 69, 0.35);
      border-top: 6px solid var(--galore-red);
      padding: 30px;
      animation: fadeUp 0.8s ease;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ===== TABLE ===== */
    .rules-table thead {
      background: var(--galore-red);
      color: #fff;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .rules-table th {
      font-weight: 600;
      text-align: center;
    }

    .rules-table td {
      vertical-align: middle;
    }

    .rules-table tbody tr {
      transition: all 0.3s ease;
    }

    .rules-table tbody tr:hover {
      background-color: #ffe3e6;
      transform: scale(1.01);
    }

    .rules-table tbody tr:nth-child(even) {
      background-color: #fff5f5;
    }

    .rules-table a {
      color: var(--galore-red);
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .rules-table a:hover {
      color: var(--galore-red-dark);
      padding-left: 6px;
    }
  </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- ===== HERO ===== -->
<section class="hero">
  <h1>Galore 2026</h1>
  <p>Rules & Circulars for Sports and Cultural Events</p>
</section>

<!-- ===== CONTENT ===== -->
<div class="container my-5">

  <div class="page-title">
    <h2>Galore 2026 : Circulars</h2>
    <div class="underline"></div>
  </div>

  <div class="rules-card">
    <div class="table-responsive">
      <table class="table rules-table mb-0">
        <thead>
          <tr>
            <th width="25%">Date</th>
            <th>Circulars</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/cricket.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Cricket Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/volleyball.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Volleyball Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/football.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Football Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Rules of Basketball Tournament.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Basketball Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/dodgeball.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Dodgeball Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/carrom.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Carrom Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/chess.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Chess Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/table-tennis.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Table-Tennis Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Artistry Comepetition_ Galore 2022_updated.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Artistry – Drawing Competition Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Singing competition Galore 2022.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Singing Competition Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Public Speaking Competition_updated.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Public Speaking Contest Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Rangoli competition_Galore 2022.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Rangoli Competition Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/Dance competition Student Galore 2022.pdf"><i class="fa-solid fa-file-pdf text-danger me-2"></i>Dance Competition Rules</a></td>
          </tr>
          <tr>
            <td class="text-center">01/01/2026</td>
            <td><a href="website/badminton.docx"><i class="fa-solid fa-file-word text-primary me-2"></i>Badminton Rules</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
