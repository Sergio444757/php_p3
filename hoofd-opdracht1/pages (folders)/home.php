<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<!-- Hier komt de inhoud van de pagina -->

<?php include "../includes/footer.php"; ?>

<?php

$boeken = [
    [
        "titel" => "Fourth Wing",
        "auteur" => "Rebecca Yarros",
        "status" => "Bezig"
    ],
    [
        "titel" => "Circe",
        "auteur" => "Madeline Miller",
        "status" => "Gelezen"
    ]
];

?>

<nav>
    <a href="pages/home.php">Home</a>
    <a href="pages/toevoegen.php">Toevoegen</a>
</nav>