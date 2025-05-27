<?php
require "settings/init.php"; // Makes sure the DB connection is loaded

if (!empty($_POST)) {
    $wishName = $_POST["wishName"];
    $wishAge = $_POST["wishAge"];
    $wishWish = $_POST["wishWish"];

    // SQL to insert into 'wishes' table
    $sql = "INSERT INTO wishes (wishName, wishAge, wishWish)
            VALUES (:wishName, :wishAge, :wishWish)";

    // Data binding
    $bind = [
        ":wishName" => $wishName,
        ":wishAge" => $wishAge,
        ":wishWish" => $wishWish
    ];

    // Execute query
    $db->sql($sql, $bind);
}

?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ønske tilføjet! 🎉</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/fav-icon-julehjaelp.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row text-center">
        <!-- Overskrift og tekst -->
        <div class="col-12">
            <h1 class="text-darkgreen fw-bold mb-3">Dit ønske ligger nu i Ønskehuen 🎁</h1>
            <p class="instrument h4">Nu kan nissevenner og gavmilde sjæle finde det – så er det bare at krydse fingre og vente på julens magi.</p>
        </div>

        <!-- Knap -->
        <div class="col-8 col-md-4 col-lg-3 mx-auto pt-5">
            <a href="input.php" class="btn btn-yellow w-100 fw-bold">TILFØJ NYT ØNSKE</a>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>