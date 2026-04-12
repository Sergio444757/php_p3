<?php
$pdo = new PDO("mysql:host=localhost;dbname=jouw_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['titel'])) {

    $titel = $_POST['titel'];
    $omschrijving = $_POST['omschrijving'];

    // INSERT met prepared statement
    $sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":titel" => $titel,
        ":omschrijving" => $omschrijving
    ]);

    // redirect (belangrijk!)
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toevoegen</title>
</head>
<body>

<h1>Item toevoegen</h1>

<form method="POST" action="">
    <input type="text" name="titel" placeholder="Titel" required><br><br>
    <input type="text" name="omschrijving" placeholder="Omschrijving"><br><br>
    <button type="submit">Opslaan</button>
</form>

</body>
</html>