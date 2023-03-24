<?php
require 'database.php';


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
    <title>Recepten</title>
</head>

<body>
    <?php include_once 'header.php' ?>

    <?php include_once 'nav.php' ?>

    <main> <!-- Begin Main -->
    <?php foreach($recepten as $recept): ?>
        <div class="card">

            <div class="image">
                <img src="<?php echo $recept ['url'];?>">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <h1 class="product_name"><?php echo $recept['receptNaam'];?></h1>

            </div>
            <a href="recept.php?receptId=<?php echo $recept['receptId'];?>"><button class="button btn1">Bekijk Recept<div class="button_horizontaal"></div>
                    <div class="button_verticaal"></div>
        </div>
        <?php endforeach ?>
    </main> <!-- Einde main -->

    <!-- Begin Footer -->

    <?php include_once 'footer.php' ?>
</body>

</html>