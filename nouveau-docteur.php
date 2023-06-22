
<?php
include ('header.php');
include('database.php');


?>
<!DOCTYPE html>
<html>
<head>
  
 <link rel="stylesheet" href="css/style.css" >  
    <link rel="stylesheet" href="css/monstyle.css" >  

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-datepicker.js"></script> 
        
  
</head>
<body id="content-docteur">
<?php



if(isset($_POST["submit"])) {
	if(isset($_POST["password"])== isset($_POST["confirmpassword"]))  {

		$firstname = $_POST["firstname"];
	  $lastname = $_POST["lastname"];	
	  $username=$firstname.' '.$lastname;
	  $telephone = $_POST["telephone"];
	  $password = $_POST["password"];
      $service = $_POST["service"];
      $adresse = $_POST["adresse"];
      $commune = $_POST["commune"];	
	  $email = $_POST["email"];	
	 
$connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO docteur (username, password, telephone,adresse,commune, service,firstname,lastname,Email) 
	VALUES ('" . $username. "', '" . $password. "','" . $telephone. "','" . $adresse. "','" . $commune. "','" . $service. "',
	'" . $firstname. "','" . $lastname. "','" . $email. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}else{$db_msg = "les 2 mots de passe n'ont pas identique";
		$type_db_msg = "error";
	}}

//l'envoie du mail
if(!empty($_POST["submit"])) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$password = $_POST["password"];	
	$commune = $_POST["commune"];
	$telephone = $_POST["telephone"];
	$adresse = $_POST["adresse"];
	$username=$firstname.' '.$lastname;
    $email = $_POST["email"];
	
	$service = $_POST["service"];
		
	$toEmail = "madjedmellal@gmail.com";
	$mailHeaders = "From: " . $username. "<". $username .">\r\n";
	if(mail($toEmail, $password, $telephone,$adresse, $commune, $service,$firstname,$lastname,$email)) {
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
	
	if(document.getElementById('username').value =="") {
		alert('entrer prenom');
		
		return false;
	} 
	
	
	
	if(document.getElementById('password').value =="") {
		alert(' entrer nom');
		
		return false;
	} 
	
	
		if(document.getElementById('confirmpassword').value =="") {
		alert('entrer confirmation mot de passe');
		
		return false;
	}
	
			if ( document.getElementById('password').value !=document.getElementById('confirmpassword').value)
			{
				alert("les deux mots de pass ne sont pas identique")
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
<form action="nouveau-docteur.php"    enctype="multipart/form-data" method="post" onsubmit="return checkforblank_password()"> 
<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
			</div>

<div class="panel panel-primary">
			
<div class="panel-heading">Formulaire de contact de docteur</div></h1><br><br>
 <div class="panel-body">
 Prenom :<input type="text" id="firstname" name="firstname" class="firstname" placeholder=""/>  
 Nom  :<input type="text" id="lastname" name="lastname" class="lastname" placeholder=""/>  
 Password  : <input type="password" id="password" name="password" class="password" placeholder=" "/>  
 Repeter password :<input type="password" id="confirmpassword" name="confirmpassword" class="confirmpassword" placeholder=""/>
 Telephone :<input type="text" id="telephone" name="telephone" placeholder=" "/>
 Email:<input type="text" id="email" name="email" placeholder=" "/>

 Adresse complette :<input type="text" id="adresse" name="adresse" placeholder=" "/>
 Commune :<p></p>
 
<select name="commune" placeholder="faites un choix">
<option valeur="commune27">401 OUM EL BOUAGHI</option>
<option valeur="commune3">402 AIN BEIDA</option>
<option valeur="commune12">403 AIN M'LILA</option>
<option valeur="commune20">404 BEHIR CHERGUI</option>
<option valeur="commune21">407 EL BELALA</option>
<option valeur="commune1">408 AIN BABOUCHE</option>	
<option valeur="commune4">409 BERRICHE</option>
<option valeur="commune14">410 OULED HAMLA</option>
<option valeur="commune15">411 DHALAA	</option>
<option valeur="commune9">412 AIN KERCHA</option>
<option valeur="commune11">413 HANCHIR TOUMGHANI</option> 
<option valeur="commune16">414 EL DJAZIA</option>
<option valeur="commune2">415 AIN DISS</option>		
<option valeur="commune17">416 FKIRINA</option>	
<option valeur="commune30">417 SOUK NAAMANE</option>		
<option valeur="commune5">418 ZORG</option>
<option valeur="commune8">419 EL FEDJOUDJ BOUGHRARA SA</option>
<option valeur="commune29">420 OULED ZOUAI</option>
<option valeur="commune28">421 BIR CHOUHADA</option>
<option valeur="commune19">422 KSAR SBAHI</option>
<option valeur="commune18">423 OUED NINI</option>
<option valeur="commune22">424 MESKIANA</option>
<option valeur="commune7">425 AIN FEKROUN</option>
<option valeur="commune23">426 RAHIA</option>
<option valeur="commune26">427 AIN ZITOUN</option>
<option valeur="commune13">428 OULED GACEM</option>
<option valeur="commune10">429 EL HARMILIA</option>




	   	</select><p></p>

Specililite :<p></p>
<select name="service"   placeholder="faites un choix"  id="niveau_diplome">


 <option valeur="service1">anesthesiologie</option>	
<option valeur="service2">andrologie</option>	
<option valeur="service3">La cardiologie</option>		
<option valeur="service4">La chirurgie</option>
<option valeur="service5">La dermatologie</option>
<option valeur="service7">endocrinologie</option>
<option valeur="service8">La gastro-enterologie</option>
<option valeur="service9">La geriatrie</option>
<option valeur="service10">La gynecologie</option>
<option valeur="service11">hematologie</option>
<option valeur="service12">hepatologie</option>
<option valeur="service13">infectiologie</option>
<option valeur="service14">La medecine aigue</option>
<option valeur="service15">La medecine du travail	</option> 
<option valeur="service16">La medecine generale</option>	
<option valeur="service17">La medecine interne</option>	
<option valeur="service18">La medecine nucleaire</option>		
<option valeur="service19">La medecine palliative</option>
<option valeur="service20">La medecine physique</option>
<option valeur="service21">La medecine preventive</option>
<option valeur="service22">La neonatologie</option>
<option valeur="service23">La nephrologie</option>
<option valeur="service24">La neurologie</option>
<option valeur="service25">odontologie</option>
<option valeur="service26">oncologie</option>
<option valeur="service27">obstetrique</option>
<option valeur="service28">ophtalmologie</option>
<option valeur="service29">orthopedie</option>
<option valeur="service30">Oto-rhino-laryngologie</option>
<option valeur="service31">La pediatrie</option>
<option valeur="service32">La pneumologie</option>
<option valeur="service33">La psychiatrie</option>
<option valeur="service34">La radiologie</option>
<option valeur="service35">La radiotherapie</option>
<option valeur="service36">La rhumatologie</option>
<option valeur="service37">urologie</option>

</select></p>

 <p align="center"><button type="submit" name="submit" class="box-button">enregistrer</button></p><br>
 
 <p class="box-register">Deja Membre? <a href="login-docteur.php">Seconnecter</a></p>

</div>
</div></div></div></div></div></div></div></div>

</form> </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		</body>
	<br><br><br><br><br>	 
</html>	
<?php
 include('footer.php');
 ?>