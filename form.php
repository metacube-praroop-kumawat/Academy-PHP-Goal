<?php include "includes/header.php"; ?>
<h2>Contact Form</h2>
<form action="form_handler.php" method="POST">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>
<?php include "includes/footer.php"; ?>
