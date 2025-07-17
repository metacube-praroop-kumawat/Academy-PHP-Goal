<?php include "includes/header.php"; ?>
<h2>AJAX Example</h2>
<button onclick="loadData()">Click Me</button>
<div id="output"></div>

<script>
function loadData() {
    fetch('ajax_handler.php')
        .then(res => res.text())
        .then(data => {
            document.getElementById('output').innerHTML = data;
        });
}
</script>
<?php include "includes/footer.php"; ?>
