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

    <title>Donér et beløb</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navbar.php") ?>

<div class="container mb-5 px-4 px-md-0">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center pt-5 pb-3 roboto wishingtree-text-navbar">DONÉR ET BELØB</h2>

    <!-- Intro tekst -->
    <p class="text-center h4 mb-5 mx-md-5 instrument donate-an-amount-text">
        Her kan du donére et valgfrit beløb til Julehjælpen og være med til at give en
        mindeværdig jul til alle børn
    </p>

    <!-- Indsamlet beløb på mobil -->
    <div class="text-center my-3 d-md-none">
        <p class="fw-medium mb-1 instrument fw-bold already-donated-text">Allerede indsamlet:</p>
        <div class="d-flex align-items-center justify-content-center">
            <div class="border-top border-orange border-2 w-25 me-3"></div>
            <p class="fw-bold counter-text mb-0 instrument">8.357.394 kr.</p>
            <div class="border-top border-orange border-2 w-25 ms-3"></div>
        </div>
    </div>

    <!-- Indsamlet beløb på desktop -->
    <div class="text-center my-3 d-none d-md-block">
        <p class="fw-medium mb-1 instrument fw-bold already-donated-text">Allerede indsamlet:</p>
        <div class="d-flex align-items-center justify-content-center">
            <div class="border-top border-orange border-2 w-25 me-3"></div>
            <p class="fw-bold counter-text mb-0 instrument">8.357.394 kr.</p>
            <div class="border-top border-orange border-2 w-25 ms-3"></div>
        </div>
    </div>

    <!-- Citatboks -->
    <div class="row mb-5">
        <!-- Doner forklaring boks -->
        <div class="col-12 col-md-6 mx-auto pt-4">
            <div class="bg-darkgreen text-white rounded-5 p-4 d-flex flex-column justify-content-between donate-boxes-text ">
                <div class="instrument text-center">
                    <p class="mb-3 h3">50 kr. svarer til en malebog eller et par sokker.</p>
                    <p class="mb-3 h3">100 kr. svarer til en T-shirt eller et lille LEGO-sæt.</p>
                    <p class="mb-2 h3">200 kr. svarer til en gave fra Ønsketræet.</p>
                </div>
            </div>

    <!-- Gul knap: Mobil -->
    <div class="text-center d-md-none my-3 pt-4">
        <a href="payment.php" class="btn btn-yellow fw-bold px-4 py-2 doner-et-beløb-knap roboto">DONER HER</a>
    </div>

    <!-- Gul knap: Desktop -->
    <div class="text-center d-none d-md-flex justify-content-center mt-5 mt-lg-5 pb-5">
        <a href="payment.php" class="btn btn-yellow btn-lg fw-bold px-4 py-2 roboto">DONER HER</a>
    </div>


<br>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>
