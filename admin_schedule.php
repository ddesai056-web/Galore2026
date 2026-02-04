<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Event | RKU Galore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php require 'admin_dashboard.php'?>

    <div class="main-content-wrapper">
        <div class="form-container">
            <div class="form-header">
                <h3>Event Schedule</h3>
                <p>Enter the specific schedule and location details</p>
            </div>

            <form action="process_event.php" method="POST" enctype="multipart/form-data">
                
                <div class="mb-4">
                    <label class="form-label">Event Name</label>
                    <input type="text" name="event_name" class="form-control" placeholder="e.g. Code-A-Thon 2026" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Duration (Days)</label>
                        <select name="event_days" class="form-select" required>
                            <option value="" selected disabled>Select Days...</option>
                            <option value="1">1 Day</option>
                            <option value="2">2 Days</option>
                            <option value="3">3 Days</option>
                            <option value="4">4 Days</option>
                            <option value="5">5 Days</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Time</label>
                        <input type="text" name="event_time" class="form-control" placeholder="e.g. 9:00 AM - 5:00 PM" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Event Location</label>
                    <input type="text" name="event_location" class="form-control" placeholder="e.g. Main Auditorium / Lab 102" required>
                </div>


                <button type="submit" class="btn-submit">
                    <i class="bi bi-calendar-plus me-2"></i> Save Event Details
                </button>
            </form>
        </div>
    </div>
</body>
</html>