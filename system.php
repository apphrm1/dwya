
<?php





include ('database.php');
$doc_id= $_REQUEST["doc_id"].'%';
$ord_id= $_REQUEST["ord_id"].'%';

$query= "select ordonnances.ord_id, ordonnances.doct_id, medinordonnance.med_id, medicaments.nomcommercial, medinordonnance.med_usage, medinordonnance.duree  from 
		(( ordonnances inner join medinordonnance on medinordonnance.ord_id =  ordonnances.ord_id) 
		inner join medicaments on medinordonnance.med_id  = medicaments.id) where ordonnances.doct_id = '$doc_id' and ordonnances.ord_id ='$ord_id' ;";
 
	$resultat3=mysqli_query($connexion,$query);
	
 if ($resultat3){
	 		  /* $requete1=mysqli_query($connexion,"SELECT * from ordonnances  where doc_id='".$_SESSION["doc_id"]."' 
		    and dateordonnance=CURDATE()");
	      */
		   if( true){
		  while ($row=mysqli_fetch_assoc($resultat3)){?>
		  <table class="table table-striped" id="table">
	      
			<tr>
		 <td style="width:25%"><?php echo $row['nomcommercial'];?></td>
		 <td style="width:20%"><input name="commentaire" /> </td>
		 <td style="width:20%"><input name="commentaire" /> </td>
		 
		 </tr>  
	}
	
	}
	 
 }
