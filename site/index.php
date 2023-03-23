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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Webshop</title>
</head>

<body>
    <header>

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
    </header>


    <main>
        <div class="banner">
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
    </main>
    <section id="lab_social_icon_footer">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
        <div class="text-center center-block">
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</div>
</section>

</body>

</html>