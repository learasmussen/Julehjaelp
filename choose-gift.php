<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vælg en gave</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/fav-icon-julehjaelp.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include("includes/navbar.php") ?>

<!-- Container til overskrift og introduktionstekst -->
<div class="container px-4 px-md-0">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center roboto pt-5 pb-3 wishingtree-text-navbar">VÆLG EN GAVE</h2>

    <!-- Introduktionstekst under overskriften -->
    <p class="text-center instrument h4 pb-4">Tak for dit bidrag til Julehjælp - Vælg din gave herunder!</p>

</div>

<!-- Container til ønskekortene -->
<div class="container mt-5 mb-5">
    <div class="row">
        <?php
        $sql = "SELECT * FROM wishes WHERE wishPaid IS NULL ORDER BY wishId ASC LIMIT 3";
        $wishes = $db->sql($sql);

        foreach ($wishes as $wish): ?>

            <!-- Kolonne til ét ønske-kort -->
            <div class="col-12 col-lg-4 px-lg-5 mb-5 d-flex justify-content-around align-items-center pt-4">

                <!-- Ønske-kortet -->
                <div class="position-relative bg-darkgreen rounded-5 box-container py-4">

                    <!-- Sløjfe-billede placeret øverst og centreret -->
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                        <img src="images/slojfe.png" alt="Flot rød/orange gavesløjfe" class="img-fluid bow-img">
                    </div>

                    <!-- Indholdet af kortet: navn, alder, ønske og knap -->
                    <div class="text-white d-flex justify-content-center pt-5">
                        <div class="d-flex flex-column text-center mt-4">

                            <!-- Navn og alder -->
                            <h2 class="mb-2 instrument">
                                <?php echo $wish->wishName; ?> <?php echo $wish->wishAge; ?> år
                            </h2>

                            <!-- Ønsket gave -->
                            <h4 class="instrument pb-4">
                                Ønsker sig: <?php echo $wish->wishWish; ?>
                            </h4>

                            <!-- Knap til at vælge og betale for gaven -->
                            <a href="payment-gift.php?wishId=<?php echo $wish->wishId; ?>"
                               class="btn btn-yellow fw-bold px-4 py-2 pt-2 mx-auto">VÆLG GAVE</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
