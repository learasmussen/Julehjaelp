<?php
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

<div class="container my-5 px-4 px-md-0">
    <h2 class="text-darkgreen fw-bold text-center mb-3">VÆLG EN GAVE</h2>
    <p class="text-center instrument h4">
        Vælg hvilken gave du vil give herunder.
    </p>
</div>

<div class="container g-2 mt-5 mb-5">
    <div class="row">
        <?php
        $sql = "SELECT * FROM wishes ORDER BY wishId ASC LIMIT 3";
        $wishes = $db->sql($sql);

        foreach ($wishes as $wish): ?>
            <div class="col-12 col-md-4 mb-5">
                <div class="card gift-card text-white text-center h-100 border-0 rounded-5 d-flex flex-column justify-content-between">
                    <div class="card-body d-flex flex-column justify-content-between p-4">
                        <div class="mt-auto">
                            <h2 class="card-title mb-2 instrument">
                                <?= htmlspecialchars($wish->wishName) ?> <?= (int)$wish->wishAge ?> år
                            </h2>
                            <h4 class="card-subtitle mb-4 instrument">
                                Ønsker sig: <?= htmlspecialchars($wish->wishWish) ?>
                            </h4>
                        </div>
                        <a href="/payment-gift.php" class="btn btn-yellow fw-bold px-4 py-2 mt-4 w-75 mx-auto">Vælg gave</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
