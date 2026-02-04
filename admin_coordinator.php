<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Coordinator | RKU Galore</title>
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
                <h3>Add Coordinator</h3>
                <p>Upload details and profile picture of the coordinator</p>
            </div>

            <form action="process_event.php" method="POST" enctype="multipart/form-data">
               
                <div class="mb-4">
                    <label class="form-label">Coordinator Type</label>
                    <select name="coordinator_type" class="form-select" required>
                        <option value="" selected disabled>Select Type...</option>
                        <option value="student_coordinator">Student Coordinator</option>
                        <option value="faculty_coordinator">Faculty Coordinator</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Coordinator Name</label>
                    <input type="text" name="coordinator_name" class="form-control" placeholder="Enter full name" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Department</label>
                    <select name="department" class="form-select" required>
                        <option value="" selected disabled>Select Department...</option>
                        <option value="SOE">School of Engineering</option>
                        <option value="SOP">School of Physiotherapy</option>
                        <option value="SOM">School of Management</option>
                        <option value="SOS">School of Science</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Contact Number</label>
                    <input type="tel" name="contact_no" class="form-control" placeholder="e.g. 9876543210" pattern="[0-9]{10}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Coordinator Image</label>
                    <input type="file" name="coordinator_image" class="form-control" accept="image/*" required>
                    <div class="form-text">Upload a professional passport-sized photo.</div>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="bi bi-person-plus me-2"></i> Save Coordinator
                </button>
            </form>
        </div>
    </div>
</body>
</html>