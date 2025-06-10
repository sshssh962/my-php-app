<?php
$dsn = "mysql:host=" . getenv("DB_HOST") . ";dbname=" . getenv("DB_NAME");
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, getenv("DB_USER"), getenv("DB_PASSWORD"), $options);
    echo "Connected successfully with PDO!";
} catch (PDOException $e) {
    echo "Connection failed: " . htmlspecialchars($e->getMessage());
}
?>
