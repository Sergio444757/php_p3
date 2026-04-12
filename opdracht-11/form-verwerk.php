<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<form method="POST">
    Naam: <input type="text" name="naam" required><br>
    Aantal: <input type="text" name="aantal"><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['naam'])) {
    echo "<p>" . $_POST['naam'] . "</p>";
    echo "<p>" . $_POST['aantal'] . "</p>";
}
?>

</body>
</html> .