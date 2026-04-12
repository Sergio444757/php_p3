<?php
$pdo = new PDO("mysql:host=localhost;dbname=jouw_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['titel'])) {

    $titel = $_POST['titel'];

    $sql = "INSERT INTO items (titel) VALUES (:titel)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":titel" => $titel
    ]);

    // redirect (belangrijk!)
    header("Location: refresh_test.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Refresh test</title>
</head>
<body>

<h1>Voeg titel toe</h1>

<form method="POST" action="">
    <input type="text" name="titel" required>
    <button type="submit">Opslaan</button>
</form>

</body>
</html>