<?php
require 'database.php';

$sql = "SELECT * FROM recepten";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-index.css">
    <link rel="stylesheet" href="css\style-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://www.kit.font.awesome.com/2b070e02a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
        <?php include_once 'header.php' ?>
    <?php include_once 'nav.php' ?>
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

    <?php include_once 'footer.php' ?>
</body>

</html>