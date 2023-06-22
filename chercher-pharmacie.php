


<?php
include ('header.php');
include('database.php');
include('phpqrcode/qrlib.php');
require_once 'qr-code-reader/src/lib/QrReader.php';

?>
 
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
     <link rel="stylesheet" href="css/style.css" >
     <link rel="stylesheet" href="css/monstyle.css" >
     <link rel="stylesheet" href="instascan/docs/instascan.css" >
	<link rel="stylesheet" type="text/css" href="https://rawgit.com/schmich/instascan-builds/master/css/instascan.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/monStyle.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="html5/minified/html5-qrcode.min.js"></script>
<script src="dist/js/html5-qrcode.js"></script>
<script src="dist/js/html5-qrcode-scanner.js"></script>
<script src="dist/js/sweetalert.min.js"></script>

  
  <script src="instascan/instascan.min.js"></script>
            <title>chercher pharmacie</title>
		<meta charset="utf-8">
	
    </head>
    <body id="content-docteur">
	
      <center><br>
	  <h1 class="text-center"> RECHERCHE LES PHARMACIES </h1>

	   </h3><br>		
     
 		<div class="container tableau-stat text-center">

   
    <div class="row" align="center">
 
     <div class="col-md-6">
   
       
	      <div class="panel panel-primary">
				<div class="panel-heading">recherche ordinaire </div>
				<div class="panel-body">
					
			
	    <form action="chercher-pharmacie.php" method="post"  class="form-inline"  enctype="multipart/form-data" >  
		        <input type="text" name="medicament" size="15"><br>	
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


	   	</select>

          <button type="submit" name="Rechercher" >Chercher</button>
        </form> </div></div></div>
		
		 <div class="col-md-6">
    
		<div class="panel panel-primary"> 
				<div class="panel-heading">recherche par QR</h4>
		         </div>
				<div class="panel-body">
		        <div style="width:500px;" id="reader"></div>
               </div>

			
  	   <br>
  <div id="result">Resultat de scanner ici</div>
	
	</div> 
	 
	
</div>
<div id="search-results"></div>

   <?php
   
        if(isset($_POST['Rechercher']) ) {
	    if(isset($_POST['medicament']) )
{     	// $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
  		 $medicament = $_POST['medicament'];
		 $commune = $_POST['commune'];
			
		  $sql= "select  * from medicaments inner join pharmacie  where medicaments.usernamepharmacie=pharmacie.username and 
		  medicaments.nomcommercial like '%".$medicament."%' and pharmacie.commune= '".$commune."' ";
		   
            $result=mysqli_query($connexion, $sql);
					  // while ($table=mysqli_fetch_object($table
			$row2 = mysqli_num_rows($result);
			if ($result){
				?>
          <table class="table table-striped" >
			<thead>			<tr>
			
			<td style="width:25%" >le medicament</td>
			<td style="width:25%">disponible chez la pharmacie </td>
			<td style="width:15%">telephone</td>
			<td style="width:20%">adresse</td>
		    <td style="width:15%">commune</td>
			
			</tr>	</thead>
			<?php				
	           while(  $row = mysqli_fetch_array($result))
		        	{
				if ($row["quantite"]>0){
					
		         	$i=0;		
			?>
			<tbody >
	  <tr>
	  
	 	<td style="width:25%"><?php echo  $row["nomcommercial"]; ?></td>
	    <td style="width:25%"><?php  echo  $row["usernamepharmacie"]?></td>
		<td style="width:15%"><?php echo  $row["telephone"]; ?></td>	
	    <td style="width:20%"><?php  echo  $row["adresse"]; ?></td>
		<td style="width:15%"><?php  echo  $row["commune"]; ?></td>
		</tr>         
			<?php
			$i++;
			}}}
			 else {
				 
				 ?> <br><br><br> <?php echo "ce medicament pas disponible";}
			  
}
	   ?>

</table>
<br>
<?php
}





	   ?>

 

	   
	   
<script src="instascan/instascan.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	 


<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
	$.ajax({
        type: "POST",
        url: "scan.php", // Modify the URL to the correct PHP script
        data: {qrCodeMessage:qrCodeMessage},
        success: function(response) {
            // Handle the response from the PHP script
            // Update the page with the search results
            $('#search-results').html(response);
        }
    }); 
}

function onScanError(errorMessage) {
  //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);

</script>

</body>
</html>

    
	</div>	
	</div></div>	
	</div></div>	
	</div>	

    <br><br><br>
</body>
	
 <?php
 include('footer.php');
 ?>	
	
</html>  
 	