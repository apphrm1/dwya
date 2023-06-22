
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
            <title> page-docteur</title>

</head >

	    <body id="content-docteur">
		
		  <h1 class="text-center"> BIENVENUE DOCTEURS </h1>

	 		<center>    
                <a href="nouveau-docteur.php"> <button class="box" type="submit" name="submit1"  >Devenir membre - Creer compte </button></a><br>
			    <a href="login-docteur.php"><button class="box" type="submit" name="submit2" >  Deja membre- Seconnecter</button></a><br>
			   	</center>
		</body>
		
    <?php
    include('footer.php');
    ?>
</html> 
 