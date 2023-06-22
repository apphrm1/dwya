
   <?php
	include('database.php');
	include ('gestion-base-pharmacie.php');
   ?>

<?php

	
	
	$id_medicament=$_GET['id'];	
	$requete="DELETE * from medicaments where id='".$id_medicament."' and usernamepharmacie='".$_session['username']."' ";	
	$valeur=array($id_medicament);					
	$resultat=$pdo->prepare($requete);
	$resultat->execute($valeur);	
	$msg= "medicament supprimé avec succés";
	$url="gestion-base-pharmacie.php";		
	//header("location:../message.php?msg=$msg&color=v&url=$url");
	 
?>