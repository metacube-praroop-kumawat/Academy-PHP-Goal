<!DOCTYPE html>
<html>
<head>
    <title>Write to File</title>
</head>
<body>
    <h2>Write Text to File</h2>
    <form method="POST" action="write_file.php">
        <textarea name="content" rows="10" cols="40" placeholder="Enter your text here..." required></textarea><br><br>
        <input type="submit" name="submit" value="Save to File">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $content = $_POST['content'];
        $filename = "output.txt";

        // Save content to file
        if (file_put_contents($filename, $content)) {
            echo "<p style='color:green;'>✅ File saved as <strong>$filename</strong></p>";
        } else {
            echo "<p style='color:red;'>❌ Failed to write to file.</p>";
        }
    }
    ?>
</body>
</html>
