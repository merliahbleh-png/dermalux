<?php
$host = getenv('MYSQLHOST') ?: (getenv('DB_HOST') ?: "localhost");
$port = getenv('MYSQLPORT') ?: (getenv('DB_PORT') ?: "3306");
$user = getenv('MYSQLUSER') ?: (getenv('DB_USER') ?: "root");
$pass = getenv('MYSQLPASSWORD') ?: (getenv('DB_PASS') ?: "");
$db   = getenv('MYSQLDATABASE') ?: (getenv('DB_NAME') ?: "dermalux");

$conn = new mysqli($host, $user, $pass, $db, (int)$port);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
session_start();
?>