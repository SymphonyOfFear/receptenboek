<?php
// Dit is het startpunt van je applicatie.

require 'database.php';

$id = $_GET['receptId'];

$sql = "SELECT * FROM recepten";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-menu.css">
    <link rel="stylesheet" href="css\style-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://www.kit.font.awesome.com/2b070e02a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Spaanse Restaurant</title>
</head>

<body>
    <header> <!--Begin Header -->
        <div class="nav-right">
            <a class="menu-open" id="nav-open">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </header><!-- Einde Header -->
    <nav class="hide">
        <a class="nav-close" id="nav-close"><i class="fas fa-times-circle"></i></a>
        <a href="recepten.php" class="nav-links">Home</a>
        <a href="recepten.php" class="nav-links">Menu</a>
        <a href="specials.php" class="nav-links">Specials</a>
        <div class="nav-links-social">
            <span><i class="fa-brands fa-facebook"></i></span>
            <span><i class="fa-brands fa-instagram"></i></span>
            <span><i class="fa-brands fa-linkedin"></i></span>
        </div>
    </nav>
    <script src="\java\script.js"></script>

    <main> <!-- Begin Main -->
        

                </div>
            </div><!--Einde Row-->
        </div> <!--Einde Container-->
    </main> <!-- Einde main -->

    <!-- Begin Footer -->

    <section class="footer">
        <div class="social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
        </div>
        <ul class="list">
            <li>
                <h4>Handige Links</h4>
                <p><a href="#">Naam Restaurant</a></p>
                <p><a href="#">Naam Restaurant locatie</a></p>
                <p><a href="#">Naam Restaurant locatie</a></p>
                <p class="placeholder">.</p>
                <p class="placeholder">.</p>
            </li>
            <li>
                <h4>Openingstijden</h4>
                <p>Wo t/m Zo</p>
                <p>11:00 tot 00:00</p>
                <p class="placeholder">.</p>
                <p class="placeholder">.</p>
                <p class="placeholder">.</p>
            </li>
            <li>
                <h4>Contact</h4>
                <p><a href="#">Adress</a></p>
                <p><a href="#">Postcode</a></p>
                <p>
                <p class="placeholder">.</p>
                <p><a href="#">Telefoon Nummer</a></p>
                <p><a href="#">Mail</a></p>
            </li>
        </ul>
    </section><!-- Einde Footer -->
</body>

</html>