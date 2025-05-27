<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ønskeportalen</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container mt-5 mb-5">
    <!-- Overskrift -->
    <h1 class="text-darkgreen fw-bold text-center mb-3">Velkommen til Ønskeportalen</h1>

    <!-- Intro tekst -->
    <p class="text-center instrument h4">
        Udfyld alle felter for at tilføje et ønske til Ønskehuen.
    </p>
</div>



<div class="container d-flex flex-column mt-5">
    <div class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="col-10 col-md-6 col-lg-5">

            <form action="confirm.php" method="post">
                <!-- Navn -->
                <div class="mb-3">
                    <label for="wishName" class="form-label">Barnets Navn:</label>
                    <input type="text" class="form-control border-black" id="wishName" name="wishName" required>
                </div>

                <!-- Alder -->
                <div class="mb-3">
                    <label for="wishAge" class="form-label">Barnets Alder:</label>
                    <input type="number" class="form-control border-black" id="wishAge" name="wishAge" required>
                </div>

                <!-- Ønske -->
                <div class="mb-3">
                    <label for="wishWish" class="form-label">Barnets Ønske:</label>
                    <textarea class="form-control border-black" id="wishWish" name="wishWish" rows="4" required></textarea>
                </div>

                <!-- Submit knap -->
                <div class="text-center pt-2">
                    <button type="submit" class="btn btn-yellow px-5 fw-bold">TILFØJ ØNSKE</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>