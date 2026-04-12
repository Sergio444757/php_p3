<?php
$verzonden = false;

if (isset($_POST['titel'])) {
    $verzonden = true;

    $titel = htmlspecialchars($_POST['titel']);
    $categorie = htmlspecialchars($_POST['categorie']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toevoegen</title>
</head>
<body>

<?php if ($verzonden): ?>

    <h1>Item succesvol ontvangen</h1>

    <p><strong>Titel:</strong> <?php echo $titel; ?></p>
    <p><strong>Categorie:</strong> <?php echo $categorie; ?></p>

    <a href="toevoegen.php">Nog een toevoegen</a><br>
    <a href="index.php">Home</a>

<?php else: ?>

    <h1>Nieuw item toevoegen</h1>

    <form method="POST" action="">
        <label>Titel:</label><br>
        <input type="text" name="titel" required><br><br>

        <label>Categorie:</label><br>
        <input type="text" name="categorie"><br><br>

        <button type="submit">Toevoegen</button>
    </form>

<?php endif; ?>

</body>
</html>