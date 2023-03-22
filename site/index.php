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
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Webshop</title>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href=""><img src='../images/recepten.png' class="icons-menu"></a></li>
                    <li><a href=""><img src='/images/reserveren.png' class="icons-menu"></a></li>
                    <li><a href="">
                        <div class="menu-container" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </a></li>
                            
                        
                </ul>
            </nav>
            <div class="line"></div>

            <main>
                <div class="row">
                    <div class="catagorie-restaurant">
                        <li>Lounge |</li>
                        <li>Restaurant</li>
                    </div>
                    <div class="text-main">
                        <h1>The best food & drinks in a refined but relaxed setting.</h1>
                    </div>
                    <div class="btn-container">
                        <a href="#"><button class="btn btn1">Reserveren</button></a>
                        <a href="#"><button class="btn btn2">Bekijk het menu</button></a>
                    </div>
                </div><!--Einde Row-->
        </div> <!--Einde Container-->
        </main>

    </header>
</body>

</html>