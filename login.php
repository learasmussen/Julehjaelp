<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ønskeportalen Login</title>

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
    <h1 class="text-darkgreen fw-bold text-center mb-3">Velkommen til Ønskeportalen</h1>

    <!-- Intro tekst -->
    <p class="text-center instrument h4">
        Log ind for at tilføje et ønske.
    </p>
</div>

<div class="container d-flex flex-column mt-5">
    <div class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="login-container text-center col-10 col-md-6 col-lg-3">
            <div class="input-group mb-3">
                <span class="input-group-text border-black bg-white"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control border-black" placeholder="BRUGERNAVN">
            </div>
            <div class="input-group">
                <span class="input-group-text border-black bg-white"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control border-black" placeholder="ADGANGSKODE">
            </div>
            <a href="input.php" class="btn btn-yellow w-100 mt-4">LOG IND</a>
            <div class="mt-2 text-end">
                <a class="text-darkgreen">Glemt adgangskode?</a>
            </div>
        </div>
    </div>