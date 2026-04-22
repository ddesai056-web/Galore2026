<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=galore2026', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Database connection successful' . PHP_EOL;

    $tables = ['outdoor_event', 'indoor_event', 'cultural_event', 'event_register'];
    foreach($tables as $table) {
        $stmt = $pdo->query("SHOW TABLES LIKE '$table'");
        if($stmt->rowCount() > 0) {
            echo "Table $table exists" . PHP_EOL;
        } else {
            echo "Table $table does NOT exist" . PHP_EOL;
        }
    }
} catch(PDOException $e) {
    echo 'Database error: ' . $e->getMessage() . PHP_EOL;
}
?>