
<?php

include ('header.php');
include('database.php');
require('excelreader/excel_reader2.php');
require('excelreader/SpreadsheetReader.php');

  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
   header("Location: login-pharmacie.php");
    exit(); 
  } 
  
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
        <title>gestion de votre base des medicaments</title>
		<meta charset="utf-8">
</head>
<body id="content-docteur">
<div class="container tableau-stat text-center">


    <div class="row" align="center">
 
     

<form id='sidebar_menu' action="gestion-base-pharmacie.php" class="col-md-4"
 method="post" >
<ul>



    <input type="hidden" name="id" value="123"> <!-- Replace 123 with the ID of the item to be deleted -->
   
     	<p> <span><a href="logout-pharmacie.php"><FONT COLOR="RED">DECONNECTER </span></font></a>
	
	  <p><button type="submit" name="submit1"  class="btn btn-primary" >
       modifier les donnees
    </button><br></p>
	<span><p><button type="submit" name="submit4" onclick="return confirm('Are you sure you want to delete the pharmacy?')"
	class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
       supprimer le compte
    </button></span><br></p>
	<span><p><button type="submit" name="submit2"  class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
       consulter medicaments
    </button></span><br></p>

	<span><p><button type="submit" name="submit3" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
       charger medicaments
    </button></span><br></p>
   
   
</ul>
</form >
<div class="col-md-8">
  

       <div class="sucess">
    <h1> BIENVENNUE C'EST LA PHARMACIE DE   <br>  
	<?php echo $_SESSION['username']; ?></h1>
   
    		
         </div> 
        </DIV>		 
 </div> </div>  
       
 <?php  
 
 //button submit 1 qui permet la modification de l'enregistrement de la pharmacie 
 
if(isset($_POST['submit1']))
{
   
 
$result = mysqli_query($connexion,"SELECT * FROM pharmacie where username = '".$_SESSION["username"]."' ");
if ($result){

?>

<?php   while ($row= mysqli_fetch_array($result)) {
?>
<form  class="box" method="post" action="gestion-base-pharmacie.php"  enctype="multipart/form-data" >
<div><?php if(isset($message)) { echo $message; } ?>
</div>
 <h1 class="text-center"> MODIFIER CORDONNEES DE LA PHARMACIE </h1>

<input type="hidden" name="id" class="txtField" placeholder="identificateur" value="<?php echo $row['id']; ?>">
<br>

password: <input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
telephone: <input type="text" name="telephone" class="txtField" value="<?php echo $row['telephone']; ?>">
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
<button type="submit" name="submit11"  class="btn btn-success btn-lg btn-block">Modifer</button>
</form>
<br>
  <?php 
}}}

if (isset($_POST['submit11']))
{
   	$result2 =mysqli_query($connexion,"UPDATE pharmacie set  password='" . $_POST['password'] . "',
	commune='" . $_POST['commune'] . "',telephone='" . $_POST['telephone'] . "',adresse='" . $_POST['adresse'] . "' 
	WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";

}
//button submit4 qui permet la supprission de la pharmacie

if (isset($_POST['submit4'] ))
   { 
            
      
 	  $result22 =mysqli_query($connexion,"delete from pharmacie  where username = '".$_SESSION["username"]."'");			 	 
         
           $msg=("pharmacie supprimée avec succès");
	    	 session_destroy();
		     header('Location:logout-pharmacie.php');
        
		}
		?>
		
     
  <?php
// button submit 2 qui permet la consultation de la base medicament de cette pharmacie

if(isset($_POST['submit2']))
{

 
		 ?>
 <h1 class="text-center"> LISTES DES MEDICAMENTS  </h1>
			
	<table border="2 px" class="table table-striped">
		<thead>
					<tr>
						<th> nom medicament </th> <th> quantite en stock </th> <th> operation </th>
						</thead>		
		
	<?php
	
	     	$medicamentbase = mysqli_query($connexion,"SELECT * FROM medicaments inner join pharmacie 
			where  pharmacie.username= '".$_SESSION["username"]."' and medicaments.usernamepharmacie=pharmacie.username ");
	   
             if	($medicamentbase ){
				 
                 while( $row1= mysqli_fetch_array($medicamentbase)){		
                 ?>             
				<?php   $i=0;   ?>
			      <tr>				
			     	<td><?php echo $row1['nomcommercial'] ?> </td>
				    <td><?php echo $row1['quantite'] ?> </td>	
					   <td> 
									
									<a href="modifier.php?" 
									class="btn btn-success btn-edit-delete">Modifier
									</a>
										
									<a 
										onclick="return confirm('Etes-vous sûr de vouloir supprimer ce medicament')"
										href="delete-medicament.php?id=<?php echo $row1['id'] ?>"
										class="btn btn-danger btn-edit-delete">Supprimer
									</a>
										
								</td>
			     </tr>
                <?php   $i++;  } ?>
          </table> 
		  
		  
		  	
			 	
	
<br><br><br>
			 <?php 

  
 
			 
}}

//button submit3  qui permet de charger la base de donnees de medicament de cette pharmacie
?>

<?php
	if(isset($_POST['submit3']))
{
	?>
	<center>
	<h1 class="text-center">IMPORTER LA BASE DES MEDICAMENTS</h1>
 
	<form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data"
          action="gestion-base-pharmacie.php" >

	   <label>Choose Excel File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx"><br>
                <button type="submit" id="submit" name="Import"
                    class="btn-submit">Import</button>
        
	</form>
</br>
		</center>
	

	<?php 
} 
 

if(isset($_POST["Import"])){
        

	
  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
  if(in_array($_FILES["file"]["type"],$mimes)){

    $uploadFilePath = 'upload/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

    $Reader = new SpreadsheetReader($uploadFilePath);

    $totalSheet = count($Reader->sheets());

    echo "You have total ".$totalSheet." sheets".

    $html="<table border='1' class='table table-striped'>";
    $html.="<tr><th>nomcommercial</th><th>quantite</th></tr>";
    $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
           
		   $query248 = mysqli_query ($connexion,"delete  from medicaments where usernamepharmacie = '".$_SESSION["username"]."'	");

     	
	
    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){

      $Reader->ChangeSheet($i);
      
	  
      foreach ($Reader as $Row)
      {
		  
       $html.="<tr>";
        $nomcommercial = isset($Row[1]) ? $Row[1] : '';
        $quantite = isset($Row[2]) ? $Row[2] : '';
        $html.="<td>".$nomcommercial."</td>";
        $html.="<td>".$quantite."</td>";
        $html.="</tr>";
         
		
  $query2 = mysqli_query ($connexion,"insert into medicaments (nomcommercial,quantite , usernamepharmacie) 
  values ('".$nomcommercial."','".$quantite."','".$_SESSION["username"]."')
");
		
		 
      
       }
    }
    $html.="</table>";
    echo $html;
    echo "<br />les medicaments sont ajoutes a la base de donnee";
	?><br><?php
  }else { 
    die("<br/>Sorry, File type is not allowed. Only Excel file."); 
  }?><br><?php
}
?>
  </div></div></DIV>
  </br></body>
  
<?php	
 include('footer.php');
 
	?>
</html>
