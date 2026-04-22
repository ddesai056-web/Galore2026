<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=galore2026', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get column information for event_results table
    $stmt = $pdo->query("DESCRIBE event_results");
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "=== event_results table columns ===" . PHP_EOL;
    foreach($columns as $col) {
        echo $col['Field'] . " (" . $col['Type'] . ")" . PHP_EOL;
    }
    
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
?>