<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <label for="title">Titel</label>
    <input id="title" name="title" type="text">
    <button type="submit">Opslaan</button>
</form>
<?php
var_dump($_GET);
echo "Titel: " . ($_GET["titel"] ?? "nog niet ingevuld");
?>
</body>
</html>