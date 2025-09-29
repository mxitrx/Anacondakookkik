<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12800483";
$pass = "yYHjNi1tv8";
$db   = "sql12800483";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
