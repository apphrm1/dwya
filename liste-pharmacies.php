
<?php
include ('header.php');
include('database.php');
?>
<?php


?>
<?php 
   
		if(isset($_GET['commune'])){
		$commune=$_GET['commune'];	}	
		else{
		$commune="ALL";}
		
		if($commune != "ALL"){ 
				$requete=" SELECT * 
								FROM pharmacie		  
								WHERE  commune = '$commune' ";
				
				}
		if($commune == "ALL"){
				$requete=" SELECT * 
								FROM pharmacie		  
								 ";
				
				}
				  
		$les_pharmacies=$connexion->query($requete);
     
	    						  
	   $req_nbr_pharmacies=mysqli_query($connexion,$requete);
	   $nbr_pharmacies =mysqli_num_rows($req_nbr_pharmacies);
                
		
			   
		if(mysqli_num_rows($les_pharmacies)<=1)
			$msg="$nbr_pharmacies pharmacie trouvee";
			
		 else
		$msg="  $nbr_pharmacies pharmacies trouvees";
			
	?>	
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>  les pharmacies </title> 
		 <link rel="stylesheet" href="css/style.css" >

 <link rel="stylesheet" href="css/monstyle.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
		
		
		
	</head>
		
	<body id="content-docteur">
	<!-- debut *************************************** -->
	
	<!--  fin **************************************** -->
		<div class="container">
		
			<h1 class="text-center"> LISTE DES PHARMACIES </h1>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Rechecher des pharmacies (<?php echo  $msg ?> )</div>
				<div class="panel-body">
					<form class="form-inline"  >
						<label> commune: </label>
							<select name="commune" 
										class="form-control" onChange="this.form.submit();"	>
										
								<option value="ALL" <?php if($commune=="ALL")  echo "selected"?>>Tous les communes</option>
								<option value="408 AIN BABOUCHE"    <?php  if($commune=="commune1")  echo "selected"?>>408 AIN BABOUCHE</option>
								<option value="415 AIN DISS"    <?php  if($commune=="commune2")  echo "selected"?> >415 AIN DISS</option>
								<option value="402 AIN BEIDA"  <?php  if($commune=="commune3") echo "selected"?>>402 AIN BEID</option>								
								<option value="418 ZORG"    <?php  if($commune=="commune5")  echo "selected"?>>418 ZORG</option>								
								
								<option value="425 AIN FEKROUN"    <?php  if($commune=="commune1")  echo "selected"?>>425 AIN FEKROUN</option>
								<option value="419 EL FEDJOUDJ BOUGHRARA SA"    <?php  if($commune=="commune2")  echo "selected"?> >419 EL FEDJOUDJ BOUGHRARA SA</option>
								<option value="429 EL HARMILIA"  <?php  if($commune=="commune3") echo "selected"?>>429 EL HARMILIA</option>
								<option value="413 HANCHIR TOUMGHANI"  <?php  if($commune=="commune4") echo "selected"?>>413 HANCHIR TOUMGHANI</option>								
								<option value="403 AIN M'LILA"    <?php  if($commune=="commune5")  echo "selected"?>>403 AIN M'LILA</option>								
								
								<option value="428 OULED GACEM"    <?php  if($commune=="commune1")  echo "selected"?>>428 OULED GACEM</option>
								<option value="410 OULED HAMLA"    <?php  if($commune=="commune2")  echo "selected"?> >410 OULED HAMLA</option>
								<option value="411 DHALAA"  <?php  if($commune=="commune3") echo "selected"?>>411 DHALAA</option>
								<option value="414 EL DJAZIA"  <?php  if($commune=="commune4") echo "selected"?>>414 EL DJAZIA</option>								
								<option value="416 FKIRINA"    <?php  if($commune=="commune5")  echo "selected"?>>416 FKIRINA</option>								
								
								<option value="423 OUED NINI"    <?php  if($commune=="commune1")  echo "selected"?>>423 OUED NINI</option>
								<option value="422 KSAR SBAHI"    <?php  if($commune=="commune2")  echo "selected"?> >422 KSAR SBAHI</option>
								<option value="404 BEHIR CHERGUI"  <?php  if($commune=="commune3") echo "selected"?>>404 BEHIR CHERGUI</option>
								<option value="407 EL BELALA"  <?php  if($commune=="commune4") echo "selected"?>>407 EL BELALA</option>								
								<option value="424 MESKIANA"    <?php  if($commune=="commune5")  echo "selected"?>>424 MESKIANA</option>								
								
								<option value="426 RAHIA"    <?php  if($commune=="commune1")  echo "selected"?>>426 RAHIA</option>
								<option value="427 AIN ZITOUN"    <?php  if($commune=="commune2")  echo "selected"?> >427 AIN ZITOUN</option>
								<option value="401 OUM EL BOUAGHI"  <?php  if($commune=="commune3") echo "selected"?>>401 OUM EL BOUAGHI</option>
								<option value="427 AIN ZITOUN"  <?php  if($commune=="commune4") echo "selected"?>>427 AIN ZITOUN</option>								
								<option value="401 OUM EL BOUAGHI"    <?php  if($commune=="commune5")  echo "selected"?>>401 OUM EL BOUAGHI</option>								
								
								<option value="21 BIR CHOUHADA"    <?php  if($commune=="commune1")  echo "selected"?>>21 BIR CHOUHADA</option>
								<option value="420 OULED ZOUAI"    <?php  if($commune=="commune2")  echo "selected"?> >420 OULED ZOUAI</option>
								<option value="401 OUM EL BOUAGHI"  <?php  if($commune=="commune3") echo "selected"?>>401 OUM EL BOUAGHI</option>
								<option value="417 SOUK NAAMANE"  <?php  if($commune=="commune4") echo "selected"?>>417 SOUK NAAMANE/option>								
								
								
								
							</select>
							
											</form>
				</div>
			</div>
			
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th> <th>username</th>  <th>telephone </th>
						<th> adresse </th> <th>commune</th> 
						
						
					</tr>
				</thead>
					
				<tbody><?php 
				
				foreach($les_pharmacies as $row1 ){
					?>
						<!-- Pour chaque filiere de l'ensemble  toute_les_filieres -->
							<tr>
							 <td><?php echo $row1['id']; 	?> </td>
							<td><?php echo $row1['username']; 	?> </td>					        
							<td><?php echo $row1['telephone']; 	?> </td>
							 <td><?php echo $row1['adresse']; 	?> </td>
							<td><?php echo $row1['commune']; 	?> </td>
						</tr>
					
				<?php }					?>
					
				</tbody>
			</table>
			<br><br>
			
		</div>
	</body>
	
</html>
<?php 
include ('footer.php');?>
