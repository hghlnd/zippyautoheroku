<?php
$dsn = 'mysql:host=sql5.freesqldatabase.com;dbname=sql5770346';
$username = 'sql5770346';
$password = 'nGkspFcFhm';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>
