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

<!-- Overskrift, tekst og pris -->
<div class="text-center mb-4 pt-5">
    <h1 class="fw-bold text-darkgreen roboto wishingtree-text-navbar">BETALING</h1>
    <p class="instrument h5">Alle transaktioner er sikre og krypterede.</p>
    <div class="pt-3">
    <p class="wishingtree-text-navbar text-darkgreen roboto fw-bold">200 kr.</p>
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
                <a class="btn btn-yellow btn-lg fw-bold py-2 px-5 mt-5" href="thank-you.php">FULDFØR BETALING</a>
                <a class="btn btn-lg fw-bold text-decoration-underline mt-5" href="choose-gift.php">GÅ TILBAGE</a>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Mobil version -->


<!-- Overskrift, tekst og pris -->
<div class="container text-center mb-4 pt-5 d-md-none">
    <h1 class="fw-bold roboto wishingtree-text-navbar text-darkgreen">BETALING</h1>
    <p class="instrument h5">Alle transaktioner er sikre og krypterede.</p>
    <div class="pt-3">
    <p class="roboto fw-bold text-darkgreen wishingtree-text-navbar">200 kr.</p>
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
                            <p class="text-muted small">Når du har klikket på “Fuldfør betaling”, vil du blive videresendt til Mobilepay, for at gennemføre dit køb sikkert.</p>
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
                <a class="btn btn-yellow btn-lg fw-bold w-50" href="thank-you.php">FULDFØR BETALING</a>
                <br>
                <a class="btn btn-lg fw-bold text-decoration-underline mt-3 text-black" href="choose-gift.php">GÅ TILBAGE</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

