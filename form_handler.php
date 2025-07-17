<?php include "includes/header.php"; ?>
<h2>Form Submitted</h2>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
echo "Name: $name <br> Age: $age";
?>
<?php include "includes/footer.php"; ?>
