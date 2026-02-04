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
                <h3>Add New Event</h3>
                <p>Fill in the details to create a new campus event</p>
            </div>

            <form action="process_event.php" method="POST" enctype="multipart/form-data">
                
                <div class="mb-4">
                    <label class="form-label">Event Category</label>
                    <select name="event_category" class="form-select" required>
                        <option value="" selected disabled>Select Category...</option>
                        <option value="technical">Technical</option>
                        <option value="non-technical">Non-Technical</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Event Name</label>
                    <input type="text" name="event_name" class="form-control" placeholder="e.g. Tech Expo 2026" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Event Description</label>
                    <textarea name="event_desc" class="form-control" rows="3" placeholder="Briefly describe the event..."></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Event Image</label>
                    <input type="file" name="event_image" class="form-control" accept="image/*" required>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="bi bi-plus-lg me-2"></i> Create Event
                </button>
            </form>
        </div>
    </div>
</body>
</html>