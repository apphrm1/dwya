<?php


include ('database.php');

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
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-datepicker.js"></script> 
   
   





</head>
<body id="content-docteur">

<?php
  	
     
     if(isset($_REQUEST["term"])){ 
	        ?><table class="table table-striped"> 
			   <tr>
			   <thead >
			   <td style="width:70%"><font color="red">nom de medicament </font> </td>
			   <td style="width:30%"><font color="red">action </td></thead></font>
			   <tr>
			   </thead>
			   <?php
			  
		   $sql= "select distinct(nomcommercial),quantite,id from medicaments  where nomcommercial like ? group by nomcommercial";		
           if($stmt = mysqli_prepare($connexion, $sql))
	 { 
 
      mysqli_stmt_bind_param($stmt, "s", $param_term);        
       $param_term = $_REQUEST["term"].'%'; 
	    
		
           if(mysqli_stmt_execute($stmt))
		   {  
               $result = mysqli_stmt_get_result($stmt);  
                
					while($row = mysqli_fetch_assoc($result))
					{ 
			       if ($row["quantite"]>0 ){
					  
		         	$i=0;
                     					
			?>
			
			<table class="table table-striped">
	       <tr>
	  
	 	<td style="width:70%" ><?php     echo   $row["nomcommercial"]; ?></td>
	    <td style="width:30%"> <font color="white">
    	</font>
							
	
		<form method="post" id="med_form">
		    <input type="hidden" id="ord_id" name ="ord_id" value="<?php 	 echo $_REQUEST['ord_id']; ?>">
			<input type="hidden" id="med_id" name ="med_id" value="<?php  echo $row['id']; ?>">

		    <button type="button"  class="button is-info is-large" id="btn_save" value="save" onclick="refreshPage()"> Ajouter </button>
		    
		</form>
							</td>
		
		</tr>      
	  
			<?php
			$i++;
	
			}
						
			
			}
	   ?>
				</table>
				
				
				
				<?php 
		        
		    } 
         
        else{
                echo "<p>No ma found</p>";
	   }
	   }
		   
			
		
			 ?>
			
			</tbody>
			
			<?php

		

		
		
		
		   
    mysqli_stmt_close($stmt);
	 }
 //laffichage result2
 
 
 
// close connection

?>
 <br><br>
 
 
 <script>
$(document).ready(function(){
$("[id^=btn_save]").click(function(){
	
	//var data=$('#med_form').serialize()+'&btn_save=btn_save';
    var data=$(this).parent().serialize()+'&btn_save=btn_save';
   var clicked =$(this);
 
	$.ajax({
		'url':'update.php',
		'type':'post',
		'data':data,

		success:function(response){
			clicked.text(response);
			
		}
	});
	windows.location.reload();	
});	

});

</script>   
<script>
		function refreshPage() {
			window.location.href = "chercher-medicament.php";
		}
	</script>
