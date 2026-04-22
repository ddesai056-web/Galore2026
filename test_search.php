<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=galore2026', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Test the corrected search query
    $searchTerm = "cricket";
    $searchPattern = "%{$searchTerm}%";
    
    // Test event_results search
    echo "=== Testing Event Results Search ===" . PHP_EOL;
    $stmt = $pdo->prepare("
        SELECT 
            'result' as source,
            event_name as title,
            CONCAT('Team: ', team_name, ' | School: ', school, ' | Rank: ', ranks) as content,
            CONCAT('results.php?result=', id) as link,
            ranks as extra_info
        FROM event_results 
        WHERE (event_name LIKE :search OR team_name LIKE :search OR school LIKE :search)
        AND status = 'Active'
    ");
    $stmt->execute(['search' => $searchPattern]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "Found " . count($results) . " results in event_results" . PHP_EOL;
    foreach($results as $result) {
        echo "- " . $result['title'] . PHP_EOL;
    }
    
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
?>