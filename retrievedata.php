<?php
include('db.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Message: " . $row["message"] . "<br>";
        echo "-------------------------<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
