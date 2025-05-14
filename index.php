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


<div class="position-relative text-darkgreen img-fluid d-none d-md-block" style="height: 650px; background-image: url('images/JHDeskBackground.png'); background-size: cover; background-position: center;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h1 class="fw-bolder" style="font-size: 65px">FÅ ET ØNSKE TIL AT GÅ I OPFYLDELSE</h1>
    </div>
</div>

<div class="text-center mt-4 d-none d-md-block">
    <p>Velkommen til ønsketræet!</p>
    <a href="choose-gift.php" class="btn btn-yellow btn-lg fw-bold">Giv en gave</a>
</div>


<div class="container text-center">
    <h1 class= "text-darkgreen text-center fw-bolder fs-1 mt-5 d-block d-md-none">ØNSKETRÆET</h1>
</div>
<div class="container text-center mt-4 d-block d-md-none">
    <p>Velkommen til julehjælp!</p>
    <p>Giv julehjælpen videre, vælg et ønske og gør julen magisk for en anden</p>
    <img class="img-fluid" src="images/træ.png" alt="træ">
    <a class="btn btn-yellow btn-lg mt-3 fw-bold" href="choose-gift.php">Giv en gave</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>
