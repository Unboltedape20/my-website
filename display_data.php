<?php
include('db.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='user-info'>";
        echo "<p>ID: " . $row["id"] . "</p>";
        echo "<p>Name: " . $row["name"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Message: " . $row["message"] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No results found.</p>";
}

$conn->close();
?>
