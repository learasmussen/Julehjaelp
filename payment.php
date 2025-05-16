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

    <title>Betaling</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<?php include("includes/navbar.php") ?>

<!-- Baggrundsbillede -->
<div class="position-relative img-fluid d-none d-md-block"
     style="height: 650px; background-image: url('images/JHDeskBackground.png'); background-size: cover; background-position: center;">

    <!-- Overskrift og tekstfelt -->
    <div class="container text-center mb-4 pt-5">
        <h1 class="fw-bold roboto text-darkgreen wishingtree-text-navbar">BETALING</h1>
        <p class="instrument h5">Alle transaktioner er sikre og krypterede.</p>

        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center pt-4 px-lg-5">
                <label for="customAmount" class="form-label instrument h5">Indtast et valgfrit beløb:</label>
                <input type="number" id="customAmount" class=" form-control w-25 border-black rounded-0 py-3">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">

                <!-- Accordion -->
                <div class="accordion pt-3 pb-5" id="paymentAccordion">
                    <!-- Mobilepay -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMobilePay">
                            <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseMobilePay"
                                    aria-expanded="true" aria-controls="collapseMobilePay">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="radio" name="paymentMethod" id="mobilepayOption" class="form-check-input" style="width: 1.5em; height: 1.5em;">
                                        <label for="mobilepayOption" class="mb-0 fw-normal">Mobilepay</label>
                                    </div>
                                    <img src="images/MobilepayLogo.png" alt="MobilePay logo" height="30">
                                </div>
                            </button>
                        </h2>
                        <div id="collapseMobilePay" class="accordion-collapse collapse show" aria-labelledby="headingMobilePay"
                             data-bs-parent="#paymentAccordion">
                            <div class="accordion-body bg-light">
                                <p class="text-muted small">
                                    Når du har klikket på “Fuldfør betaling”, vil du blive videresendt til Mobilepay, for at gennemføre dit køb sikkert.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Betalingskort -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCard">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseCard"
                                    aria-expanded="false" aria-controls="collapseCard">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="radio" name="paymentMethod" id="cardOption" class="form-check-input" style="width: 1.5em; height: 1.5em;">
                                        <label for="cardOption" class="mb-0 fw-normal">Betalingskort</label>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="images/VisaLogo.png" alt="VISA logo" height="30">
                                        <img src="images/MasterLogo.png" alt="Mastercard logo" height="30">
                                        <img src="images/DKLogo.png" alt="Dankort logo" height="30">
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseCard" class="accordion-collapse collapse" aria-labelledby="headingCard"
                             data-bs-parent="#paymentAccordion">
                            <div class="accordion-body bg-light">
                                <p class="text-muted small">Indtast dine kortoplysninger for at gennemføre købet.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Knap med fuldfør betaling -->
                <div class="text-center">
                    <a class="btn btn-yellow btn-lg py-2 fw-bold w-50" href="thank-you.php">Fuldfør betaling</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mobil version -->

<!-- Overskrift og tekstfelt -->
<div class="container text-center mb-4 pt-5 pb-3 d-md-none">
    <h1 class="fw-bold roboto wishingtree-text-navbar text-darkgreen">BETALING</h1>
    <p class="instrument h5">Alle transaktioner er sikre og krypterede.</p>

    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center pt-5">
            <label for="customAmount" class="form-label instrument h5">Indtast et valgfrit beløb:</label>
            <input type="number" id="customAmount" class=" form-control w-75 border-black rounded-0 py-3">
        </div>
    </div>
</div>

<div class="container d-md-none">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">

            <!-- Accordion -->
            <div class="accordion pt-3 pb-5" id="paymentAccordion">
                <!-- Mobilepay -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingMobilePay">
                        <button class="accordion-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseMobilePay"
                                aria-expanded="true" aria-controls="collapseMobilePay">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="radio" name="paymentMethod" id="mobilepayOption" class="form-check-input" style="width: 1.5em; height: 1.5em;">
                                    <label for="mobilepayOption" class="mb-0 fw-normal">Mobilepay</label>
                                </div>
                                <img src="images/MobilepayLogo.png" alt="MobilePay logo" height="30">
                            </div>
                        </button>
                    </h2>
                    <div id="collapseMobilePay" class="accordion-collapse collapse show" aria-labelledby="headingMobilePay"
                         data-bs-parent="#paymentAccordion">
                        <div class="accordion-body bg-light">
                            <p class="text-muted small">
                                Når du har klikket på “Fuldfør betaling”, vil du blive videresendt til Mobilepay, for at gennemføre dit køb sikkert.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Betalingskort -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCard">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseCard"
                                aria-expanded="false" aria-controls="collapseCard">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="radio" name="paymentMethod" id="cardOption" class="form-check-input" style="width: 1.5em; height: 1.5em;">
                                    <label for="cardOption" class="mb-0 fw-normal">Betalingskort</label>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="images/VisaLogo.png" alt="VISA logo" height="30">
                                    <img src="images/MasterLogo.png" alt="Mastercard logo" height="30">
                                    <img src="images/DKLogo.png" alt="Dankort logo" height="30">
                                </div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseCard" class="accordion-collapse collapse" aria-labelledby="headingCard"
                         data-bs-parent="#paymentAccordion">
                        <div class="accordion-body bg-light">
                            <p class="text-muted small">Indtast dine kortoplysninger for at gennemføre købet.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Knap med fuldfør betaling -->
            <div class="text-center">
                <a class="btn btn-yellow btn-lg fw-bold w-50 py-2" href="thank-you.php">Fuldfør betaling</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

