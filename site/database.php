<?php
// Database configuratie
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "Restaurant";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);