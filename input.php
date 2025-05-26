<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ønskeportalen</title>

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
    <h2 class="text-darkgreen fw-bold text-center mb-3">Velkommen til Ønskeportalen</h2>

    <!-- Intro tekst -->
    <p class="text-center instrument h4">
        Venligst udfyld alle felter for at tilføje ønske til Ønskehuen.
    </p>
</div>

<div class="container">
<form action="confirm.php" method="post">
    <!-- Navn -->
    <div class="mb-3">
        <label for="wishName" class="form-label">Barnets navn</label>
        <input type="text" class="form-control" id="wishName" name="wishName" required>
    </div>

    <!-- Alder -->
    <div class="mb-3">
        <label for="wishAge" class="form-label">Barnets alder</label>
        <input type="number" class="form-control" id="wishAge" name="wishAge" required>
    </div>

    <!-- Ønske -->
    <div class="mb-3">
        <label for="wishWish" class="form-label">Barnets ønske</label>
        <textarea class="form-control" id="wishWish" name="wishWish" rows="4" required></textarea>
    </div>

    <!-- Submit knap -->
    <div class="text-center">
        <button type="submit" class="btn btn-darkgreen">Tilføj ønske</button>
    </div>
</form>
</div>