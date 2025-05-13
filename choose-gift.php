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

<div class="container mb-5 mt-3 px-4 px-md-0">
    <!-- Overskrift -->
    <h2 class="text-darkgreen fw-bold text-center mb-3">VÆLG EN GAVE</h2>

    <!-- Intro tekst -->
    <p class="text-center mb-4">
        Tak for dit bidrag til Julehjælp.
        Vælg og bekræft din gave herunder
    </p>

    <div class="container g-2 mt-3">
        <div class="row mb-5">
            <?php
            $sql = "SELECT * FROM wishes ORDER BY wishId DESC LIMIT 3";
            $wishes = $db->sql($sql);

            foreach($wishes as $wish) {
                ?>
                <div class="col-12 col-md-6 mb-4">
                    <div class="bg-darkgreen text-white rounded-5 p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="mb-2"><?php echo htmlspecialchars($wish->wishName); ?> (<?php echo (int)$wish->wishAge; ?> år)</h4>
                            <p class="mb-4">Ønske: <?php echo htmlspecialchars($wish->wishWish); ?></p>
                        </div>
                        <a href="#" class="btn btn-yellow fw-bold px-4 py-2 mt-auto">Vælg gave</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
