<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="get-test.php">
    <label for="title">Titel</label>
    <input id="title" name="title" type="text">
    <button type="submit">verzend</button>
</form>
<?php
var_dump($_POST);
echo "Titel: " . ($_POST["titel"] ?? "Nog niets ingevuld");
?>
</body>
</html>