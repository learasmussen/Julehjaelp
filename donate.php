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

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navbar.php") ?>

<div class="container mb-5 mt-3 px-4 px-md-0">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center mb-3">DONÉR ET BELØB</h2>

    <!-- Intro tekst -->
    <p class="text-center mb-4">
        Her kan du donére et valgfrit beløb til Julehjælpen og være med til at give en
        mindeværdig jul til alle børn
    </p>

    <!-- Doner & citat bokse side om side on tablet -->
    <div class="row mb-5">
        <!-- Doner forklaring boks -->
        <div class="col-12 col-md-6">
            <div class="bg-darkgreen text-white rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <ul class="mb-4 ps-3">
                        <li class="mb-2">50 kr. svarer til en malebog eller et par sokker.</li>
                        <li class="mb-2">100 kr. svarer til en t-shirt eller et lille LEGO-sæt.</li>
                        <li class="mb-2">200 kr. svarer til en gave fra Ønsketræet.</li>
                    </ul>
                    <p class="fw-bold mb-4">Hvert beløb tæller.</p>
                </div>
                <a href="#" class="btn btn-yellow fw-bold px-4 py-2 mt-auto">Donér her</a>
            </div>
        </div>

        <!-- Indsamlet beløb -->
        <div class="text-center my-3 d-md-none">
            <p class="fw-medium mb-1">Allerede indsamlet:</p>
            <div class="d-flex align-items-center justify-content-center">
                <div class="border-top border-orange border-2 w-25 me-3"></div>
                <h2 class="fw-bold display-6 mb-0">8.357.394 <span class="fw-normal">kr.</span></h2>
                <div class="border-top border-orange border-2 w-25 ms-3"></div>
            </div>
        </div>

        <!-- Citat-boks -->
        <div class="col-12 col-md-6 m-0">
            <div class="bg-darkgreen text-white rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <p class="fst-italic mb-3">
                        ”Jeres hjælp til vores lille familie, mine tre sønner og mig, betyder, at vi kan få en
                        julemiddag med alt det, der hører til, et lille juletræ, og der er en pakke under træet
                        til hver af mine skønne drenge. Jeres julehjælp er det, der gør det muligt at holde jul
                        for mine drenge.”
                    </p>
                    <p class="mb-4">– Anonym mor</p>
                </div>
                <a href="#" class="btn btn-yellow fw-bold px-4 py-2">Donér her</a>
            </div>
        </div>
    </div>

    <!-- Indsamlet beløb -->
    <div class="text-center my-3 d-none d-md-block">
        <p class="fw-medium mb-1">Allerede indsamlet:</p>
        <div class="d-flex align-items-center justify-content-center">
            <div class="border-top border-orange border-2 w-25 me-3"></div>
            <h2 class="fw-bold display-6 mb-0">8.357.394 <span class="fw-normal">kr.</span></h2>
            <div class="border-top border-orange border-2 w-25 ms-3"></div>
        </div>
    </div>
</div>


<br>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>
