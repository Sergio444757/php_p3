<?php
$pdo = new PDO("mysql:host=localhost;dbname=jouw_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$melding = "";

if (isset($_POST['titel'])) {

    $titel = $_POST['titel'];
    $omschrijving = $_POST['omschrijving'];

    // prepared statement
    $sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":titel" => $titel,
        ":omschrijving" => $omschrijving
    ]);

    $melding = "Item toegevoegd!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Item toevoegen</title>
</head>
<body>

<h1>Nieuw item</h1>

<form method="POST" action="">
    <label>Titel:</label><br>
    <input type="text" name="titel" required><br><br>

    <label>Omschrijving:</label><br>
    <input type="text" name="omschrijving"><br><br>

    <button type="submit">Opslaan</button>
</form>

<?php if ($melding != ""): ?>
    <p><?php echo $melding; ?></p>
<?php endif; ?>

</body>
</html>