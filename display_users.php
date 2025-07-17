<?php
// Include database config
require_once 'config.php';

// Fetch data from database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if any rows returned
if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
