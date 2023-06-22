
<?php

include ('header.php');
include('database.php');
require('excelreader/excel_reader2.php');
require('excelreader/SpreadsheetReader.php');

  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  
  
  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/monstyles.css" >

  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/func.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
  <script src="js/bootstrap-datepicker.js"></script> 
        <title>modifier docteur</title>
		<meta charset="utf-8">
</head>
<body id="content-docteur">
<div class="container tableau-stat text-center">


    <div class="row" align="center">
 
     

<form id='sidebar_menu' action="modifier-docteur.php" class="col-md-4"
 method="post" >
<ul>



    <input type="hidden" name="id" value="123"> <!-- Replace 123 with the ID of the item to be deleted -->
   
     	<span><a href="logout-docteur.php">DECONNECTER </span></font></a>
	<a href="chercher-medicament.php">retour vers page ordonnance </font></a>
  
    </button>
	 <button type="submit" name="submit1"  class="btn btn-primary" >
       modifier les donnees
    </button>
	<span><button type="submit" name="submit4" onclick="return confirm('Are you sure you want to delete docteur?')"
	class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
       supprimer le compte
    </button></span>
	
   
</ul>
</form >
<div class="col-md-8">
  

       <div class="sucess">
    <h1> BIENVENNUE DOCTEUR   <br>  
	<?php echo $_SESSION['username']; ?></h1>
   
    		
         </div> 
        </DIV>		 
 </div> </div>  
       
 <?php  
 
 //button submit 1 qui permet la modification de l'enregistrement de la pharmacie 
 
if(isset($_POST['submit1']))
{
   
 
$result = mysqli_query($connexion,"SELECT * FROM DOCTEUR where username = '".$_SESSION["username"]."' ");
if ($result){

?>

<?php   while ($row= mysqli_fetch_array($result)) {
?>
<form  class="box" method="post" action="modifier-docteur.php"  enctype="multipart/form-data" >
<div><?php if(isset($message)) { echo $message; } ?>
</div>
 <h1 class="text-center"> MODIFIER CORDONNEES DE DOCTEUR </h1>

<input type="hidden" name="id" class="txtField" placeholder="identificateur" value="<?php echo $row['id']; ?>">
<br>

password: <input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
telephone: <input type="text" name="telephone" class="txtField" value="<?php echo $row['telephone']; ?>">
<br>
email: <input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
adresse: <input type="text" name="adresse" class="txtField" value="<?php echo $row['adresse']; ?>">
<br>
nouvelle commune: <select type="text" name="commune" class="txtField" value="<?php echo $row['commune']; ?>">
 
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

</select>
<br>
specialite:
<select name="service"   placeholder="faites un choix"  id="niveau_diplome"  value="<?php echo $row['service']; ?>">



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


<button type="submit" name="submit11"  class="btn btn-success btn-lg btn-block">Modifer</button>
</form>
<br>
  <?php 
}}}

if (isset($_POST['submit11']))
{
   	$result2 =mysqli_query($connexion,"UPDATE docteur set  password='" . $_POST['password'] . "',
	commune='" . $_POST['commune'] . "',telephone='" . $_POST['telephone'] . "',adresse='" . $_POST['adresse'] . "',service='" . $_POST['service'] . "' ,
	Email='" . $_POST['email'] . "' 
	WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";

}
if (isset($_POST['submit4'] ))
   { 
            
      
 	  $result22 =mysqli_query($connexion,"delete from docteur  where username = '".$_SESSION["username"]."'");			 	 
         
           $msg=("docteur supprimée avec succès");
	    	 session_destroy();
		     header('Location:logout-docteur.php');
        
		}
include ('footer.php');