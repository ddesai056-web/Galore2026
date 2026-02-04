<style>
    :root {
        --galore-red: #f15a5a;
        /* Adjusted to match your image's specific red */
        --galore-dark: #7a0c15;
        --bg-main: #f3f5f9;
        --glass: #ffffff;
    }

    body {
        background: linear-gradient(135deg, #f3f5f9, #eef1f6);
        font-family: 'Segoe UI', sans-serif;
    }

    .main-content {
        margin-left: 270px;
        /* Space for your sidebar */
        padding: 40px;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .dashboard-title {
        background: linear-gradient(90deg, #f15a5a, #ff8a8a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 2.5rem;
        font-weight: 800;
        color: #f15a5a;
        /* Solid color to match "Admin Dashboard" in image */
    }

    .admin-profile {
        background: white;
        padding: 8px 20px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .admin-profile:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .admin-profile img {
        width: 50px;
        height: 40px;
        border-radius: 50%;
        background: #f8f9fa;
        padding: 4px;
    }

    /* ===== STAT CARDS ===== */
    .stat-card {
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        position: relative;
        overflow: hidden;
        /* Important for the decorative circle */
        border: none;
        text-align: left;
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.95);
        cursor: pointer;

    }

    /* Red top border bar */
    .stat-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: #f15a5a;
    }

    /* TOP-RIGHT ROUND DECORATION */
    .stat-card::after {
        content: "";
        position: absolute;
        width: 140px;
        height: 140px;
        background: rgba(241, 90, 90, 0.18);
        border-radius: 50%;
        top: -50px;
        right: -50px;
        z-index: 0;
    }

    /* Optional hover animation */
    .stat-card:hover::after {
        transform: scale(1.2);
    }


    .stat-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        background: #f15a5a;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    .stat-title {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #666;
        font-weight: 700;
        letter-spacing: 0.5px;
        position: relative;
        z-index: 1;
    }

    .stat-value {
        font-size: 2.2rem;
        font-weight: 800;
        color: #f15a5a;
        margin-top: 5px;
        position: relative;
        z-index: 1;
    }

    /* ===== TABLE ===== */
    .custom-table {
        margin-top: 40px;
        background: white;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .table-header-text {
        color: #f15a5a;
        font-weight: 700;
        margin-bottom: 25px;
    }

    table thead th {
        color: #333;
        font-weight: 700;
        border-bottom: 1px solid #f8f9fa;
        padding-bottom: 15px;
    }

    table tbody td {
        padding: 15px 0;
        color: #444;
        font-size: 0.95rem;
        border: none;
    }

    /* Remove default bootstrap table borders */
    .table> :not(caption)>*>* {
        border-bottom-width: 0;
    }
</style>
<?php require 'admin_dashboard.php' ?>
<div class="main-content">
    <div class="top-bar">
        <div class="dashboard-title">Admin Dashboard</div>
        <div class="admin-profile">
            <img src="website/rku_logo.png" alt="Logo">
            <div>
                <strong>Admin</strong><br>
                <small class="text-muted">RK University</small>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon"><i class="bi bi-people"></i></div>
                <div class="stat-title">Registrations</div>
                <div class="stat-value">1,245</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon"><i class="bi bi-calendar-check"></i></div>
                <div class="stat-title">Events</div>
                <div class="stat-value">28</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
                <div class="stat-title">Participants</div>
                <div class="stat-value">980</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon"><i class="bi bi-award-fill"></i></div>
                <div class="stat-title">Winners</div>
                <div class="stat-value">72</div>
            </div>
        </div>
    </div>

    <div class="custom-table">
        <h5 class="table-header-text">Recent Registrations</h5>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Enrollment No</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>21CE001</td>
                        <td>Rahul Patel</td>
                        <td>Computer Engg.</td>
                        <td>5</td>
                        <td>rahul@rku.ac.in</td>
                    </tr>
                    <tr>
                        <td>21IT045</td>
                        <td>Neha Shah</td>
                        <td>IT</td>
                        <td>6</td>
                        <td>neha@rku.ac.in</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>