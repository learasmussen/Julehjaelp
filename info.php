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


<div class="container-fluid px-3 px-md-0 mx-md-0 mb-5 pb-5 mt-3 mt-lg-5">
    <div class="d-flex flex-column flex-md-row mb-4 px-md-3 px-lg-5">
        <!-- Første grønne boks -->
        <div class="col-md-6 bg-darkgreen text-white p-4 rounded-5 flex-fill mb-3 mb-md-0 mx-md-2">
            <h5 class="fw-bold info-header-text text-center pb-3 mb-0 roboto">JULEHJÆLP</h5>
            <p class="mb-0 info-middle-text py-3 instrument">Julehjælp er støtte til udsatte familier, så deres børn kan få en tryg og værdig jul.</p>
            <ul class="mb-0 info-list-items pb-3 pt-4 px-3 instrument">
                <li class="pb-3">Over 60.000 familier i Danmark søger julehjælp hvert år.</li>
                <li class="pb-3">De fleste ansøgere er enlige forsørgere med lav indkomst.</li>
                <li class="pb-3">Julehjælp kan være mad, gave eller gavekort – og gør en kæmpe forskel.</li>
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
                <li class="pb-3">Hvert ønske har en værdi på maks. 200 kr.</li>
                <li class="pb-3">Du skal blot betale for ønsket, så klarer vi resten – super nemt og hurtigt.</li>
            </ul>
            <p class="mb-0 info-list-items py-md-2 instrument">Giv en gave og få et barns juleønske til at gå i opfyldelse.</p>
        </div>
    </div>


    <!-- Gul knap: Desktop -->
    <div class="text-center d-none d-md-flex justify-content-center mt-lg-5">
        <a href="payment.php" class="btn btn-yellow fw-bold px-4 py-2 doner-et-beløb-knap roboto">Donér et valgfrit beløb</a>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>