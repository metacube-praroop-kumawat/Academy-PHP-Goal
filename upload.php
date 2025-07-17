<?php include "includes/header.php"; ?>
<h2>Upload a File</h2>
<form action="upload_handler.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form>
<?php include "includes/footer.php"; ?>
