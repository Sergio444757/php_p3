<?php
$melding = "";

if (isset($_POST['aantal'])) {

    $aantal = $_POST['aantal'];

    if (is_numeric($aantal)) {
        $melding = "Correct ingevoerd.";
    } else {
        $melding = "Voer een geldig getal in.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validatie cijfer</title>
</head>
<body>

<h1>Voer een aantal in</h1>

<form method="POST" action="">
    <input type="text" name="aantal" required>
    <button type="submit">Versturen</button>
</form>

<?php if ($melding != ""): ?>
    <p><?php echo $melding; ?></p>
<?php endif; ?>

</body>
</html>