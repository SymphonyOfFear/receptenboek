<?php

// Dit is het startpunt van je applicatie.



require 'database.php';
/*$id = $_GET[`MenuId`];*/

$sql = "SELECT * FROM Menu";

$result = mysqli_query($conn, $sql);

$menu = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <div class="container">
            <div class="row">
                <div class="catagorie-restaurant">
                    <li>Lounge |</li>
                    <li>Restaurant</li>
                </div>
                
                
            </div><!--Einde Row-->
        </div> <!--Einde Container-->
    </main>


</body>

</html>