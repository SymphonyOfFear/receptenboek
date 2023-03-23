<?php
// Dit is het startpunt van je applicatie.
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-recepten.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="java\menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Webshop</title>
</head>

<body>
    <header> <!--Begin Header -->

        <nav>
            <div class="menu-container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="menu-icons">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-book-open"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-utensils"></i></a></li>
                </ul>
            </div>
        </nav>
    </header><!-- Einde Header -->


    <main> <!-- Begin Main -->
        <div class="container">
            <div class="row">
                <div class="catagorie-restaurant">
                    <li>Lounge |</li>
                    <li>Restaurant</li>
                </div>
                <div class="text-main">
                    <h1>The best food & drinks in a refined but relaxed setting.</h1>
                </div>
                <div class="buttons">
                    <a href="#"><button class="button btn1">Reserveren<div class="button_horizontaal"></div>
                            <div class="button_verticaal"></div>
                        </button></a><a href="#"><button class="button btn2">Bekijk het menu<div
                                class="button_horizontaal"></div>
                            <div class="button_verticaal"></div>
                        </button></a>

                </div>
            </div><!--Einde Row-->
        </div> <!--Einde Container-->
    </main> <!-- Einde main -->
    <!-- Begin Footer -->
    
        <footer>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
            </div>
            <ul class="list">
                <li>
                    <h4>Handige Links</h4>
                    <a href=""></a>
                </li>
                <li>
                    <h4>Openingstijden</h4>
                    <p>Wo t/m Zo</p>
                    <p>11:00 tot 00:00</p>
                </li>
                <li>
                    <h4>Contact</h4>
                    <a href="">Adress</a>
                    <a href="">Postcode</a>
                    <div class="space-between"></div>
                    <a href="">Telefoon Nummer</a>
                    <a href="">Mail</a>
                </li>
            </ul>
        </footer>
    <!-- Einde Footer -->

</body>

</html>