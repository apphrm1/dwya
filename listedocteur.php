
<?php
include ('header.php');
include('database.php');
?>
<?php


     $server_name = "localhost";
     $db_name = "pharma";
     $mysql_user = "root";
     $mysql_pass = "";

?>
<?php 
   
		if(isset($_GET['service'])){
		$service=$_GET['service'];	}	
		else{
		$service="ALL";}
		
		if($service != "ALL"){ 
				$requete=" SELECT * 
								FROM docteur		  
								WHERE  service = '$service' ";
				
				}
		if($service == "ALL"){
				$requete=" SELECT * 
								FROM docteur		  
								 ";
				
				}
				  
		$les_docteurs=$connexion->query($requete);
     //   $toute_les_docteurs=$les_docteurs->fetchAll();
//$toute_les_docteurs=fetchAll($les_docteurs); 		
		
	    						  
	   $req_nbr_docteurs=mysqli_query($connexion,$requete);
	   $nbr_docteur =mysqli_num_rows($req_nbr_docteurs);
                
		
			   
		if(mysqli_num_rows($les_docteurs)<=1)
			$msg="$nbr_docteur docteur trouvee";
			
		 else
		$msg="  $nbr_docteur docteurs trouvees";
			
	?>	
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>  les docteurs </title> 
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
		
			<h1 class="text-center"> LISTE DES DOCTEURS </h1>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Rechecher des docteur (<?php echo  $msg ?> )</div>
				<div class="panel-body">
					<form class="form-inline"  >
						<label> service: </label>
							<select name="service" 
										class="form-control" onChange="this.form.submit();"	>
										
								<option value="ALL" <?php if($service=="ALL")  echo "selected"?>>Tous les services</option>
								<option value="anesthesiologie"    <?php  if($service=="service1")  echo "selected"?>>anesthesiologie</option>
								<option value="andrologie"    <?php  if($service=="service2")  echo "selected"?> >andrologie</option>
								<option value="La cardiologie"  <?php  if($service=="service3") echo "selected"?>>La cardiologie</option>
								<option value="La chirurgie"  <?php  if($service=="service4") echo "selected"?>>La chirurgie</option>								
								<option value="La dermatologie"    <?php  if($service=="service5")  echo "selected"?>>La dermatologie</option>								
								<option value="endocrinologie"  <?php  if($service=="service7") echo "selected"?>>endocrinologie</option>
								<option value="La gastro-enterologie"  <?php  if($service=="service8") echo "selected"?>>La gastro-enterologie</option>								
								<option value="La geriatrie"    <?php  if($service=="service9")  echo "selected"?>>La geriatrie</option>
								<option value="La gynecologie"    <?php  if($service=="service10")  echo "selected"?> >La gynecologie</option>
								<option value="hematologie"  <?php  if($service=="service11") echo "selected"?>>hematologie</option>
								<option value="hepatologie"  <?php  if($service=="service12") echo "selected"?>>hepatologie</option>
								
								<option value="infectiologie"  <?php  if($service=="service13") echo "selected"?>>infectiologie</option>
								<option value="La medecine aigue"  <?php  if($service=="service14") echo "selected"?>>La medecine aigue</option>								
								<option value="La medecine du travail"    <?php  if($service=="service15")  echo "selected"?>>La medecine du travail</option>
								<option value="La medecine generale"    <?php  if($service=="service16")  echo "selected"?> >La medecine generale</option>
								<option value="La medecine interne"  <?php  if($service=="service17") echo "selected"?>>La medecine interne</option>
								<option value="La medecine nucleaire"  <?php  if($service=="service18") echo "selected"?>>La medecine nucleaire</option>
								
								<option value="La medecine palliative"  <?php  if($service=="service19") echo "selected"?>>La medecine palliative</option>
								<option value="La medecine physique"  <?php  if($service=="service12") echo "selected"?>>La medecine physique</option>								
								<option value="La medecine preventive"    <?php  if($service=="service21")  echo "selected"?>>La medecine preventive</option>
								<option value="La neonatologie"    <?php  if($service=="service22")  echo "selected"?> >La neonatologie</option>
								<option value="La nephrologie"  <?php  if($service=="service23") echo "selected"?>>La nephrologie</option>
								<option value="La neurologie"  <?php  if($service=="service24") echo "selected"?>>La neurologie</option>
								
								<option value="odontologie"  <?php  if($service=="service25") echo "selected"?>>odontologie</option>
								<option value="oncologie"  <?php  if($service=="service26") echo "selected"?>>oncologie</option>								
								<option value="obstetrique"    <?php  if($service=="service27")  echo "selected"?>>obstetrique</option>
								<option value="ophtalmologie"    <?php  if($service=="service28")  echo "selected"?> >ophtalmologie</option>
								<option value="orthopedie"  <?php  if($service=="service29") echo "selected"?>>orthopedie</option>
								<option value="Oto-rhino-laryngologie"  <?php  if($service=="service30") echo "selected"?>>Oto-rhino-laryngologie</option>
							
							   <option value="La pediatrie"  <?php  if($service=="service31") echo "selected"?>>La pediatrie</option>
								<option value="La pneumologie"  <?php  if($service=="service32") echo "selected"?>>La pneumologie</option>								
								<option value="La psychiatrie"    <?php  if($service=="service33")  echo "selected"?>>La psychiatrie</option>
								<option value="La radiologie"    <?php  if($service=="service34")  echo "selected"?> >La radiologie</option>
								<option value="La radiotherapie"  <?php  if($service=="service35") echo "selected"?>>La radiotherapie</option>
								<option value="La rhumatologie"  <?php  if($service=="service36") echo "selected"?>>La rhumatologie</option>
								<option value="urologie"  <?php  if($service=="service37") echo "selected"?>>urologie</option>
							
							</select>
							
											</form>
				</div>
			</div>
			
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th> <th>username</th> <th>service</th> <th>telephone </th>
						<th> adresse </th> <th>commune</th><th>email</th> 
						
						
					</tr>
				</thead>
					
				<tbody><?php 
				
				foreach($les_docteurs as $row1 ){
					?>
						<!-- Pour chaque filiere de l'ensemble  toute_les_filieres -->
							<tr>
							 <td><?php echo $row1['id']; 	?> </td>
							<td><?php echo $row1['username']; 	?> </td>
					        <td><?php echo $row1['service']; 	?> </td>
							<td><?php echo $row1['telephone']; 	?> </td>
							 <td><?php echo $row1['adresse']; 	?> </td>
					    	<td><?php echo $row1['commune']; 	?> </td>
							<td><?php echo $row1['Email']; 	?> </td>
	
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
