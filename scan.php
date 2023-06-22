

<?php
include('database.php');

if (isset($_POST['qrCodeMessage'])) {
       $qrCodeMessage = $_POST['qrCodeMessage'];
        $sql= "select  * from medicaments inner join pharmacie  on medicaments.usernamepharmacie=pharmacie.username  where 
		  medicaments.nomcommercial like '%".$qrCodeMessage."%'  ";
		   
            $result1=mysqli_query($connexion, $sql);
					  // while ($table=mysqli_fetch_object($table
			$row2 = mysqli_num_rows($result1);
			if ($result1){
	 	
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
	           while(  $row = mysqli_fetch_array($result1))
		        	{
				
			?>
			<tbody >
	  <tr>
	  
	 	<td style="width:25%"><?php echo  $row["nomcommercial"]; ?></td>
	    <td style="width:25%"><?php  echo $row["usernamepharmacie"];?></td>
		<td style="width:15%"><?php echo   $row["telephone"]; ?></td>	
	    <td style="width:20%"><?php  echo  $row["adresse"]; ?></td>
		<td style="width:15%"><?php  echo  $row["commune"]; ?></td>
		</tr>         
			<?php
	
			}}
			 else {
				 
				 ?> <br><br><br> <?php echo "ce medicament pas disponible";}
			  
}
	   ?>

</table>
<br>
<?php


    // Perform the database search
     // $stmt =mysqli_query($connexion,$query);
   // $stmt->bindParam(':qrCodeMessage', $qrCodeMessage);
   // $stmt->execute();
 
    // Fetch the results
   
?>