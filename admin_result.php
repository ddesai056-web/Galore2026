<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Winner Rank | RKU Galore</title>
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
                <h3>Add Rankers</h3>
                <p>Enter the details of the rank holder and upload relevant images</p>
            </div>

            <form action="process_rank.php" method="POST" enctype="multipart/form-data">
               
                <div class="mb-4">
                    <label class="form-label">Event Name</label>
                    <select name="event_name" class="form-select" required>
                        <option value="" selected disabled>Select Event...</option>
                        <option value="tech_fest">Football</option>
                        <option value="cultural_night">Dance</option>
                        <option value="sports_meet">Rangoli</option>
                        <option value="coding_battle">Singing</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="student_name" class="form-control" placeholder="Enter student's full name" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Rank</label>
                    <select name="rank" class="form-select" required>
                        <option value="" selected disabled>Select Rank...</option>
                        <option value="1">1st Place (Winner)</option>
                        <option value="2">2nd Place (Runner Up)</option>
                        <option value="3">3rd Place</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Rank Image</label>
                    <input type="file" name="rank_image" class="form-control" accept="image/*" required>
                    <div class="form-text">Upload image of the trophy or certificate.</div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Event Image</label>
                    <input type="file" name="event_image" class="form-control" accept="image/*" required>
                    <div class="form-text">Upload a photo from the event ceremony.</div>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="bi bi-trophy me-2"></i> Save Rank Details
                </button>
            </form>
        </div>
    </div>
</body>
</html>
