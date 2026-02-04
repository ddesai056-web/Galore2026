<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Events Participation | Galore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS (optional, for animation) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
:root {
    --galore-red: #dc3545;
    --galore-red-dark: #b02a37;
    --galore-gray: #6c757d;
}

/* ===== HERO ===== */
.hero {
    background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
    color: #fff;
    text-align: center;
    padding: 130px 20px 70px;
    position: relative;
    overflow: hidden;
}

.hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 10px;
}

.hero p {
    opacity: 0.9;
    font-size: 1.1rem;
}

/* floating shapes */
.hero::before,
.hero::after {
    content: '';
    position: absolute;
    width: 260px;
    height: 260px;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}
.hero::before { top: -80px; left: -80px; }
.hero::after { bottom: -100px; right: -100px; }

@keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-25px); }
}

/* ===== CARD ===== */
.participation-card {
    max-width: 980px;
    margin: -80px auto 60px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(10px);
    border-radius: 22px;
    padding: 40px 45px;
    box-shadow: 0 30px 60px rgba(220,53,69,0.25);
}

/* ===== TITLES ===== */
.page-title {
    text-align: center;
    font-weight: 800;
    color: var(--galore-red);
}

.underline {
    width: 70px;
    height: 4px;
    background: linear-gradient(135deg, var(--galore-red), var(--galore-red-dark));
    margin: 10px auto 25px;
    border-radius: 10px;
}

.date {
    text-align: center;
    font-weight: 600;
    color: var(--galore-gray);
    margin-bottom: 25px;
}

/* ===== DETAILS ===== */
.details {
    background: linear-gradient(135deg, #fff1f1, #ffffff);
    padding: 18px 22px;
    border-radius: 14px;
    font-weight: 600;
    line-height: 1.8;
    margin-bottom: 30px;
    border-left: 5px solid var(--galore-red);
}

/* ===== SECTIONS ===== */
.section-title {
    font-weight: 800;
    margin: 35px 0 15px;
    color: #212529;
    position: relative;
}

.section-title::after {
    content: '';
    display: block;
    width: 40px;
    height: 3px;
    background: var(--galore-red);
    margin-top: 6px;
    border-radius: 10px;
}

/* ===== CUSTOM CHECKBOX ===== */
.events label {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 6px 0;
    cursor: pointer;
    font-weight: 500;
}

.events input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: var(--galore-red);
    cursor: pointer;
}

/* ===== NOTE ===== */
.note {
    color: var(--galore-red);
    font-weight: 600;
    font-size: 0.95rem;
}

/* ===== TEXTAREA ===== */
textarea {
    width: 100%;
    height: 90px;
    border: 2px dashed var(--galore-red);
    border-radius: 12px;
    padding: 12px;
    background: #fff5f5;
    resize: none;
}

/* ===== BUTTON ===== */
.submit-btn {
    background: linear-gradient(135deg, #ff4d5a, var(--galore-red));
    color: #fff;
    border: none;
    padding: 14px 48px;
    font-size: 17px;
    font-weight: 700;
    border-radius: 40px;
    transition: all 0.35s ease;
}

.submit-btn:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(220,53,69,0.55);
}
</style>

</head>


<body>

<?php require 'navbar.php'; ?>

<section class="hero">
    <h1>Events Participation</h1>
    <p>Choose your events & be part of Galore 2026</p>
</section>

<div class="participation-card" data-aos="fade-up">

    <h2 class="page-title">Events' Participation</h2>
    <div class="underline"></div>

    <div class="date">🗓️ Last Date of Registration : (17th January, 2026)</div>

    <div class="details">
        EnrollmentNo: 25SOECE13016<br>
        Name: PARABIYA DIPALI<br>
        Branch: CE<br>
        Sem: IV<br>
        School: SOE<br>
        MobileNo: 9422066490<br>
        E-mail: dparabiya325@rku.ac.in<br>
        Gender: Female
    </div>

    <div class="section-title">Select Events In Which You Want to Participate</div>

    <p class="note">
        * In Sports, you can select maximum 2 outdoor events and in indoor event you can select maximum 1 event.
    </p>
    <p class="note">
        * In Cultural, you can select maximum 2 events.
    </p>

    <!-- Sports Outdoor -->
    <div class="section-title">Sports-Outdoor</div>
    <div class="events">
        <label><input type="checkbox"> Cricket</label>
        <label><input type="checkbox"> Volleyball</label>
        <label><input type="checkbox"> Basketball</label>
        <label><input type="checkbox"> Dodgeball</label>
    </div>

    <!-- Sports Indoor -->
    <div class="section-title">Sports-Indoor</div>
    <div class="events">
        <label><input type="checkbox"> Carrom</label>
        <label><input type="checkbox"> Duo Carrom</label>
        <label><input type="checkbox" checked> Chess</label>
        <label><input type="checkbox"> Table-Tennis</label>
        <label><input type="checkbox"> Duo Table-Tennis</label>
    </div>

    <!-- Cultural -->
    <div class="section-title">Cultural</div>
    <div class="events">
        <label><input type="checkbox"> Artistry - Drawing competition</label>
        <label><input type="checkbox"> Singing Competition</label>
        <label><input type="checkbox"> Public Speaking Contest</label>
        <label><input type="checkbox"> Rangoli Competition (Maximum 4 participants allowed.)</label>
        <label><input type="checkbox"> Solo Dance Competition</label>
        <label><input type="checkbox"> Duo Dance Competition</label>
        <label><input type="checkbox"> Group Dance Competition (Maximum 10 participants allowed.)</label>
    </div>

    <div class="section-title">You have already participated in the following events:</div>
    <textarea readonly>Chess</textarea>

    <div class="text-center">
        <button class="submit-btn">Submit</button>
    </div>

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