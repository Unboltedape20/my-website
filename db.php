<!-- db.php -->
<?php
$servername = "localhost";
$username = "your-username";
$password = "your-password";
$dbname = "your-database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
