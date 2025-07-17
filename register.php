<!-- register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="register.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

   <?php
if (isset($_POST['submit'])) {
    require_once 'config.php';

    $name = trim($_POST['name']);
    $age = intval($_POST['age']);

    // Validate age
    if ($age <= 0) {
        echo "<p style='color: red;'> Age must be a positive number.</p>";
    }
    // Validate name (only letters and spaces)
    elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "<p style='color: red;'> Name must contain only letters and spaces.</p>";
    }
    else {
        // Safe to insert into DB
        $sql = "INSERT INTO users (name, age) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $age);

        if ($stmt->execute()) {
            echo "<p style='color: green;'> User registered successfully!</p>";
        } else {
            echo "<p style='color: red;'> Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>


</body>
</html>
