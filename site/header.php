<?php
$sql = "SELECT * FROM recepten WHERE specialiteit = 0";
$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<header> <!--Begin Header -->
    <div class="nav-right">
        <a class="menu-open" id="nav-open">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>
    
</header><!-- Einde Header -->
<h1>Aantal Recepten: <?php echo count($recepten) ?></h1>