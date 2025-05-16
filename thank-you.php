<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>TAK</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navbar.php") ?>

<!-- Desktop version -->
<div class="position-relative text-darkgreen img-fluid d-none d-md-block" style="height: 650px; background-image: url('images/JHDeskBackground.png'); background-size: cover; background-position: center;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="fw-bold thank-you-header roboto">TAK</h1>
        <p class="thank-you-text instrument text-black">Julemanden er på sagen!</p>
        <a href="info.php" class="btn btn-yellow btn-lg fw-bold py-2 px-5 mt-5">Information</a>
        <a class="btn btn-lg fw-bold text-decoration-underline mt-5" href="index.php">Tilbage til forsiden</a>
    </div>
</div>


<!-- Mobil version -->
<div class="container text-center">
    <div class= "text-darkgreen text-center fw-bold pt-5 d-block d-md-none thank-you-header roboto">TAK</div>
</div>
<div class="container text-center pt-2 d-block d-md-none">
    <p class="instrument h1">Julemanden er på sagen!</p>
    <img class="img-fluid px-3 py-4" src="images/santa-claus-santa.gif" alt="GIF med julemand">
    <div class="pt-5">
    <a class="btn btn-yellow btn-lg fw-bold w-50 py-2" href="info.php">Information</a>
    <br>
    <a class="btn btn-lg pt-4 fw-bold text-decoration-underline" href="index.php">Tilbage til forsiden</a>
    </div>
</div>