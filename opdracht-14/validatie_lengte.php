<?php
$melding = "";
$titel = "";

if (isset($_POST['titel'])) {

    // waarde ophalen + spaties weg
    $titel = trim($_POST['titel']);

    $lengte = strlen($titel);

    if ($lengte == 0) {
        $melding = "Titel is verplicht.";
    } elseif ($lengte < 3) {
        $melding = "Titel moet minimaal 3 tekens bevatten.";
    } elseif ($lengte > 50) {
        $melding = "Titel mag maximaal 50 tekens bevatten.";
    } else {
        $melding = "Titel is geldig.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validatie lengte</title>
</head>
<body>

<h1>Voer een titel in</h1>

<form method="POST" action="">
    <input type="text" name="titel" required>
    <button type="submit">Versturen</button>
</form>

<?php if ($melding != ""): ?>
    <p><?php echo $melding; ?></p>
<?php endif; ?>

</body>
</html>