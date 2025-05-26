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
    
    <title>Ønsketræet</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include("includes/navbar.php") ?>

<!-- Desktop version -->

<!-- Baggrund og overskrift -->
<div class="position-relative text-darkgreen img-fluid d-none d-md-block" style="height: 650px; background-image: url('images/JHDeskBackground.png'); background-size: cover; background-position: center;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="fw-bold" style="font-size: 70px">FÅ ET ØNSKE TIL AT GÅ I OPFYLDELSE</h1>
        <p class="instrument h3 py-3 mt-5 text-black">Velkommen til Ønsketræet!</p>
        <a href="choose-gift.php" class="btn btn-yellow btn-lg fw-bold px-5 py-2">GIV EN GAVE</a>
    </div>
</div>


<!-- Mobil version -->

<div class="container text-center">
    <h1 class= "text-darkgreen text-center fw-bold wishingtree-text-navbar pt-5 d-block d-md-none">ØNSKETRÆET</h1>
</div>
<div class="container text-center mt-4 d-block d-md-none">
    <p class="instrument h5">Velkommen til Julehjælp!</p>
    <p class="instrument h5 pt-3">Giv julehjælpen videre, vælg et ønske og gør <br> julen magisk for en anden</p>
    <img class="img-fluid px-3 py-4" src="images/træ.png" alt="træ">
    <a class="btn btn-yellow py-2 fw-bold w-50" href="choose-gift.php">GIV EN GAVE</a>
</div>


<br>
<br>
<br>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>