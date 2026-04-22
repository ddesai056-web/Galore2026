<?php
// navbar.php - Complete single file with search and participant view functionality
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Database connection
$host = 'localhost';
$dbname = 'galore2026';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
}

// ===== PARTICIPANT VIEW HANDLER - ADD THIS AT THE TOP =====
// Check if view_participant parameter exists
if (isset($_GET['view_participant']) && !empty($_GET['view_participant'])) {
    $participant_id = $_GET['view_participant'];
    
    // Fetch participant details
    $stmt = $pdo->prepare("SELECT * FROM event_register WHERE id = ? AND status = 'active'");
    $stmt->execute([$participant_id]);
    $participant = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($participant) {
        // Display participant details page
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Participant Details - Galore 2026</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            <style>
                body {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    font-family: 'Segoe UI', Arial, sans-serif;
                }
                .participant-card {
                    margin-top: 120px;
                    margin-bottom: 50px;
                    border-radius: 20px;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
                    overflow: hidden;
                }
                .card-header-custom {
                    background: linear-gradient(135deg, #dc3545, #7a1c25);
                    color: white;
                    padding: 25px;
                    text-align: center;
                }
                .info-row {
                    padding: 15px;
                    border-bottom: 1px solid #eee;
                    transition: all 0.3s ease;
                }
                .info-row:hover {
                    background-color: #f8f9fa;
                    transform: translateX(5px);
                }
                .info-label {
                    font-weight: 700;
                    color: #dc3545;
                }
                .event-badge {
                    display: inline-block;
                    padding: 8px 15px;
                    margin: 5px;
                    border-radius: 20px;
                    background: linear-gradient(135deg, #dc3545, #ff6b6b);
                    color: white;
                    font-size: 0.9rem;
                }
                .btn-back {
                    background: linear-gradient(135deg, #667eea, #764ba2);
                    border: none;
                    padding: 10px 30px;
                    border-radius: 30px;
                    color: white;
                    font-weight: 600;
                    transition: all 0.3s ease;
                }
                .btn-back:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    color: white;
                }
            </style>
        </head>
        <body>
            <?php include 'navbar.php'; ?>
            <div class="container">
                <div class="card participant-card">
                    <div class="card-header-custom">
                        <h2><i class="bi bi-person-badge"></i> Participant Details</h2>
                        <p class="mb-0">Registration ID: #<?php echo str_pad($participant['id'], 5, '0', STR_PAD_LEFT); ?></p>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-person"></i> Full Name:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['full_name']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-qr-code"></i> Enrollment No:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['enrollment_no']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-envelope"></i> Email:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['email']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-phone"></i> Phone:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['phone']); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-book"></i> Branch:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['branch']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-calendar"></i> Semester:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['semester']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-building"></i> School:</span>
                                    <span class="float-end"><?php echo htmlspecialchars($participant['school']); ?></span>
                                </div>
                                <div class="info-row">
                                    <span class="info-label"><i class="bi bi-calendar-date"></i> Registration Date:</span>
                                    <span class="float-end"><?php echo date('d-m-Y h:i A', strtotime($participant['registration_date'])); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4" style="background: #f8f9fa;">
                            <h5><i class="bi bi-trophy"></i> Registered Events:</h5>
                            <div class="mt-3">
                                <?php if ($participant['Sports_Outdoor']): ?>
                                    <span class="event-badge">
                                        <i class="bi bi-tree"></i> <?php echo htmlspecialchars($participant['Sports_Outdoor']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if ($participant['Sports_Indoor']): ?>
                                    <span class="event-badge">
                                        <i class="bi bi-house"></i> <?php echo htmlspecialchars($participant['Sports_Indoor']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if ($participant['cultur']): ?>
                                    <span class="event-badge">
                                        <i class="bi bi-mic"></i> <?php echo htmlspecialchars($participant['cultur']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if (!$participant['Sports_Outdoor'] && !$participant['Sports_Indoor'] && !$participant['cultur']): ?>
                                    <p class="text-muted"><i class="bi bi-info-circle"></i> No events registered yet.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" style="background: white;">
                        <a href="javascript:history.back()" class="btn btn-back">
                            <i class="bi bi-arrow-left"></i> Go Back
                        </a>
                        <a href="home.php" class="btn btn-outline-danger btn-back ms-2">
                            <i class="bi bi-house"></i> Home
                        </a>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
        exit; // Stop execution after showing participant details
    } else {
        // Participant not found, redirect to home
        header('Location: home.php');
        exit;
    }
}

// ===== SEARCH HANDLER =====
// Handle search query with enhanced search including participants
$searchResults = [];
$searchTerm = '';
$searchError = '';
$searchSuggestions = [];

if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $searchTerm = trim($_GET['search']);
    
    // Validate search term
    if (strlen($searchTerm) < 2) {
        $searchError = "Search term must be at least 2 characters long";
        $searchSuggestions = [
            "Try searching for event names (Cricket, Football, Dance)",
            "Search for participant names",
            "Use enrollment numbers",
            "Search for school names"
        ];
    } elseif (strlen($searchTerm) > 50) {
        $searchError = "Search term is too long (maximum 50 characters)";
    } else {
        $searchPattern = "%{$searchTerm}%";
        
        try {
            // Check if tables exist
            $tablesExist = true;
            $requiredTables = ['outdoor_event', 'indoor_event', 'cultural_event', 'event_register'];
            
            foreach($requiredTables as $table) {
                $check = $pdo->query("SHOW TABLES LIKE '$table'");
                if($check->rowCount() == 0) {
                    $tablesExist = false;
                    $searchError = "Required table '$table' does not exist in database";
                    break;
                }
            }
        
        if($tablesExist) {
            // 1. Search in outdoor events
            $stmt = $pdo->prepare("
                SELECT 
                    'outdoor' as source,
                    event_name as title,
                    description as content,
                    CONCAT('sports-outdoor.php?event=', id) as link,
                    NULL as extra_info,
                    NULL as participant_name,
                    NULL as enrollment_no
                FROM outdoor_event 
                WHERE (event_name LIKE :search OR description LIKE :search)
                AND status = 'Active'
            ");
            $stmt->execute(['search' => $searchPattern]);
            $outdoorResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // 2. Search in indoor events
            $stmt = $pdo->prepare("
                SELECT 
                    'indoor' as source,
                    event_name as title,
                    description as content,
                    CONCAT('sports-indoor.php?event=', id) as link,
                    NULL as extra_info,
                    NULL as participant_name,
                    NULL as enrollment_no
                FROM indoor_event 
                WHERE (event_name LIKE :search OR description LIKE :search)
                AND status = 'Active'
            ");
            $stmt->execute(['search' => $searchPattern]);
            $indoorResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // 3. Search in cultural events
            $stmt = $pdo->prepare("
                SELECT 
                    'cultural' as source,
                    event_name as title,
                    description as content,
                    CONCAT('cultural.php?event=', id) as link,
                    NULL as extra_info,
                    NULL as participant_name,
                    NULL as enrollment_no
                FROM cultural_event 
                WHERE (event_name LIKE :search OR description LIKE :search)
                AND status = 'Active'
            ");
            $stmt->execute(['search' => $searchPattern]);
            $culturalResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // 4. Search in event results (if table exists)
            $resultResults = [];
            $checkResults = $pdo->query("SHOW TABLES LIKE 'event_results'");
            if($checkResults->rowCount() > 0) {
                $stmt = $pdo->prepare("
                    SELECT 
                        'result' as source,
                        event_name as title,
                        CONCAT('Team: ', team_name, ' | School: ', school, ' | Rank: ', ranks) as content,
                        CONCAT('results.php?result=', id) as link,
                        ranks as extra_info,
                        NULL as participant_name,
                        NULL as enrollment_no
                    FROM event_results 
                    WHERE (event_name LIKE :search OR team_name LIKE :search OR school LIKE :search)
                    AND status = 'Active'
                ");
                $stmt->execute(['search' => $searchPattern]);
                $resultResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
            // 5. Search in event_register (participants) - enhanced search
            $stmt = $pdo->prepare("
                SELECT 
                    'participant' as source,
                    full_name as title,
                    CONCAT(
                        '📚 Enrollment: ', enrollment_no, 
                        ' | 🏫 School: ', COALESCE(school, 'N/A'),
                        ' | 📖 Branch: ', COALESCE(branch, 'N/A'),
                        ' | 📧 Email: ', COALESCE(email, 'N/A'),
                        ' | 📱 Phone: ', COALESCE(phone, 'N/A')
                    ) as content,
                    CONCAT('?view_participant=', id) as link,
                    NULL as extra_info,
                    full_name as participant_name,
                    enrollment_no as enrollment_no
                FROM event_register 
                WHERE (LOWER(full_name) LIKE LOWER(:search) 
                    OR enrollment_no LIKE :search 
                    OR LOWER(enrollment_no) LIKE LOWER(:search)
                    OR LOWER(school) LIKE LOWER(:search) 
                    OR LOWER(branch) LIKE LOWER(:search)
                    OR LOWER(email) LIKE LOWER(:search)
                    OR phone LIKE :search)
                AND status = 'active'
                GROUP BY id
                LIMIT 20
            ");
            $stmt->execute(['search' => $searchPattern]);
            $participantResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // 6. Search for participants by their registered events (improved search)
            $stmt = $pdo->prepare("
                SELECT 
                    'participant_event' as source,
                    CONCAT(full_name, ' - ', 
                        CASE 
                            WHEN Sports_Outdoor IS NOT NULL AND Sports_Outdoor != '' AND LOWER(Sports_Outdoor) LIKE LOWER(:search) THEN Sports_Outdoor
                            WHEN Sports_Indoor IS NOT NULL AND Sports_Indoor != '' AND LOWER(Sports_Indoor) LIKE LOWER(:search) THEN Sports_Indoor
                            WHEN cultur IS NOT NULL AND cultur != '' AND LOWER(cultur) LIKE LOWER(:search) THEN cultur
                            ELSE CONCAT('Event: ', COALESCE(Sports_Outdoor, Sports_Indoor, cultur))
                        END
                    ) as title,
                    CONCAT(
                        '👤 Name: ', full_name,
                        ' | 🎓 Enrollment: ', enrollment_no,
                        ' | 🏫 School: ', COALESCE(school, 'N/A'),
                        ' | 📖 Branch: ', COALESCE(branch, 'N/A'),
                        ' | 📅 Registered on: ', DATE_FORMAT(registration_date, '%d-%m-%Y')
                    ) as content,
                    CONCAT('?view_participant=', id) as link,
                    NULL as extra_info,
                    full_name as participant_name,
                    enrollment_no as enrollment_no
                FROM event_register 
                WHERE (LOWER(Sports_Outdoor) LIKE LOWER(:search) 
                    OR LOWER(Sports_Indoor) LIKE LOWER(:search) 
                    OR LOWER(cultur) LIKE LOWER(:search))
                AND status = 'active'
                AND (Sports_Outdoor IS NOT NULL OR Sports_Indoor IS NOT NULL OR cultur IS NOT NULL)
                LIMIT 20
            ");
            $stmt->execute(['search' => $searchPattern]);
            $participantEventResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Combine all results
            $searchResults = array_merge(
                $outdoorResults, 
                $indoorResults, 
                $culturalResults, 
                $resultResults,
                $participantResults,
                $participantEventResults
            );
            
            // Sort results by relevance (improved algorithm)
            usort($searchResults, function($a, $b) use ($searchTerm) {
                $a_relevance = 0;
                $b_relevance = 0;
                $searchLower = strtolower($searchTerm);
                $aTitleLower = strtolower($a['title']);
                $bTitleLower = strtolower($b['title']);
                
                // Exact matches get highest priority
                if ($aTitleLower === $searchLower) $a_relevance += 100;
                if ($bTitleLower === $searchLower) $b_relevance += 100;
                
                // Starts with search term
                if (strpos($aTitleLower, $searchLower) === 0) $a_relevance += 50;
                if (strpos($bTitleLower, $searchLower) === 0) $b_relevance += 50;
                
                // Contains search term
                if (strpos($aTitleLower, $searchLower) !== false) $a_relevance += 20;
                if (strpos($bTitleLower, $searchLower) !== false) $b_relevance += 20;
                
                // Participant-specific relevance
                if (isset($a['participant_name']) && strpos(strtolower($a['participant_name']), $searchLower) !== false) $a_relevance += 30;
                if (isset($b['participant_name']) && strpos(strtolower($b['participant_name']), $searchLower) !== false) $b_relevance += 30;
                
                // Exact enrollment match
                if (isset($a['enrollment_no']) && strcasecmp($a['enrollment_no'], $searchTerm) === 0) $a_relevance += 40;
                if (isset($b['enrollment_no']) && strcasecmp($b['enrollment_no'], $searchTerm) === 0) $b_relevance += 40;
                
                // Content relevance
                if (isset($a['content']) && strpos(strtolower($a['content']), $searchLower) !== false) $a_relevance += 10;
                if (isset($b['content']) && strpos(strtolower($b['content']), $searchLower) !== false) $b_relevance += 10;
                
                // Source priority (participants and results more relevant than events)
                $sourcePriority = ['participant' => 15, 'participant_event' => 12, 'result' => 10, 'outdoor' => 5, 'indoor' => 5, 'cultural' => 5];
                $a_relevance += $sourcePriority[$a['source']] ?? 0;
                $b_relevance += $sourcePriority[$b['source']] ?? 0;
                
                return $b_relevance - $a_relevance;
            });
            
            // Remove duplicates with better logic
            $uniqueResults = [];
            $seenKeys = [];
            foreach($searchResults as $result) {
                // Create a more comprehensive key to avoid duplicates
                $key = strtolower($result['title']) . '|' . $result['link'] . '|' . $result['source'];
                if (!isset($seenKeys[$key])) {
                    $seenKeys[$key] = true;
                    $uniqueResults[] = $result;
                }
            }
            $searchResults = array_values($uniqueResults);
        }
        
    } catch(PDOException $e) {
        error_log("Search query failed: " . $e->getMessage());
        $searchError = "Search failed: " . $e->getMessage();
        $searchResults = [];
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Galore - Event Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", Arial, sans-serif;
    }

    .hero {
      margin-top: 10%;
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

    @media (max-width: 768px) {
      .hero h1 { font-size: 2.2rem; }
      .hero p { font-size: 1rem; }
    }

    @media (max-width: 480px) {
      .hero h1 { font-size: 1.8rem; }
      .hero p { font-size: 0.9rem; }
    }

    .download-btn {
      display: inline-block;
      padding: 12px 32px;
      background: linear-gradient(135deg, #ff4d5a, #dc3545);
      color: #fff;
      text-decoration: none;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .download-btn:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(220, 53, 69, 0.45);
      color: #fff;
    }

    @media (max-width: 768px) {
      .download-btn { padding: 10px 25px; font-size: 14px; }
    }

    .header-box {
      background: #ffffff;
      border-radius: 0 0 20px 20px;
      padding: 8px 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .header-logo {
      max-height: 80px;
      width: auto;
    }

    @media (max-width: 768px) {
      .header-logo { max-height: 50px; }
    }

    @media (max-width: 480px) {
      .header-logo { max-height: 40px; }
    }

    .navbar {
      background: #ffffff;
      border-top: 3px solid #dc3545;
      border-bottom: 1px solid #eee;
      padding: 10px 0;
    }

    .main-menu .nav-item {
      margin: 0 14px;
    }

    .main-menu .nav-link {
      font-size: 17px;
      font-weight: 600;
      color: #000;
      position: relative;
      transition: color 0.3s ease;
    }

    .main-menu .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      background: #dc3545;
      left: 0;
      bottom: -5px;
      transition: width 0.3s ease;
    }

    .main-menu .nav-link:hover {
      color: #dc3545;
    }

    .main-menu .nav-link:hover::after {
      width: 100%;
    }

    @media (max-width: 991px) {
      .main-menu .nav-item { margin: 5px 0; }
      .main-menu .nav-link { font-size: 16px; padding: 8px 0; }
    }

    .dropdown-menu {
      border-radius: 12px;
      border: none;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
      margin-top: 8px;
      animation: dropdownFade 0.3s ease;
    }

    .dropdown-item {
      padding: 10px 18px;
      font-weight: 500;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .dropdown-item:hover,
    .dropdown-item:focus,
    .dropdown-item:active {
      background-color: #dc3545 !important;
      color: #fff !important;
    }

    @media (max-width: 991px) {
      .dropdown-menu {
        position: static !important;
        transform: none !important;
        box-shadow: none;
        border: 1px solid #eee;
        margin: 5px 0;
        padding: 0;
      }
      .dropdown-item { padding: 8px 20px; }
    }

    .dropdown-toggle::after {
      display: none !important;
    }

    .navbar .nav-link .bi {
      color: red;
      margin-left: 4px;
      font-size: 0.8em;
    }

    @media (min-width: 992px) {
      .navbar .dropdown:hover > .dropdown-menu {
        display: block;
      }
    }

    @keyframes dropdownFade {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .profile-dropdown {
      position: relative;
      display: inline-block;
    }

    .profile-icon {
      font-size: 32px;
      color: #dc3545;
      transition: 0.3s ease;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .profile-icon:hover {
      color: darkred;
      transform: scale(1.05);
    }

    .profile-icon .bi-chevron-down {
      font-size: 16px;
      transition: transform 0.3s ease;
    }

    .profile-dropdown:hover .profile-icon .bi-chevron-down {
      transform: rotate(180deg);
    }

    .profile-dropdown-menu {
      position: absolute;
      top: 100%;
      right: 0;
      background: #fff;
      min-width: 280px;
      border-radius: 12px;
      border: none;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      margin-top: 12px;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 1000;
    }

    .profile-dropdown:hover .profile-dropdown-menu {
      opacity: 1;
      visibility: visible;
      margin-top: 8px;
    }

    .profile-dropdown-menu::before {
      content: '';
      position: absolute;
      top: -8px;
      right: 15px;
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom: 8px solid #fff;
    }

    .profile-header {
      padding: 15px 20px;
      border-bottom: 1px solid #eee;
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .profile-header .profile-name {
      font-weight: 700;
      color: #333;
      font-size: 15px;
      line-height: 1.4;
      display: block;
      width: 100%;
    }

    .profile-header .profile-email {
      font-size: 12px;
      color: #666;
      word-break: break-all;
      line-height: 1.4;
      display: block;
      width: 100%;
    }

    .profile-menu-items {
      padding: 8px 0;
    }

    .profile-menu-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 20px;
      color: #333;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 14px;
      font-weight: 500;
    }

    .profile-menu-item i {
      width: 20px;
      font-size: 16px;
      color: #dc3545;
    }

    .profile-menu-item:hover {
      background-color: #f8f9fa;
      color: #dc3545;
      padding-left: 25px;
    }

    .profile-menu-item:hover i {
      color: #dc3545;
    }

    .profile-divider {
      height: 1px;
      background-color: #eee;
      margin: 5px 0;
    }

    .logout-item {
      color: #dc3545;
    }

    .logout-item i {
      color: #dc3545;
    }

    .logout-item:hover {
      background-color: #dc3545;
      color: #fff;
    }

    .logout-item:hover i {
      color: #fff;
    }

    @media (max-width: 991px) {
      .profile-dropdown { width: 100%; }
      .profile-dropdown-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        box-shadow: none;
        margin-top: 10px;
        width: 100%;
        display: inline-block;
      }
      .profile-dropdown.active .profile-dropdown-menu { display: block; }
      .profile-dropdown-menu::before { display: none; }
      .profile-icon .bi-chevron-down { display: inline-block; }
    }

    @media (max-width: 768px) {
      .profile-icon { font-size: 28px; }
      .profile-icon .bi-chevron-down { font-size: 14px; }
    }

    .search-form {
      position: relative;
    }
    
    .search-form input {
      width: 250px;
      border-radius: 20px;
      border: 1px solid #ccc;
      padding: 6px 12px;
      transition: all 0.3s ease;
    }

    .search-form input:focus {
      border-color: #dc3545;
      box-shadow: 0 0 6px #dc3545;
      outline: none;
      width: 300px;
    }

    .search-form button {
      border-radius: 20px;
      padding: 6px 18px;
    }

    .search-results-container {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: 9999;
      display: none;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .search-results-modal {
      background: white;
      border-radius: 20px;
      max-width: 800px;
      width: 100%;
      max-height: 80vh;
      overflow-y: auto;
      position: relative;
      animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .search-results-header {
      background: linear-gradient(135deg, #dc3545, #7a1c25);
      color: white;
      padding: 20px;
      border-radius: 20px 20px 0 0;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .search-results-header h3 {
      margin: 0;
      font-size: 1.5rem;
    }

    .close-results {
      position: absolute;
      right: 20px;
      top: 20px;
      background: none;
      border: none;
      color: white;
      font-size: 28px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .close-results:hover {
      transform: scale(1.1);
    }

    .search-results-body {
      padding: 20px;
    }

    .result-item {
      padding: 15px;
      border-bottom: 1px solid #eee;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .result-item:hover {
      background-color: #f8f9fa;
      transform: translateX(5px);
    }

    .result-title {
      font-weight: 700;
      color: #dc3545;
      margin-bottom: 5px;
      font-size: 1.1rem;
    }

    .result-content {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 5px;
    }

    .result-source {
      font-size: 0.8rem;
      color: #999;
      display: inline-block;
      padding: 2px 8px;
      background: #f0f0f0;
      border-radius: 12px;
    }

    .result-medal {
      display: inline-block;
      margin-left: 10px;
      font-size: 0.8rem;
    }

    .no-results {
      text-align: center;
      padding: 40px;
      color: #999;
    }

    .no-results i {
      font-size: 48px;
      margin-bottom: 15px;
    }

    .result-source-badge {
      display: inline-block;
      font-weight: 500;
    }

    .result-enrollment {
      font-family: monospace;
    }

    @media (max-width: 991px) {
      .search-form {
        width: 100%;
        margin-top: 10px;
      }
      .search-form input {
        width: 100%;
      }
      .search-form input:focus {
        width: 100%;
      }
      .search-form button {
        width: 100%;
        margin-top: 5px;
      }
      .search-results-modal {
        margin: 10px;
        max-height: 90vh;
      }
    }

    .navbar-actions {
      margin-left: auto;
      gap: 15px;
      align-items: center;
    }

    @media (max-width: 991px) {
      .navbar-actions {
        flex-direction: column;
        margin-top: 15px;
        width: 100%;
      }
    }

    @media (max-width: 991px) {
      .hero { margin-top: 42%; padding: 100px 10px 60px; }
    }

    @media (max-width: 768px) {
      .hero { margin-top: 45%; padding: 80px 10px 50px; }
    }

    @media (max-width: 480px) {
      .hero { margin-top: 55%; padding: 60px 10px 40px; }
    }

    .custom-swal-popup {
      border-radius: 20px !important;
      border-top: 6px solid #dc3545 !important;
      width: auto !important;
      max-width: 90vw !important;
      margin: 0 auto !important;
    }

    .custom-swal-title {
      color: #dc3545 !important;
      font-weight: 700 !important;
      font-size: clamp(1.2rem, 4vw, 1.8rem) !important;
    }

    .custom-swal-confirm-btn {
      background: linear-gradient(135deg, #ff4d5a, #dc3545) !important;
      border: none !important;
      border-radius: 30px !important;
      padding: 10px 30px !important;
      font-weight: 600 !important;
      box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3) !important;
      font-size: clamp(0.85rem, 3vw, 1rem) !important;
      margin: 5px !important;
    }

    .custom-swal-confirm-btn:hover {
      transform: translateY(-2px) !important;
      box-shadow: 0 8px 20px rgba(220, 53, 69, 0.4) !important;
    }

    .custom-swal-cancel-btn {
      background: #6c757d !important;
      border: none !important;
      border-radius: 30px !important;
      padding: 10px 30px !important;
      font-weight: 600 !important;
      font-size: clamp(0.85rem, 3vw, 1rem) !important;
      margin: 5px !important;
    }

    .custom-swal-cancel-btn:hover {
      background: #5a6268 !important;
      transform: translateY(-2px) !important;
    }

    .swal2-actions {
      flex-wrap: wrap !important;
      gap: 5px !important;
    }

    .swal2-icon {
      transform: scale(clamp(0.8, 2vw, 1)) !important;
      margin: 10px auto !important;
    }

    .swal2-html-container {
      font-size: clamp(0.9rem, 3vw, 1.1rem) !important;
      padding: 10px !important;
      word-break: break-word !important;
    }

    @media (max-width: 480px) {
      .custom-swal-popup {
        border-radius: 15px !important;
        padding: 15px !important;
      }
      .custom-swal-confirm-btn,
      .custom-swal-cancel-btn {
        width: 100% !important;
        margin: 5px 0 !important;
      }
      .swal2-actions {
        flex-direction: column !important;
        width: 100% !important;
      }
    }
  </style>
</head>

<body>

  <div class="fixed-top">
    <div class="container-fluid header-box">
      <div class="row text-center align-items-center gx-1">
        <div class="col-6 col-md-3">
          <img src="Website/galore_half1.jpg" class="img-fluid header-logo" alt="Logo">
        </div>
        <div class="col-6 col-md-3">
          <img src="Website/rku_logo.png" class="img-fluid header-logo" alt="RKU Logo">
        </div>
        <div class="col-6 col-md-3">
          <img src="Website/galore_logo.png" class="img-fluid header-logo" alt="Galore Logo">
        </div>
        <div class="col-6 col-md-3">
          <img src="Website/galore_half2.png" class="img-fluid header-logo" alt="Galore Logo">
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container-fluid">

        <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">

          <ul class="navbar-nav align-items-center main-menu mx-auto">
            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                Events <i class="bi bi-caret-down-fill"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sports-outdoor.php">Sports-Outdoor</a></li>
                <li><a class="dropdown-item" href="sports-indoor.php">Sports-Indoor</a></li>
                <li><a class="dropdown-item" href="cultural.php">Cultural</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="schedual.php">Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="rules.php">Rules</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                Registration <i class="bi bi-caret-down-fill"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="registration.php">Register</a></li>
                <li><a class="dropdown-item" href="event_registration.php">Event Registration</a></li>
              </ul>
            </li>
          </ul>

          <div class="d-flex align-items-center navbar-actions">
            <div class="profile-dropdown" id="profileDropdown">
              <div class="profile-icon">
                <i class="bi bi-person-circle"></i>
                <i class="bi bi-chevron-down"></i>
              </div>
              <div class="profile-dropdown-menu">
                <div class="profile-header">
                  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <div class="profile-name">
                      <?php echo htmlspecialchars($_SESSION['full_name']); ?>
                    </div>
                    <div class="profile-email">
                      <?php echo htmlspecialchars($_SESSION['email']); ?>
                    </div>
                  <?php else: ?>
                    <div class="profile-name">Guest User</div>
                    <div class="profile-email">Please login to access features</div>
                  <?php endif; ?>
                </div>
                <div class="profile-menu-items">
                  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <a href="profile.php" class="profile-menu-item">
                      <i class="bi bi-person"></i>
                      <span>My Profile</span>
                    </a>
                    <a href="change_password.php" class="profile-menu-item">
                      <i class="bi bi-key"></i>
                      <span>Change Password</span>
                    </a>
                    <div class="profile-divider"></div>
                    <a href="#" onclick="confirmLogout(event);" class="profile-menu-item logout-item">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Logout</span>
                    </a>
                  <?php else: ?>
                    <a href="login.php" class="profile-menu-item">
                      <i class="bi bi-box-arrow-in-right"></i>
                      <span>Login</span>
                    </a>
                    <a href="registration.php" class="profile-menu-item">
                      <i class="bi bi-person-plus"></i>
                      <span>Register</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <form class="d-flex search-form" id="searchForm" method="GET" action="">
              <input class="form-control me-2" type="search" name="search" id="searchInput" placeholder="Search events, participants..." value="<?php echo htmlspecialchars($searchTerm); ?>" minlength="2" maxlength="50">
              <button class="btn btn-danger" type="submit" id="searchBtn">
                <i class="bi bi-search"></i> Search
              </button>
            </form>
          </div>

        </div>
      </div>
    </nav>
  </div>

  <div class="search-results-container" id="searchResultsContainer">
    <div class="search-results-modal">
      <div class="search-results-header">
        <h3>Search Results: "<?php echo htmlspecialchars($searchTerm); ?>"</h3>
        <button class="close-results" onclick="closeSearchResults()">&times;</button>
      </div>
      <div class="search-results-body">
        <?php if (!empty($searchResults)): ?>
          <?php foreach($searchResults as $result): ?>
            <div class="result-item" onclick="window.location.href='<?php echo $result['link']; ?>'">
              <div class="result-title">
                <?php 
                switch($result['source']) {
                  case 'outdoor': echo '🏃 '; break;
                  case 'indoor': echo '🎯 '; break;
                  case 'cultural': echo '🎭 '; break;
                  case 'result': echo '🏆 '; break;
                  case 'participant': echo '👤 '; break;
                  case 'participant_event': echo '📋 '; break;
                }
                echo htmlspecialchars($result['title']); 
                ?>
                <?php if (isset($result['extra_info']) && !empty($result['extra_info'])): ?>
                  <?php 
                    $rankValue = strtolower($result['extra_info']);
                    if (strpos($rankValue, 'gold') !== false || strpos($rankValue, '1') !== false): ?>
                    <span class="result-medal">🥇</span>
                  <?php elseif (strpos($rankValue, 'silver') !== false || strpos($rankValue, '2') !== false): ?>
                    <span class="result-medal">🥈</span>
                  <?php elseif (strpos($rankValue, 'bronze') !== false || strpos($rankValue, '3') !== false): ?>
                    <span class="result-medal">🥉</span>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <div class="result-content">
                <?php echo htmlspecialchars(substr($result['content'], 0, 200)) . (strlen($result['content']) > 200 ? '...' : ''); ?>
              </div>
              <div class="result-source">
                <?php 
                $sourceLabel = '';
                $sourceColor = '';
                switch($result['source']) {
                  case 'outdoor':
                    $sourceLabel = '🏃 Outdoor Event';
                    $sourceColor = '#28a745';
                    break;
                  case 'indoor':
                    $sourceLabel = '🎯 Indoor Event';
                    $sourceColor = '#17a2b8';
                    break;
                  case 'cultural':
                    $sourceLabel = '🎭 Cultural Event';
                    $sourceColor = '#dc3545';
                    break;
                  case 'result':
                    $sourceLabel = '🏆 Event Result';
                    $sourceColor = '#ffc107';
                    break;
                  case 'participant':
                    $sourceLabel = '👤 Participant';
                    $sourceColor = '#6f42c1';
                    break;
                  case 'participant_event':
                    $sourceLabel = '📋 Event Registration';
                    $sourceColor = '#fd7e14';
                    break;
                }
                ?>
                <span class="result-source-badge" style="background: <?php echo $sourceColor; ?>20; color: <?php echo $sourceColor; ?>; padding: 4px 10px; border-radius: 12px; font-size: 0.75rem;">
                  <?php echo $sourceLabel; ?>
                </span>
                <?php if (isset($result['enrollment_no']) && $result['enrollment_no']): ?>
                  <span class="result-enrollment" style="margin-left: 8px; font-size: 0.7rem; color: #666;">
                    🆔 <?php echo htmlspecialchars($result['enrollment_no']); ?>
                  </span>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
          
          <div style="padding: 10px 15px; background: #f8f9fa; border-radius: 8px; margin-top: 15px; text-align: center; font-size: 0.85rem; color: #666;">
            <i class="bi bi-info-circle"></i> Found <?php echo count($searchResults); ?> result(s)
          </div>
          
        <?php else: ?>
          <div class="no-results">
            <i class="bi bi-search"></i>
            <h4>No results found</h4>
            <p>We couldn't find any matches for "<strong><?php echo htmlspecialchars($searchTerm); ?></strong>"</p>
            <?php if (isset($searchError) && !empty($searchError)): ?>
              <div class="alert alert-warning" style="font-size: 0.85rem;">
                <i class="bi bi-exclamation-triangle"></i> <?php echo htmlspecialchars($searchError); ?>
              </div>
            <?php endif; ?>
            <p>Try searching with:</p>
            <div class="row text-center">
              <div class="col-md-6">
                <ul style="text-align: left; display: inline-block; margin-bottom: 15px;">
                  <li><strong>🏃 Event names:</strong> Cricket, Football, Basketball, Volleyball</li>
                  <li><strong>🎯 Indoor events:</strong> Chess, Carrom, Table Tennis</li>
                  <li><strong>🎭 Cultural events:</strong> Dance, Singing, Drama, Music</li>
                  <li><strong>🏆 Results:</strong> Winner names, Team names</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul style="text-align: left; display: inline-block;">
                  <li><strong>👤 Participant names:</strong> Full names of registered students</li>
                  <li><strong>🆔 Enrollment numbers:</strong> Complete or partial enrollment IDs</li>
                  <li><strong>🏫 Schools:</strong> RK University, Other colleges</li>
                  <li><strong>📖 Branches:</strong> Computer, Mechanical, Civil, etc.</li>
                </ul>
              </div>
            </div>
            <div class="mt-3">
              <a href="sports-outdoor.php" class="btn btn-outline-danger btn-sm m-1">
                <i class="bi bi-tree"></i> View Outdoor Events
              </a>
              <a href="sports-indoor.php" class="btn btn-outline-danger btn-sm m-1">
                <i class="bi bi-house"></i> View Indoor Events
              </a>
              <a href="cultural.php" class="btn btn-outline-danger btn-sm m-1">
                <i class="bi bi-mic"></i> View Cultural Events
              </a>
              <a href="registration.php" class="btn btn-outline-success btn-sm m-1">
                <i class="bi bi-person-plus"></i> Register Now
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <script>
    <?php if (!empty($searchTerm)): ?>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('searchResultsContainer').style.display = 'flex';
    });
    <?php endif; ?>
    
    function closeSearchResults() {
      document.getElementById('searchResultsContainer').style.display = 'none';
      const url = new URL(window.location.href);
      url.searchParams.delete('search');
      window.history.replaceState({}, document.title, url.toString());
    }
    
    document.addEventListener('click', function(e) {
      const container = document.getElementById('searchResultsContainer');
      if (e.target === container) {
        closeSearchResults();
      }
    });
    
    document.addEventListener('DOMContentLoaded', function() {
      // Search form validation
      const searchForm = document.getElementById('searchForm');
      const searchInput = document.getElementById('searchInput');
      const searchBtn = document.getElementById('searchBtn');
      
      searchForm.addEventListener('submit', function(e) {
        const searchTerm = searchInput.value.trim();
        
        if (searchTerm.length < 2) {
          e.preventDefault();
          Swal.fire({
            title: 'Search Too Short',
            text: 'Please enter at least 2 characters to search.',
            icon: 'warning',
            confirmButtonColor: '#dc3545',
            customClass: {
              popup: 'custom-swal-popup',
              title: 'custom-swal-title',
              confirmButton: 'custom-swal-confirm-btn'
            }
          });
          searchInput.focus();
          return false;
        }
        
        if (searchTerm.length > 50) {
          e.preventDefault();
          Swal.fire({
            title: 'Search Too Long',
            text: 'Please enter no more than 50 characters.',
            icon: 'warning',
            confirmButtonColor: '#dc3545',
            customClass: {
              popup: 'custom-swal-popup',
              title: 'custom-swal-title',
              confirmButton: 'custom-swal-confirm-btn'
            }
          });
          return false;
        }
        
        // Show loading state
        searchBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Searching...';
        searchBtn.disabled = true;
      });
      
      // Reset button state when input changes
      searchInput.addEventListener('input', function() {
        if (searchBtn.disabled) {
          searchBtn.innerHTML = '<i class="bi bi-search"></i> Search';
          searchBtn.disabled = false;
        }
      });
      
      const profileDropdown = document.getElementById('profileDropdown');
      const profileIcon = document.querySelector('.profile-icon');

      if (window.innerWidth <= 991) {
        profileIcon.addEventListener('click', function(e) {
          e.stopPropagation();
          profileDropdown.classList.toggle('active');
        });

        document.addEventListener('click', function(e) {
          if (!profileDropdown.contains(e.target)) {
            profileDropdown.classList.remove('active');
          }
        });
      }
    });

    function confirmLogout(event) {
      event.preventDefault();
      const isMobile = window.innerWidth <= 768;

      Swal.fire({
        title: 'Are you sure?',
        text: "You will be logged out of your account!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, logout',
        cancelButtonText: 'Cancel',
        background: '#fff',
        backdrop: `rgba(220,53,69,0.2)`,
        customClass: {
          popup: 'custom-swal-popup',
          title: 'custom-swal-title',
          confirmButton: 'custom-swal-confirm-btn',
          cancelButton: 'custom-swal-cancel-btn'
        },
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        },
        width: isMobile ? '90%' : 'auto',
        padding: isMobile ? '1rem' : '1.5rem',
        timer: isMobile ? 0 : undefined
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'logout.php';
        }
      });
    }

    $(document).ready(function() {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has('logout') && urlParams.get('logout') === 'success') {
        const isMobile = window.innerWidth <= 768;

        Swal.fire({
          icon: 'success',
          title: 'Logged Out Successfully!',
          text: 'You have been logged out of your account.',
          timer: isMobile ? 0 : 3000,
          showConfirmButton: true,
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'OK',
          customClass: {
            popup: 'custom-swal-popup',
            confirmButton: 'custom-swal-confirm-btn'
          },
          width: isMobile ? '90%' : 'auto',
          padding: isMobile ? '1rem' : '1.5rem'
        });

        const url = new URL(window.location.href);
        url.searchParams.delete('logout');
        window.history.replaceState({}, document.title, url.toString());
      }
    });

    let resizeTimer;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        const profileDropdown = document.getElementById('profileDropdown');
        if (window.innerWidth > 991) {
          profileDropdown.classList.remove('active');
        }
      }, 250);
    });
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</body>

</html>