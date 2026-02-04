<!DOCTYPE html>
<html lang="en">
<head>
  <title>Co-Coordinator Dashboard – Galore 2026</title>
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

    .badge-completed {
      background: rgba(108, 117, 125, 0.1);
      color: #6c757d;
    }

    /* ===== SCHOOL CARDS ===== */
    .school-card {
      background: white;
      border: 1px solid #e9ecef;
      border-radius: 10px;
      padding: 1.5rem;
      transition: all 0.3s ease;
    }

    .school-card:hover {
      border-color: var(--primary-red);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(220, 53, 69, 0.1);
    }

    .school-icon {
      width: 60px;
      height: 60px;
      background: var(--gradient-red);
      color: white;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
    }

    /* ===== TASK CARDS ===== */
    .task-card {
      background: rgba(220, 53, 69, 0.05);
      border-left: 4px solid;
      padding: 1rem;
      margin-bottom: 0.75rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .task-card:hover {
      background: rgba(220, 53, 69, 0.1);
      transform: translateX(5px);
    }

    .task-urgent {
      border-left-color: #dc3545;
    }

    .task-medium {
      border-left-color: #ffc107;
    }

    .task-low {
      border-left-color: var(--primary-red);
    }

    .task-checkbox {
      width: 22px;
      height: 22px;
      border: 2px solid #dee2e6;
      border-radius: 4px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .task-checkbox.checked {
      background: var(--primary-red);
      border-color: var(--primary-red);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ===== MESSAGE BOX ===== */
    .message-box {
      background: rgba(13, 110, 253, 0.05);
      border-radius: 10px;
      padding: 1.25rem;
      border-left: 4px solid #0d6efd;
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }

    .message-box:hover {
      background: rgba(13, 110, 253, 0.1);
      transform: translateX(3px);
    }

    .message-urgent {
      border-left-color: #dc3545;
      background: rgba(220, 53, 69, 0.05);
    }

    .message-urgent:hover {
      background: rgba(220, 53, 69, 0.1);
    }

    /* ===== PROGRESS ===== */
    .progress-co {
      height: 8px;
      background: #e9ecef;
      border-radius: 4px;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      background: var(--primary-red);
      border-radius: 4px;
      transition: width 1s ease;
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

<?php include 'co_navbar.php'; ?>

<div class="container py-4">

  <!-- HEADER -->
  <div class="dashboard-header">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="coordinator-badge">
          <i class="bi bi-person-badge"></i> CO-COORDINATOR
        </div>
        <h1 class="display-6 fw-bold mb-3">Assistant Coordinator Dashboard 👋</h1>
        <p class="lead mb-4">Manage assigned schools & assist main coordinator - Galore 2026</p>
        <div class="d-flex flex-wrap gap-2">
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-person-check me-1"></i> Reporting to: Dr. Rajesh Kumar
          </span>
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-calendar me-1"></i> 2 Schools Assigned
          </span>
          <span class="badge bg-light text-dark px-3 py-2">
            <i class="bi bi-clock-history me-1"></i> 8 Pending Tasks
          </span>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="main-card d-inline-block text-start" style="width: 100%; max-width: 300px;">
          <div class="p-4">
            <div class="text-center mb-3">
              <i class="bi bi-person-circle display-4" style="color: var(--primary-red);"></i>
            </div>
            <h6 class="text-center mb-1">Ms. Priya Sharma</h6>
            <small class="text-muted d-block text-center mb-3">Assistant Coordinator</small>
            <div class="d-grid gap-2">
              <button class="btn-galore">
                <i class="bi bi-chat-left me-2"></i> Message Coordinator
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
        <div class="stat-number">2</div>
        <div class="stat-label">Assigned Schools</div>
        <i class="bi bi-building"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-green">
        <div class="stat-number">20</div>
        <div class="stat-label">Total Events</div>
        <i class="bi bi-calendar-event"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-orange">
        <div class="stat-number">800</div>
        <div class="stat-label">Participants</div>
        <i class="bi bi-people-fill"></i>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="stat-card bg-stat-dark">
        <div class="stat-number">8</div>
        <div class="stat-label">Pending Tasks</div>
        <i class="bi bi-list-check"></i>
      </div>
    </div>
  </div>

  <!-- ASSIGNED SCHOOLS -->
  <div class="main-card">
    <div class="card-header-red">
      <h5><i class="bi bi-buildings"></i> My Assigned Schools</h5>
    </div>
    <div class="p-4">
      <div class="row">
        <!-- School 1 -->
        <div class="col-md-6 mb-4">
          <div class="school-card">
            <div class="d-flex align-items-start">
              <div class="school-icon me-3">
                <i class="bi bi-cpu"></i>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <h5 class="mb-1">School of Engineering</h5>
                    <p class="text-muted mb-0">
                      <i class="bi bi-person me-1"></i> Coordinator: Prof. Amit Sharma
                    </p>
                  </div>
                  <span class="badge-scheduled status-badge">
                    <i class="bi bi-check-circle me-1"></i> Active
                  </span>
                </div>
                
                <div class="mb-3">
                  <h6>Engineering Events (12)</h6>
                  <div class="progress-co mt-2">
                    <div class="progress-fill" style="width: 75%"></div>
                  </div>
                  <small class="text-muted">9 completed, 3 upcoming</small>
                </div>
                
                <div class="mb-3">
                  <h6>Participants: 420</h6>
                  <div class="progress-co mt-2">
                    <div class="progress-fill" style="width: 85%"></div>
                  </div>
                  <small class="text-muted">Registration: 85% complete</small>
                </div>
                
                <div class="d-flex gap-2">
                  <button class="btn-galore btn-sm flex-grow-1">
                    <i class="bi bi-eye me-1"></i> View Details
                  </button>
                  <button class="btn-galore-outline btn-sm">
                    <i class="bi bi-chat me-1"></i> Contact
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- School 2 -->
        <div class="col-md-6 mb-4">
          <div class="school-card">
            <div class="d-flex align-items-start">
              <div class="school-icon me-3">
                <i class="bi bi-laptop"></i>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <h5 class="mb-1">School of Computer Science</h5>
                    <p class="text-muted mb-0">
                      <i class="bi bi-person me-1"></i> Coordinator: Dr. Neha Patel
                    </p>
                  </div>
                  <span class="badge-pending status-badge">
                    <i class="bi bi-exclamation-triangle me-1"></i> Needs Attention
                  </span>
                </div>
                
                <div class="mb-3">
                  <h6>CS Events (8)</h6>
                  <div class="progress-co mt-2">
                    <div class="progress-fill" style="width: 50%"></div>
                  </div>
                  <small class="text-muted">4 completed, 2 pending</small>
                </div>
                
                <div class="mb-3">
                  <h6>Participants: 380</h6>
                  <div class="progress-co mt-2">
                    <div class="progress-fill" style="width: 65%"></div>
                  </div>
                  <small class="text-muted">Registration: 65% complete</small>
                </div>
                
                <div class="d-flex gap-2">
                  <button class="btn-galore btn-sm flex-grow-1">
                    <i class="bi bi-eye me-1"></i> View Details
                  </button>
                  <button class="btn-galore-outline btn-sm">
                    <i class="bi bi-chat me-1"></i> Contact
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TASKS AND MESSAGES -->
  <div class="row g-4">
    <!-- TASKS -->
    <div class="col-lg-6">
      <div class="main-card h-100">
        <div class="card-header-red d-flex justify-content-between align-items-center">
          <h5><i class="bi bi-list-task"></i> My Tasks from Coordinator</h5>
          <span class="badge bg-danger">3 Urgent</span>
        </div>
        <div class="p-4">
          <div class="task-card task-urgent">
            <div class="d-flex align-items-start">
              <div class="task-checkbox me-3" onclick="toggleTask(this)"></div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <h6 class="mb-1">Approve Hackathon Budget</h6>
                  <small class="text-danger fw-bold">URGENT</small>
                </div>
                <p class="mb-1 small">CS School - Additional ₹25,000 required</p>
                <small class="text-muted">
                  <i class="bi bi-clock me-1"></i> Due: Today, 5 PM
                </small>
              </div>
            </div>
          </div>

          <div class="task-card task-medium">
            <div class="d-flex align-items-start">
              <div class="task-checkbox me-3" onclick="toggleTask(this)"></div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <h6 class="mb-1">Schedule Meeting with School Heads</h6>
                  <small class="text-warning fw-bold">MEDIUM</small>
                </div>
                <p class="mb-1 small">Coordinate with Engineering & CS coordinators</p>
                <small class="text-muted">
                  <i class="bi bi-clock me-1"></i> Due: Tomorrow
                </small>
              </div>
            </div>
          </div>

          <div class="task-card task-low">
            <div class="d-flex align-items-start">
              <div class="task-checkbox checked me-3" onclick="toggleTask(this)">
                <i class="bi bi-check"></i>
              </div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <h6 class="mb-1 text-muted"><s>Submit Weekly Report</s></h6>
                  <small class="text-success fw-bold">COMPLETED</small>
                </div>
                <p class="mb-1 small text-muted"><s>Weekly progress report for both schools</s></p>
                <small class="text-muted">
                  <i class="bi bi-check-circle me-1"></i> Submitted: Today, 10 AM
                </small>
              </div>
            </div>
          </div>

          <div class="task-card task-medium">
            <div class="d-flex align-items-start">
              <div class="task-checkbox me-3" onclick="toggleTask(this)"></div>
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <h6 class="mb-1">Verify Participant List</h6>
                  <small class="text-warning fw-bold">MEDIUM</small>
                </div>
                <p class="mb-1 small">Cross-check Engineering participant data</p>
                <small class="text-muted">
                  <i class="bi bi-clock me-1"></i> Due: 18 Feb
                </small>
              </div>
            </div>
          </div>

          <div class="text-center mt-3">
            <button class="btn-galore">
              <i class="bi bi-plus-circle me-2"></i> Add New Task
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- MESSAGES -->
    <div class="col-lg-6">
      <div class="main-card h-100">
        <div class="card-header-red d-flex justify-content-between align-items-center">
          <h5><i class="bi bi-chat-left-text"></i> Coordinator Messages</h5>
          <span class="badge bg-primary">3 Unread</span>
        </div>
        <div class="p-4">
          <div class="message-box message-urgent">
            <div class="d-flex justify-content-between align-items-start">
              <h6 class="mb-1">Budget Meeting Tomorrow</h6>
              <small class="text-danger fw-bold">NEW</small>
            </div>
            <p class="mb-2 small">Meeting scheduled tomorrow at 11 AM in Conference Room 2. Bring your school budget reports.</p>
            <small class="text-muted">
              <i class="bi bi-person me-1"></i> Dr. Rajesh Kumar • 2 hours ago
            </small>
          </div>

          <div class="message-box">
            <div class="d-flex justify-content-between align-items-start">
              <h6 class="mb-1">Venue Change Approved</h6>
              <small class="text-primary fw-bold">READ</small>
            </div>
            <p class="mb-2 small">Your request for venue change for Engineering Hackathon has been approved.</p>
            <small class="text-muted">
              <i class="bi bi-person me-1"></i> Dr. Rajesh Kumar • 1 day ago
            </small>
          </div>

          <div class="message-box">
            <div class="d-flex justify-content-between align-items-start">
              <h6 class="mb-1">Weekly Report Submitted</h6>
              <small class="text-success fw-bold">ACKNOWLEDGED</small>
            </div>
            <p class="mb-2 small">Good work on the weekly report. CS school needs more attention - please focus there.</p>
            <small class="text-muted">
              <i class="bi bi-person me-1"></i> Dr. Rajesh Kumar • 2 days ago
            </small>
          </div>

          <div class="mt-4">
            <h6>Send Message to Coordinator</h6>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Type your message...">
              <button class="btn-galore" type="button">
                <i class="bi bi-send"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- QUICK ACTIONS -->
  <div class="main-card mt-4">
    <div class="card-header-red">
      <h5><i class="bi bi-lightning-charge"></i> Quick Actions</h5>
    </div>
    <div class="p-4">
      <div class="row g-3">
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-calendar-plus"></i>
            <span class="fw-bold">Schedule Event</span>
            <small class="text-muted mt-1">For my schools</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-file-earmark-text"></i>
            <span class="fw-bold">Generate Report</span>
            <small class="text-muted mt-1">School performance</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-people"></i>
            <span class="fw-bold">Manage Volunteers</span>
            <small class="text-muted mt-1">For assigned schools</small>
          </button>
        </div>
        <div class="col-lg-3 col-md-6">
          <button class="action-btn">
            <i class="bi bi-cash-coin"></i>
            <span class="fw-bold">Submit Expense</span>
            <small class="text-muted mt-1">School expenses</small>
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

    // Task checkbox toggle
    function toggleTask(checkbox) {
      checkbox.classList.toggle('checked');
      if (checkbox.classList.contains('checked')) {
        checkbox.innerHTML = '<i class="bi bi-check"></i>';
        // Update task count
        const urgentBadge = document.querySelector('.badge.bg-danger');
        if (urgentBadge) {
          let count = parseInt(urgentBadge.textContent);
          if (count > 0) {
            urgentBadge.textContent = (count - 1) + ' Urgent';
            urgentBadge.style.animation = 'none';
            setTimeout(() => {
              urgentBadge.style.animation = 'bounce 0.5s ease';
            }, 10);
          }
        }
      } else {
        checkbox.innerHTML = '';
      }
    }

    // Mark message as read
    document.querySelectorAll('.message-box').forEach(box => {
      box.addEventListener('click', function() {
        const statusBadge = this.querySelector('.text-danger.fw-bold, .text-primary.fw-bold');
        if (statusBadge && statusBadge.classList.contains('text-danger')) {
          statusBadge.classList.remove('text-danger');
          statusBadge.classList.add('text-primary');
          statusBadge.textContent = 'READ';
          
          // Update unread count
          const unreadBadge = document.querySelector('.badge.bg-primary');
          if (unreadBadge) {
            let count = parseInt(unreadBadge.textContent);
            if (count > 0) {
              unreadBadge.textContent = (count - 1) + ' Unread';
              unreadBadge.style.animation = 'none';
              setTimeout(() => {
                unreadBadge.style.animation = 'bounce 0.5s ease';
              }, 10);
            }
          }
        }
      });
    });

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
      @keyframes ripple {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
      @keyframes bounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
      }
    `;
    document.head.appendChild(style);

    // Auto-update progress bars (simulated)
    setInterval(() => {
      const progressBars = document.querySelectorAll('.progress-fill');
      progressBars.forEach(bar => {
        let currentWidth = parseInt(bar.style.width);
        if (currentWidth < 95) {
          let newWidth = currentWidth + Math.random() * 2;
          if (newWidth > 95) newWidth = 95;
          bar.style.width = newWidth + '%';
        }
      });
    }, 3000);

    // Expose toggleTask globally
    window.toggleTask = toggleTask;
  });
</script>

</body>
</html>