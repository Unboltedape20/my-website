<!-- db.php -->
<?php
$servername = "localhost";
$username = "Unboltedape20";
$password = "Mitcar2001@";
$dbname = "mithilesh_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
