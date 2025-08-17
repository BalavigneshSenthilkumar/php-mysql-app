<?php
$servername = "db";
$username = "appuser";
$password = "app123";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!<br>";
$result = $conn->query("SELECT 'Hello from MySQL' AS msg");
$row = $result->fetch_assoc();
echo $row['msg'];
?>

