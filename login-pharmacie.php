


<?php

include ('header.php');
include ('database.php');

?>


<?php

if(isset($_POST['submit'])) {
if(isset($_POST['username']) && isset($_POST['password']))
{

    $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
 
 
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
     
	$username = mysqli_real_escape_string($connexion,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($connexion,htmlspecialchars($_POST['password']));
    

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM pharmacie where 
              username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($connexion,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location:gestion-base-pharmacie.php');
       
            
        }
        else
        {
 			$db_msg = "username de pharmacie ou mot de passe incorrect";
		    $type_db_msg = "error";
		header('Location: login-pharmacie.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       $db_msg = "username de pharmacie ou mot de passe vide";
		    $type_db_msg = "error";
	  header('Location: login-pharmacie.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login-pharmacie.php');
}
mysqli_close($connexion); // fermer la connexion
}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<link rel="stylesheet" href="css/style.css" >

 <link rel="stylesheet" href="css/monstyle.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body id="content-docteur">
<br>
<div class="container col-md-4 col-md-offset-4">			
			<div class="panel panel-primary">
			        <div id="statusMessage"> 
                       <?php if (! empty($db_msg)) { ?>
                        <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                         <?php } ?>
           
                          </div>	  
				<div class="panel-heading">Se connecter</div>
				<div class="panel-body">
					<form method="POST" action="login-pharmacie.php" class="form" name="login">
					<div class="form-group">
							Username :
							<input type="text"  class="username" name="username" placeholder=""/>
						</div>
						
						<div class="form-group">
							Mot de passe :
							<input type="password"  class="password" name="password" placeholder="" class="form-control" />
						</div>
							
						<button type="submit" name="submit" class="btn btn-primary btn-block">seconnecter</button>
						<br>
						
						<p class="box-register">Vous etes nouveau ici? <a href="nouveau-pharmacie.php">S'inscrire</a></p>

						
					</form>
				</div>
			</div>			
		</div>


 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	</html>
<?php
 include('footer.php');
 ?>