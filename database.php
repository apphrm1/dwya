
<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "pharma";
// Create connection
$connexion = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connexion) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>