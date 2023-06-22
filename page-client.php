
<?php
include ('header.php');
  $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));

?>

<?php


     $server_name = "localhost";
     $db_name = "pharma";
     $mysql_user = "root";
     $mysql_pass = "";

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <link rel="stylesheet" href="css/style.css" >
   
    <link rel="stylesheet" href="css/monstyle.css" >
 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/monStyle.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="js/bootstrap-datepicker.js"></script> 
  <meta charset="utf-8">	
            <title> page-client</title>

</head >

	    <body id="content-docteur">
		
		  <h1 class="text-center"> BIENVENUE CLIENTS </h1>

	 		<center> 
                <a href="chercher-pharmacie.php"><span class="Login"><button class="box" type="submit" name="submit1"  class="btn">  
				CHERCHER PHARMACIES </button></span></a> <br>        		
               	
			<a href="listedocteur.php"><button class="box" type="submit" name="submit3"  class="btn"> VOIR LISTE DOCTEURS </button></span></a>         
			<br>
			</center>
		</body>
		
    <?php
    include('footer.php');
    ?>
</html> 
 