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

<!-- Bottom navigation -->
<div class="bottom-nav bg-darkgreen d-flex justify-content-center position-fixed d-lg-none p-0">
    <div class="nav-wrapper">
        <!-- Fremhævning -->
        <div class="nav-highlight" id="highlight">
            <div class="nav-highlight-inner" id="highlight-icon">
                <i class="fa-solid fa-tree"></i>
            </div>
        </div>

        <!-- Ikoner -->
        <div class="nav-icons">
            <div class="nav-icon" data-icon="fa-dollar-sign"><i class="fa-solid fa-dollar-sign"></i></div>
            <div class="nav-icon" data-icon="fa-tree"><i class="fa-solid fa-tree"></i></div>
            <div class="nav-icon" data-icon="fa-circle-info"><i class="fa-solid fa-circle-info"></i></div>
        </div>
    </div>
</div>

<!-- Navbar kun synlig på desktop -->
<nav class="navbar fixed-top d-none d-lg-flex">
    <div class="container-fluid m-0 px-4">
        <a class="navbar-brand text-success fw-bold text-darkgreen wishingtree-text-navbar m-0 py-0" href="#">
            ØNSKETRÆET
        </a>
        <div class="d-flex justify-content-evenly">
            <a class="nav-link text-darkgreen nav-link-text pe-4" href="#">DONÉR ET BELØB</a>
            <a class="nav-link text-darkgreen nav-link-text px-4" href="#">ØNSKETRÆET</a>
            <a class="nav-link text-darkgreen nav-link-text ps-4" href="#">INFORMATION</a>
        </div>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>
