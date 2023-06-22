
<?php
include ('header.php');
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/style.css" >

 <link rel="stylesheet" href="css/monstyle.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 </head>
<body id="content-docteur">
<?php






if(isset($_POST["submit"])) {
	
	$connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$password = $_POST["password"];
    $commune = $_POST["commune"];
	$telephone = $_POST["telephone"];
	$adresse = $_POST["adresse"];
	$username=$firstname.' '.$lastname;
	
	$result = mysqli_query($connexion, "INSERT INTO pharmacie (username, password,commune,telephone,adresse,firstname,lastname) 
	VALUES ('" . $username. "', '" . $password. "','" . $commune. "','" . $telephone. "','" . $adresse. "','" . $firstname. "','" . $lastname. "')");

   

	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}


//l'envoie du mail
if(!empty($_POST["submit"])) {
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$password = $_POST["password"];	
	$commune = $_POST["commune"];
	$telephone = $_POST["telephone"];
	$adresse = $_POST["adresse"];
	$username=$firstname.' '.$lastname;
  $toEmail = "madjedmellal@gmail.com";
	$mailHeaders = "From: " . $username. "<". $username .">\r\n";
	if(mail($toEmail, $password, $commune,$telephone,$adresse)) {
	    $mail_msg = "Vos informations de contact ont été reçues avec succés.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Erreur lors de l'envoi de l'e-mail.";
		$type_mail_msg = "error";
	}mysql_close(connexion);
}

?>









		
	
			

 
		
		<script>
function checkforblank_password(){
	
	if(document.getElementById('firstname').value =="") {
		alert('entrer le prenom');
		
		return false;
	} 
	
	if(document.getElementById('lastname').value =="") {
		alert('entrer le nom');
		
		return false;
	} 
	
	
	
	if(document.getElementById('password').value =="") {
		alert(' entrer password');
		
		return false;
	} 
	
	
		if(document.getElementById('confirmpassword').value =="") {
		alert('entrer confirmation de password');
		
		return false;
	}
	
			if ( document.getElementById('password').value !=document.getElementById('confirmpassword').value)
			{
				alert("les deux mots de pass ne sont pas identique ")
			return false;
				
			}	

	
	
	
	
}




	function expires_in(){		
var d = new Date();
d.setTime(d.getTime() + (24*60*60*1000));

return "expires="+ d.toUTCString();

}	


</script>
	
  <div class="container col-md-4 col-md-offset-4">			
	<br>
		
<form action="nouveau-pharmacie.php"  name="login"   enctype="multipart/form-data" method="post" onsubmit="return checkforblank_password()"> 
<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
			
			



<div class="panel panel-primary">
			
<div class="panel-heading">Formulaire de contact de pharmacie</div>
 <div class="panel-body">
 prenom :<input type="text" id="firstname" name="firstname" class="firstname" placeholder=""/></p>  
nom :<input type="text" id="lastname" name="lastname" class="lastname" placeholder=""/> </p>
password  : <input type="password" id="password" name="password" class="password" placeholder=" "/>  </p>
repeter password :<input type="password" id="confirmpassword" name="confirmpassword" class="confirmpassword" placeholder=""/></p>
 telephone :<input type="text" id="telephone" name="telephone" class="telephone" placeholder=""/> </p>
adresse :<input type="text" id="adresse" name="adresse" class="adresse" placeholder=""/> </p>
commune :
<select name="commune" placeholder="faites un choix">
<option valeur="commune1">408 AIN BABOUCHE</option>	
<option valeur="commune2">415 AIN DISS</option>	
<option valeur="commune3">402 AIN BEIDA</option>		
<option valeur="commune4">409 BERRICHE</option>
<option valeur="commune5">418 ZORG</option>
<option valeur="commune7">425 AIN FEKROUN</option>
<option valeur="commune8">419 EL FEDJOUDJ BOUGHRARA SA</option>
<option valeur="commune9">412 AIN KERCHA</option>
<option valeur="commune10">429 EL HARMILIA</option>
<option valeur="commune11">413 HANCHIR TOUMGHANI</option>
<option valeur="commune12">403 AIN M'LILA</option>
<option valeur="commune13">428 OULED GACEM</option>
<option valeur="commune14">410 OULED HAMLA</option>
<option valeur="commune15">411 DHALAA	</option> 
<option valeur="commune16">414 EL DJAZIA</option>	
<option valeur="commune17">416 FKIRINA</option>	
<option valeur="commune18">423 OUED NINI</option>		
<option valeur="commune19">422 KSAR SBAHI</option>
<option valeur="commune20">404 BEHIR CHERGUI</option>
<option valeur="commune21">407 EL BELALA</option>
<option valeur="commune22">424 MESKIANA</option>
<option valeur="commune23">426 RAHIA</option>
<option valeur="commune24">427 AIN ZITOUN</option>
<option valeur="commune25">401 OUM EL BOUAGHI</option>
<option valeur="commune26">427 AIN ZITOUN</option>
<option valeur="commune27">401 OUM EL BOUAGHI</option>
<option valeur="commune28">421 BIR CHOUHADA</option>
<option valeur="commune29">420 OULED ZOUAI</option>
<option valeur="commune30">417 SOUK NAAMANE</option>


	   	</select></p>

 <p><button type="submit" name="submit" class="box-button">enregistrer</button></p><br>
 
 <p class="box-register">Deja Membre? <a href="login-pharmacie.php">Seconnecter</a></p>
</div></div></div>
</form>
</div>
		
		</body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	<br><br><br><br><br>
</html>	
<?php
 include('footer.php');
 ?>