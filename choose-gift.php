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

<div class="container px-4 px-md-0">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center roboto pt-5 pb-3 wishingtree-text-navbar">VÆLG EN GAVE</h2>

    <!-- Intro tekst -->
    <p class="text-center instrument h4 pb-4">Tak for dit bidrag til Julehjælp - Vælg din gave herunder!</p>

</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <?php
        $sql = "SELECT * FROM wishes WHERE wishPaid IS NULL ORDER BY wishId ASC LIMIT 3";
        $wishes = $db->sql($sql);

        foreach ($wishes as $wish): ?>
            <div class="col-12 col-lg-4 px-lg-5 mb-5 d-flex justify-content-around align-items-center pt-4">
                <div class="position-relative bg-darkgreen rounded-5 box-container py-4">
                    <div class="position-absolute top-0 start-50 translate-middle-x">
                        <img src="images/slojfe.png" alt="Flot rød/orange gavesløjfe" class="img-fluid bow-img">
                    </div>
                    <div class="text-white d-flex justify-content-center pt-5">
                        <div class="d-flex flex-column text-center mt-4">
                            <h2 class="mb-2 instrument">
                                <?php echo $wish->wishName; ?> <?php echo $wish->wishAge; ?> år
                            </h2>
                            <h4 class="instrument pb-4">
                                Ønsker sig: <?php echo $wish->wishWish; ?>
                            </h4>
                            <a href="/payment-gift.php?wishId=<?php echo $wish->wishId; ?>" class="btn btn-yellow fw-bold px-4 py-2 pt-2 mx-auto">VÆLG GAVE</a>
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
