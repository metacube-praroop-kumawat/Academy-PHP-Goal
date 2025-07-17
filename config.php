<?php
// config.php
$host = '127.0.0.1';
$port = 3306;
$user = 'root';
$pass = '';  // or 'root' if you've manually set it
$db   = 'php_site';

$conn = new mysqli($host, $user, $pass, $db, $port);

// Always show full error
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "Connected to DB!";
?>
