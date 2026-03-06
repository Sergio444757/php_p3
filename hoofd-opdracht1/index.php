<?php

// Mijn mini-app wordt een: Workout tracker

$appNaam = "FitApp";
$trackerType = "Workout tracker";
$tagline = "Track je workouts";

?>

<html>
<head>
<title><?php echo $appNaam; ?></title>
</head>

<body>
<nav>
    <a href="pages/home.php">Home</a>
    <a href="pages/toevoegen.php">Toevoegen</a>
</nav>
<h1>Welkom bij <?php echo $appNaam; ?></h1>

<p>Dit is een <?php echo $trackerType; ?></p>

<p><?php echo $tagline; ?></p>

<footer>
<?php echo date("Y"); ?> <?php echo $appNaam; ?>
</footer>

</body>
</html>

