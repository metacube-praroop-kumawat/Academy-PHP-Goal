<?php
session_start(); // Start the session

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $name = trim($_POST["username"]);
    
    if (!empty($name)) {
        $_SESSION["user"] = $name;
        // Redirect to avoid form resubmission
        header("Location: session.php");
        exit();
    }
}

// Handle logout
if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: session.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Name</title>
</head>
<body>
    <?php
    if (isset($_SESSION["user"])) {
        echo "<h3>✅ Welcome back, " . htmlspecialchars($_SESSION["user"]) . "!</h3>";
        echo "<a href='session.php?logout=true'>🚪 Logout</a>";
    } else {
    ?>
        <h3>👋 Hello! What's your name?</h3>
        <form method="POST" action="session.php">
            <input type="text" name="username" required>
            <input type="submit" value="Save My Name">
        </form>
    <?php } ?>
</body>
</html>
