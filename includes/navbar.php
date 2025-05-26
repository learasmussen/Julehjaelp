<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Navigationsbar</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <script src="https://kit.fontawesome.com/4e7ccd0dde.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<!-- Bottom navigation -->
<div class="bottom-nav bg-darkgreen d-flex justify-content-center position-fixed d-md-none d-lg-none p-0">
    <div class="nav-wrapper">
        <!-- Fremhævning -->
        <div class="nav-highlight" id="highlight">
            <div class="nav-highlight-inner" id="highlight-icon">
                <img src="images/julehjaelp-hat-icon.png">
            </div>
        </div>

        <!-- Ikoner -->
        <div class="nav-icons">
            <a href="donate.php" class="nav-icon text-decoration-none" data-icon="fa-dollar-sign"><i class="fa-solid fa-dollar-sign"></i></a>
            <a href="index.php" class="nav-icon text-decoration-none" data-icon="custom-image">
                <img src="images/julehjaelp-hat-icon.png">
            </a>
            <a href="info.php" class="nav-icon text-decoration-none" data-icon="fa-circle-info"><i class="fa-solid fa-circle-info"></i></a>
        </div>
    </div>
</div>

<!-- Navbar kun synlig på desktop -->
<nav class="navbar d-none d-md-flex d-lg-flex">
    <div class="container-fluid m-0 p-0">
        <a class="btn roboto navbar-brand ps-3 fw-bold text-darkgreen wishingtree-text-navbar m-0 py-0" href="index.php">ØNSKEHUEN</a>
        <div class="d-flex justify-content-evenly pe-3">
            <a class="instrument nav-link text-darkgreen nav-link-text pe-4" href="donate.php">DONÉR ET BELØB</a>
            <a class="instrument nav-link text-darkgreen nav-link-text px-4" href="index.php">ØNSKEHUEN</a>
            <a class="instrument nav-link text-darkgreen nav-link-text ps-4" href="info.php">INFORMATION</a>
        </div>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js.js"></script>
</body>
</html>
