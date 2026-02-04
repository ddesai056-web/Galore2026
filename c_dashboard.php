<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coordinator Dashboard – Galore 2026</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-red: #dc3545;
      --dark-red: #b02a37;
      --light-red: #f8d7da;
      --gradient-red: linear-gradient(135deg, #dc3545, #b02a37);
    }

    body {
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      background: linear-gradient(135deg, #f8f9fa 0%, #fff5f5 50%, #f8f9fa 100%);
      min-height: 100vh;
    }

    /* ===== HEADER ===== */
    .dashboard-header {
      background: var(--gradient-red);
      color: white;
      border-radius: 20px;
      padding: 2.5rem;
      margin: 2rem 0;
      box-shadow: 0 15px 35px rgba(220, 53, 69, 0.15);
      position: relative;
      overflow: hidden;
    }

    .dashboard-header::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
      background-size: 40px 40px;
      opacity: 0.1;
    }

    .coordinator-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      padding: 0.5rem 1.25rem;
      border-radius: 25px;
      margin-bottom: 1rem;
      font-weight: 600;
    }

    /* ===== STATS CARDS ===== */
    .stat-card {
      color: white;
      border-radius: 15px;
      padding: 1.75rem;
      height: 100%;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .stat-card i {
      position: absolute;
      right: 1.5rem;
      bottom: 1.5rem;
      font-size: 3rem;
      opacity: 0.2;
      transition: all 0.3s ease;
    }

    .stat-card:hover i {
      transform: scale(1.2) rotate(-5deg);
      opacity: 0.3;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
    }

    .bg-stat-red {
      background: var(--gradient-red);
    }

    .bg-stat-green {
      background: linear-gradient(135deg, #198754, #157347);
    }

    .bg-stat-orange {
      background: linear-gradient(135deg, #fd7e14, #e8590c);
    }

    .bg-stat-dark {
      background: linear-gradient(135deg, #212529, #495057);
    }

    /* ===== MAIN CARDS ===== */
    .main-card {
      background: white;
      border-radius: 15px;
      border: none;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      margin-bottom: 1.5rem;
      overflow: hidden;
    }

    .main-card:hover {
      box-shadow: 0 12px 30px rgba(220, 53, 69, 0.1);
    }

    .card-header-red {
      background: var(--gradient-red);
      color: white;
      padding: 1.25rem 1.5rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .card-header-red h5 {
      margin: 0;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* ===== BUTTONS ===== */
    .btn-galore {
      background: var(--gradient-red);
      color: white;
      border: none;
      border-radius: 8px;
      padding: 0.6rem 1.5rem;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(220, 53, 69, 0.2);
    }

    .btn-galore:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(220, 53, 69, 0.3);
      color: white;
    }

    .btn-galore-outline {
      background: transparent;
      color: var(--primary-red);
      border: 2px solid var(--primary-red);
      border-radius: 8px;
      padding: 0.5rem 1.25rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-galore-outline:hover {
      background: var(--primary-red);
      color: white;
      transform: translateY(-2px);
    }

    /* ===== TABLE ===== */
    .table-galore {
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 10px;
      overflow: hidden;
    }

    .table-galore thead {
      background: var(--gradient-red);
    }

    .table-galore th {
      color: white;
      font-weight: 600;
      padding: 1rem;
      border: none;
    }

    .table-galore td {
      padding: 1rem;
      vertical-align: middle;
      border-bottom: 1px solid #e9ecef;
      transition: all 0.2s ease;
    }

    .table-galore tbody tr:hover td {
      background: var(--light-red);
      border-color: var(--primary-red);
    }

    .status-badge {
      padding: 0.35rem 0.75rem;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.85rem;
    }

    .badge-scheduled {
      background: rgba(40, 167, 69, 0.1);
      color: #28a745;
    }

    .badge-pending {
      background: rgba(255, 193, 7, 0.1);
      color: #ffc107;
    }

    .badge-upcoming {
      background: rgba(23, 162, 184, 0.1);
      color: #17a2b8;
    }

    /* ===== QUICK ACTIONS ===== */
    .action-btn {
      background: white;
      border: 2px solid #e9ecef;
      border-radius: 12px;
      padding: 1.5rem 0.5rem;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .action-btn:hover {
      border-color: var(--primary-red);
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(220, 53, 69, 0.1);
    }

    .action-btn i {
      font-size: 2.5rem;
      color: var(--primary-red);
      margin-bottom: 1rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .dashboard-header {
        padding: 1.5rem;
        border-radius: 15px;
      }
      
      .stat-number {
        font-size: 2rem;
      }
      
      .stat-card i {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>

<?php include 'c_navbar.php'; ?>

<div class="container py-4">

  <!-- HEADER -->
  <div class="dashboard-header">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="coordinator-badge">
          <i class="bi bi-award"></i> UNIVERSITY COORDINATOR
        </div>
        <h1 class="display-6 fw-bold mb-3">Welcome back! 👋</h1>
        <p class="lead mb-4">Manage all university events for Galore 2026 across 12 schools</p>
        <div class="d-flex flex-wrap gap-2">
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-calendar-check me-1"></i> 45 Days Remaining
          </span>
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-building me-1"></i> 12 Schools Active
          </span>
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-people-fill me-1"></i> 2,580 Participants
          </span>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="main-card d-inline-block text-start" style="width: 100%; max-width: 300px;">
          <div class="p-4">
            <div class="text-center mb-3">
              <i class="bi bi-person-badge display-4" style="color: var(--primary-red);"></i>
            </div>
            <h6 class="text-center mb-1">Coordinator Name</h6>
            <small class="text-muted d-block text-center mb-3">Galore 2026 Management</small>
            <div class="d-grid gap-2">
              <button class="btn-galore">
                <i class="bi bi-plus-circle me-2"></i> New Event
              </button>
              <button class="btn-galore-outline">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- STATS -->
  <div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-red">
        <div class="stat-number">48</div>
        <div class="stat-label">Total Events</div>
        <i class="bi bi-calendar-event"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-green">
        <div class="stat-number">2,580</div>
        <div class="stat-label">Participants</div>
        <i class="bi bi-people-fill"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-orange">
        <div class="stat-number">18</div>
        <div class="stat-label">Upcoming Matches</div>
        <i class="bi bi-clock-history"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-dark">
        <div class="stat-number">12</div>
        <div class="stat-label">Active Schools</div>
        <i class="bi bi-building"></i>
      </div>
    </div>
  </div>

  <!-- EVENTS TABLE -->
  <div class="main-card">
    <div class="card-header-red">
      <h5><i class="bi bi-calendar-check"></i> Assigned Events</h5>
    </div>
    <div class="p-4">
      <div class="table-responsive">
        <table class="table table-galore">
          <thead>
            <tr>
              <th>Event</th>
              <th>School</th>
              <th>Date & Time</th>
              <th>Venue</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="me-3" style="width: 40px; height: 40px; background: var(--light-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-activity text-danger"></i>
                  </div>
                  <div>
                    <strong>Football – Boys</strong>
                  </div>
                </div>
              </td>
              <td>Engineering</td>
              <td>
                <div>15 Feb 2026</div>
                <small class="text-muted">10:00 AM</small>
              </td>
              <td>Main Ground</td>
              <td>
                <span class="status-badge badge-scheduled">
                  <i class="bi bi-check-circle me-1"></i> Scheduled
                </span>
              </td>
              <td>
                <button class="btn-galore btn-sm">
                  <i class="bi bi-eye"></i> View
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="me-3" style="width: 40px; height: 40px; background: var(--light-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-activity text-danger"></i>
                  </div>
                  <div>
                    <strong>Football – Girls</strong>
                  </div>
                </div>
              </td>
              <td>Management</td>
              <td>
                <div>17 Feb 2026</div>
                <small class="text-muted">2:30 PM</small>
              </td>
              <td>Sports Complex</td>
              <td>
                <span class="status-badge badge-pending">
                  <i class="bi bi-clock me-1"></i> Pending
                </span>
              </td>
              <td>
                <button class="btn-galore-outline btn-sm">
                  <i class="bi bi-pencil"></i> Edit
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="me-3" style="width: 40px; height: 40px; background: var(--light-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-trophy text-warning"></i>
                  </div>
                  <div>
                    <strong>Championship Final</strong>
                  </div>
                </div>
              </td>
              <td>All Schools</td>
              <td>
                <div>20 Feb 2026</div>
                <small class="text-muted">4:00 PM</small>
              </td>
              <td>University Stadium</td>
              <td>
                <span class="status-badge badge-upcoming">
                  <i class="bi bi-calendar-plus me-1"></i> Upcoming
                </span>
              </td>
              <td>
                <button class="btn-galore btn-sm">
                  <i class="bi bi-eye"></i> View
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="me-3" style="width: 40px; height: 40px; background: var(--light-red); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-music-note-beamed text-info"></i>
                  </div>
                  <div>
                    <strong>Cultural Night</strong>
                  </div>
                </div>
              </td>
              <td>Arts & Culture</td>
              <td>
                <div>22 Feb 2026</div>
                <small class="text-muted">7:00 PM</small>
              </td>
              <td>Main Auditorium</td>
              <td>
                <span class="status-badge badge-scheduled">
                  <i class="bi bi-check-circle me-1"></i> Scheduled
                </span>
              </td>
              <td>
                <button class="btn-galore btn-sm">
                  <i class="bi bi-eye"></i> View
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-center mt-4">
        <button class="btn-galore-outline">
          <i class="bi bi-list-ul me-2"></i> View All Events
        </button>
      </div>
    </div>
  </div>

  <!-- QUICK ACTIONS -->
  <div class="main-card">
    <div class="card-header-red">
      <h5><i class="bi bi-lightning-charge"></i> Quick Actions</h5>
    </div>
    <div class="p-4">
      <div class="row g-3">
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-plus-circle"></i>
            <span class="fw-bold">Add Event</span>
            <small class="text-muted mt-1">Create new event</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-calendar-plus"></i>
            <span class="fw-bold">Schedule</span>
            <small class="text-muted mt-1">Manage calendar</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-file-earmark-text"></i>
            <span class="fw-bold">Reports</span>
            <small class="text-muted mt-1">Generate reports</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-broadcast"></i>
            <span class="fw-bold">Announce</span>
            <small class="text-muted mt-1">Send announcements</small>
          </button>
        </div>
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Add interactive animations
  document.addEventListener('DOMContentLoaded', function() {
    // Add hover effect to stat cards
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        const icon = this.querySelector('i');
        if (icon) {
          icon.style.transform = 'scale(1.2) rotate(-5deg)';
          icon.style.opacity = '0.3';
        }
      });
      
      card.addEventListener('mouseleave', function() {
        const icon = this.querySelector('i');
        if (icon) {
          icon.style.transform = 'scale(1) rotate(0deg)';
          icon.style.opacity = '0.2';
        }
      });
    });

    // Add click animation to buttons
    document.querySelectorAll('.btn-galore, .btn-galore-outline').forEach(button => {
      button.addEventListener('click', function(e) {
        // Create ripple effect
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
          position: absolute;
          border-radius: 50%;
          background: rgba(255, 255, 255, 0.6);
          transform: scale(0);
          animation: ripple 0.6s linear;
          width: ${size}px;
          height: ${size}px;
          left: ${x}px;
          top: ${y}px;
          pointer-events: none;
        `;
        
        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
      });
    });

    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
      @keyframes ripple {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);

    // Auto-update participant count (simulated)
    setInterval(() => {
      const participantStat = document.querySelector('.bg-stat-green .stat-number');
      if (participantStat) {
        const currentCount = parseInt(participantStat.textContent.replace(/,/g, ''));
        const randomIncrement = Math.floor(Math.random() * 3);
        const newCount = currentCount + randomIncrement;
        participantStat.textContent = newCount.toLocaleString();
        
        // Add animation
        participantStat.style.animation = 'none';
        setTimeout(() => {
          participantStat.style.animation = 'bounce 0.5s ease';
        }, 10);
      }
    }, 10000);

    // Add bounce animation CSS
    const bounceStyle = document.createElement('style');
    bounceStyle.textContent = `
      @keyframes bounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
      }
    `;
    document.head.appendChild(bounceStyle);

    // Table row hover effect
    const tableRows = document.querySelectorAll('.table-galore tbody tr');
    tableRows.forEach(row => {
      row.addEventListener('mouseenter', function() {
        this.style.transform = 'translateX(5px)';
        this.style.transition = 'transform 0.2s ease';
      });
      
      row.addEventListener('mouseleave', function() {
        this.style.transform = 'translateX(0)';
      });
    });
  });
</script>

</body>
</html>