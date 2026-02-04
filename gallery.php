<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galore – Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-red-dark: #b02a37;
            --galore-white: #ffffff;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            padding: 60px 20px;
        }

        /* ===== Hero Section ===== */
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


        /* ===== Gallery Cards ===== */
        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            background: #fff;
        }

        .gallery-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            display: block;
        }

        .gallery-card:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(220, 53, 69, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
            font-weight: 600;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <section class="hero">
        <h1>Galore 2026 Gallery</h1>
        <p>Check out the day-wise exciting events planned for the festival!</p>
    </section>

    <div class="container">
        <div class="row g-4">

            <div class="col-md-4" data-aos="zoom-in">
                <div class="gallery-card">
                    <a href="website/football_galore_evnt.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/football_galore_evnt.png" alt="Football">
                        <div class="gallery-overlay">Football</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-card">
                    <a href="website/dance_galore_event.jpg" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/dance_galore_event.jpg" alt="Dance">
                        <div class="gallery-overlay">Dance</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-card">
                    <a href="website/music_galore_event.jpg" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/music_galore_event.jpg" alt="Music">
                        <div class="gallery-overlay">Music</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in">
                <div class="gallery-card">
                    <a href="website/rangoli_galore_event.jpg" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/rangoli_galore_event.jpg" alt="Rangoli">
                        <div class="gallery-overlay">Rangoli</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-card">
                    <a href="website/carrom_galore_event.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/carrom_galore_event.png" alt="Carrom">
                        <div class="gallery-overlay">Carrom</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-card">
                    <a href="website/cricket_galore_event.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/cricket_galore_event.png" alt="Cricket">
                        <div class="gallery-overlay">Cricket</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in">
                <div class="gallery-card">
                    <a href="website/gallery3.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/gallery3.png" alt="Gallery Image 3">
                        <div class="gallery-overlay">View Event</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-card">
                    <a href="website/gallery2.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/gallery2.png" alt="Gallery Image 2">
                        <div class="gallery-overlay">View Event</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-card">
                    <a href="website/gallery1.png" class="glightbox" data-gallery="galore-gallery">
                        <img src="website/gallery1.png" alt="Gallery Image 1">
                        <div class="gallery-overlay">View Event</div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script>
        AOS.init({
            duration: 1200,
            once: true
        });

        // This script handles the smooth zoom pop-in
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true,
            draggable: true,
            openEffect: 'zoom', // Smooth zoom in
            closeEffect: 'zoom' // Smooth zoom out
        });
    </script>

</body>

</html>