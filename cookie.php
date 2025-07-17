<?php
// Handle form submission and set cookie
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    $name = trim($_POST["username"]);
    
    if (!empty($name)) {
        setcookie("user", $name, time() + 60, "/"); // valid for 1 min
        // Redirect to prevent resubmission on refresh
        header("Location: cookie.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Name with Cookie</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "<h3> Welcome back, " . htmlspecialchars($_COOKIE["user"]) . "!</h3>";
    } else {
    ?>
        <h3>Hello! What's your name?</h3>
        <form method="POST" action="cookie.php">
            <input type="text" name="username" required>
            <input type="submit" value="Save My Name">
        </form>
    <?php } ?>
</body>
</html>
