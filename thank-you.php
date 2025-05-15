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


<div class="position-relative text-darkgreen img-fluid d-none d-md-block" style="height: 650px; background-image: url('images/JHDeskBackground.png'); background-size: cover; background-position: center;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="fw-bold thank-you-header">TAK</h1>
        <p class="thank-you-text">Julemanden er på sagen!</p>

    </div>
</div>

<div class="text-center my-4 d-none d-md-flex justify-content-center align-items-center">
    <a href="choose-gift.php" class="btn btn-yellow fw-bold d-flex align-items-center p-0 justify-content-center thank-you-button-text" style="height: 40px; width: 150px;">
        Giv en gave
    </a>
    <a class="btn fw-bold text-decoration-underline thank-you-button-text" href="index.php">Tilbage til forsiden</a>
</div>

<div class="container text-center">
    <div class= "text-darkgreen text-center fw-bolder mt-5 d-block d-md-none thank-you-header">TAK</div>
</div>
<div class="container text-center mt-4 d-block d-md-none">
    <p class="thank-you-text">Julemanden er på sagen!</p>
    <img class="img-fluid" src="images/santa-claus-santa.gif" alt="træ">
    <a class="btn btn-yellow btn-lg mt-3 fw-bold" href="choose-gift.php">Giv en gave</a>
    <a class="btn btn-lg mt-3 fw-bold text-decoration-underline" href="index.php">Tilbage til forsiden</a>
</div>
