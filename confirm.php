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

    <title>Ønske tilføjet 🎉</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container mt-5 mb-5">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center mb-3">Wuhuuuu, det var en succes!</h2>

    <!-- Intro tekst -->
    <p class="text-center instrument h4">
        Ønsket er tilføjet til Julemandens ønskeliste - nu er det bare at vente 🎅🏼
    </p>

    <div class="text-center">
        <a href="input.php" class="btn btn-darkgreen text-white w-50 mt-4">Tilføj nyt ønske</a>
    </div>
</div>
