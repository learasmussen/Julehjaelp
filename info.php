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

    <title>Information</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navbar.php") ?>

<div class="container-fluid px-3 px-md-0 mx-md-0">

    <!-- Overskrift og tekst -->
    <h2 class="text-darkgreen fw-bold text-center pt-5 pb-3 roboto wishingtree-text-navbar">INFORMATION</h2>
    <p class="text-center h4 mb-5 mx-md-5 instrument donate-an-amount-text">Her kan du læse information om Julehjælp og Ønsketræet</p>

    <div class="d-flex flex-column flex-md-row mb-4 px-md-3 px-lg-5">
        <!-- Første grønne boks -->
        <div class="col-md-6 bg-darkgreen text-white p-4 rounded-5 flex-fill mb-3 mb-md-0 mx-md-2">
            <h5 class="fw-bold info-header-text text-center pb-3 mb-0 roboto">JULEHJÆLP</h5>
            <p class="mb-0 info-middle-text py-3 instrument">Julehjælp er støtte til udsatte familier, så deres børn kan få en tryg og værdig jul.</p>
            <ul class="mb-0 info-list-items pb-3 pt-4 px-3 instrument">
                <li class="pb-3">Over 60.000 familier i Danmark søger julehjælp hvert år.</li>
                <li class="pb-3">De fleste ansøgere er enlige forsørgere med lav indkomst.</li>
                <li class="pb-3">Julehjælp kan være mad, gaver eller gavekort – og gør en kæmpe forskel.</li>
            </ul>
        </div>

        <!-- Gul knap: Mobil -->
        <div class="text-center d-md-none my-3">
            <a href="payment.php" class="btn btn-yellow fw-bold px-4 py-2 doner-et-beløb-knap roboto">Donér et valgfrit beløb</a>
        </div>

        <!-- Anden grønne boks -->
        <div class="col-md-6 bg-darkgreen text-white p-4 rounded-5 flex-fill mx-md-2">
            <h5 class="fw-bold info-header-text text-center pb-3 mb-0 roboto">ØNSKETRÆET</h5>
            <p class="mb-0 info-middle-text py-3 instrument">Et digitalt juletræ med ønsker fra danske børn i krisecentre og lignende.</p>
            <ul class="mb-0 info-list-items pb-3 pt-4 instrument px-3">
                <li class="pb-3">Hvert ønske har en værdi på 200 kr.</li>
                <li class="pb-3">Du skal blot betale for ønsket, så klarer vi resten – super nemt og hurtigt.</li>
                <li class="pb-3">Giv en gave og få et barns juleønske til at gå i opfyldelse.</li>
            </ul>
        </div>
    </div>


    <!-- Gul knap: Desktop -->
    <div class="text-center d-none d-md-flex justify-content-center mt-lg-5 pb-5">
        <a href="payment.php" class="btn btn-yellow btn-lg fw-bold px-4 py-2 roboto">Donér et valgfrit beløb</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>