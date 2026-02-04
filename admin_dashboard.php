<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | RKU Galore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --galore-red: #dc3545;
            --galore-dark: #7a0c15;
            --bg-main: #f3f5f9;
            --glass: rgba(255, 255, 255, 0.75);
        }

        body {
            background: linear-gradient(120deg, #fdfbfb, #ebedee);
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden; /* Prevents side scroll on mobile */
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            position: fixed;
            width: 270px;
            height: 100vh;
            padding: 35px 24px;
            background: var(--glass);
            backdrop-filter: blur(14px);
            border-right: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 10px 0 40px rgba(0, 0, 0, 0.08);
            z-index: 1050; /* Ensure it stays above content */
            transition: transform 0.3s ease;
        }

        /* ===== LOGO ===== */
        .sidebar-logo {
            text-align: center;
            margin-bottom: 55px;
        }

        .sidebar-logo img {
            max-height: 55px;
            margin: 0 6px;
        }

        .sidebar-logo span {
            display: block;
            margin-top: 14px;
            font-size: 1.4rem;
            font-weight: 900;
            background: linear-gradient(to right, var(--galore-red), #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===== NAV LINKS ===== */
        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 14px;
            margin-bottom: 14px;
            font-weight: 700;
            border-radius: 14px;
            color: var(--galore-red);
            text-decoration: none;
            transition: all 0.35s ease;
        }

        .sidebar a i {
            font-size: 1.2rem;
        }

        .sidebar a:hover {
            background: linear-gradient(to right, rgba(220, 53, 69, 0.15), transparent);
            transform: translateX(6px);
            color: var(--galore-dark);
        }

        .sidebar a.active {
            background: linear-gradient(to right, var(--galore-red), #ff6b6b);
            color: #fff;
            box-shadow: 0 10px 30px rgba(220, 53, 69, 0.4);
        }

        /* ===== MAIN ===== */


        /* ===== TOP BAR ===== */


    </style>
</head>

<body>

    <button class="menu-btn d-lg-none" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <img src="Website/rku_logo.png">
            <img src="Website/galore_logo.png">
            <span>RK University</span>
        </div>

        <a href="admin_index.php" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-people-fill"></i> Registrations</a>
        <a href="admin_events.php"><i class="bi bi-calendar-event"></i> Events</a>
        <a href="#"><i class="bi bi-trophy-fill"></i> Winners</a>
        <a href="admin_schedule.php"><i class="bi bi-trophy-fill"></i> Schedule</a>
        <a href="#"><i class="bi bi-person-badge-fill"></i> Coordinators</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
        
        <div class="d-lg-none mt-4 text-center">
            <button class="btn btn-sm btn-outline-danger" onclick="toggleSidebar()">Close Menu</button>
        </div>
    </div>

    
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>

</body>
</html>