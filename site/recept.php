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
    <link rel="stylesheet" href="css\style-menu.css">
    <link rel="stylesheet" href="css\style-recept.css">
    <link rel="stylesheet" href="css\style-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://www.kit.font.awesome.com/2b070e02a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Recept</title>
</head>

<body>
    <?php include_once 'header.php' ?>

    <?php include_once 'nav.php' ?>

    <main> <!-- Begin Main -->
    
        <section class="receptWrap">
            <h1><?php echo  $recept['receptNaam'] ?></h1>
            <div class="receptenimg">
                <img src="<?php echo $recept ['url'] ?>">
                <div class="receptbeschrijving">
                    <i><?php echo $recept['Tijd']?></i>
                </div>
            </div>
        </section>
        <section class="ingredientenwrap">
            <h1>ingredienten</h1>
            <div class="ingredienten">
                <ul>
                <p><?php echo $recept['ingredient1']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient2']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient3']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient4']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient5']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient6']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient7']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient8']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient9']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient10']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient11']?></p>
                </ul>
                <ul>
                <p><?php echo $recept['ingredient12']?></p>
                </ul>
                
            </div>
        </section>
        <section class="stappenwrap">
            <h1>Stappen</h1>
            <div class="stappen">   
                <ul>
                <li></li>
                <p><?php echo $recept ['stap1']?></p>
                <li></li>
                <p><?php echo $recept ['stap2']?></p>
                <li></li>
                <p><?php echo $recept ['stap3']?></p>
                <li></li>
                <p><?php echo $recept['stap4']?></p>
                <li></li>
                <p><?php echo $recept ['stap5']?></p>
                <li></li>
                <p><?php echo $recept['stap6']?></p>
                <li></li>
                <p><?php echo $recept ['stap7']?></p>
                <li></li>
                <p><?php echo $recept ['stap8']?></p>
                <li></li>
                <p><?php echo $recept ['stap9']?></p>
                <li></li>
                <p><?php echo $recept['stap10']?></p>
            </ul>
            </div>
        </section>


    </main> <!-- Einde main -->

    <!-- Begin Footer -->

    <?php include_once 'footer.php' ?>
</body>

</html>