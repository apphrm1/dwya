 

<?php

include ('header.php');
include('database.php');
require("fpdf/fpdf.php"); 
include ('edit-medicament.php');
?>


<?php

$connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
	
	if(!isset($_SESSION["username"])) { // si l'utilisateur n'est pas connأ©ctأ©
		//si la variable $_SESSION['username'] n'existe pas			
 header("Location: login-docteur.php");
		exit();
	}
	 
?>






<!DOCTYPE html>
<html lang="en" class="no-js">
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
        
  <title>cherche medicament</title>
 
 
 
  </style>
  <meta charset="utf-8">
  
  
  
   
</head>
<a href="logout-docteur.php"> Deconnecter</font></a>
 <a href="modifier-docteur.php"> modifier ou supprimer le compte    </a>
 
   
    <center>
	
   <div class="sucess">
    <h1> BIENVENNUE DR.	<?php echo $_SESSION['username'];?></h1>
  	
    		       
           
         </div> 
		            
			<div id="statusMessage"> 
                       <?php if (! empty($db_msg)) { ?>
                        <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                         <?php } ?>
           
                          </div>	  	
 </DIV>		 

    </center>		
    
	 
	
	 
  <br><br>
   
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


 
  

</head>
<body  id="content-docteur">
	<div class="container ">

<div class="row" >
        <div class="col-md-12">
	            <div class="panel panel-primary">
		    		<div class="panel-heading">LE PATIENT : </div>
				<form  method="POST"   enctype="multipart/form-data" id="myForm" 
				>
				<table>
				    <tr>
				       <td ><font width="30%"> nom de patient <input type="text" name="nommalade" >
				       <td width="10%"></td>
				       <td> <font width="30%"> age de patient <input type="text" name="age"  ></td>	
				       <td width="10%"><button type="submit" name=" creer" onclick="hideForm()"> creer</button></td >


		            <tr>
				</table>
			   </form>
			   </div>
	    </div>	
</div>
<div class="row" >
        <div class="col-md-4">
             <div class="search-box">
	            <div class="panel panel-primary">
				     <div class="panel-heading">CHERCHER MEDICAMENTS: </div>
				     <div class="panel-body">    
                         <input type="text"  autocomplete="off" placeholder=" medicament..." />
                         <div class="result"></div>
                    </div>
				</div>
			 </div>
	    </div>
       
  	    <div class="col-md-8">
        <div class="result2">
	           <div class="panel panel-primary">
			      	<div class="panel-heading">ORDONNANCE: </div>
			        <div class="panel-body">
		   
		         <table class="table " style="width:100%" border ="1px">
		            <tr>
		                <thead style="width:20%" border="1px">medicament ---------------</thead>	
		                <thead  style="width:40%" border="1px">usage medicament--------------------------------------- </thead>
						<thead  style="width:40%" border="1px">commentaire--------------------------------------- </thead>
		            </tr>
		         </table>
		 
		  <?php 
			    $doctor=$_SESSION['username'];	
			    $doct_id=$_SESSION['id'];	
		            if (isset($_POST["creer"]))
					   {
						
			           $nommalade=$_POST["nommalade"];
			           $agemalade=$_POST["age"];
			           $dt1=date("Y-m-d");			 
		           
   				    $result=mysqli_query($connexion,"insert into ordonnances (doct_id,nommalade,agemalade,date_ord)
       					    values ('$doct_id','$nommalade','$agemalade','$dt1')");
							
							
        	        if ($result ==TRUE){
			        $ord_id = $connexion->insert_id;  
			        $_SESSION["ord_id"]=$ord_id;
		
			           }
		 	          }
		
          
        	   if (isset($_SESSION["ord_id"])){
	        	   $ord_id=$_SESSION["ord_id"];
	         	//$medicament=$_GET["medicament"];	
			
	       	//$resultat3=mysqli_query($connexion,"insert into ordonnances (medicament,usernamedocteur,dateordonnance) values ('$medicament','$doctor','$dt1')");
      
		$query= "select ordonnances.ord_id, ordonnances.doct_id, medinordonnance.med_id, medicaments.nomcommercial, medicaments.id, medinordonnance.med_usage, medinordonnance.duree  from 
		(( ordonnances inner join medinordonnance on medinordonnance.ord_id =  ordonnances.ord_id) inner join medicaments on medinordonnance.med_id  = medicaments.id) where ordonnances.doct_id = '$doct_id' and ordonnances.ord_id ='$ord_id' ";
 
	$resultat3=mysqli_query($connexion,$query);
	
 if ($resultat3)
	{
		  
		   if( true){
			   
		  while ($row=mysqli_fetch_assoc($resultat3)){?>
		  <table class="table table-striped" id="table">
	      
			<tr>
			<form method="POST" >
			<?php $w=$row['id']; ?>
		 <td style="width:25%"><?php echo $row['nomcommercial'];?></td>
		 <td style="width:20%"><input type="text"  name="med_usage" > </td>		 
		 <td style="width:20%"><input type="text" name="commentaire" > </td>
		  <button  type="submit" name="enregistrer">enregistrer </button>
		  <?php  
		  
		
			if( isset($_POST['enregistrer']))
		{
			 
			
			
			 $res=mysqli_query($connexion,"UPDATE medinordonnance SET med_usage= '".$_POST['med_usage']."',
			duree='".$_POST['commentaire']."' 
		   where medinordonnance.med_id='".$w."'  
		   and medinordonnance.ord_id= '".$_SESSION["ord_id"]."'	");
		   
	  } ?>
		  
		 </tr> </form> 
		 
			
		 <?php
		
	}
	}
		
	
	}
		   else {echo 'erreur';}?>
		 
		
		 </table>
		 <?php
		}
	else
	{
		echo '<hr><p>Erreur pour ajouter</p>';
	}
		
		
		
		   
		   
?><br>
        <button type="submit" name="imprimer" > <a href="ordonnance.php" ><font color="white">imprimer 
		 <span class="fa fa-print"></span></font></a>
			
    </div>
	</div>
	</div></div>	
	</div></div>	
	 
       		
	<input type="hidden" id="ord_id"  value=" <?php echo $_SESSION['ord_id']; ?>">	
    <input type="hidden" id="doct_id"  value=" <?php echo $_SESSION['id']; ?>">	
	 
	 
	 
	 
	 </body>
   	<BR><br>	<BR><br><BR><br><BR><br>
		<?php
		
		
 include('footer.php');
 ?>
	
	
	<script>
$(document).ready(function(){
	
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
		var ord_id=document.getElementById('ord_id').value;
        if(inputVal.length){
			
			
			
            $.get("edit-medicament.php",
			{term: inputVal,ord_id:ord_id}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
		
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});

/*
function table(){
		var ord_id=document.getElementById('ord_id').value;
			var doc_id=document.getElementById('doc_id').value;
	const xhtttp= new XMLHttpRequest();
	xhttp.onload = function(){
	document.getElementById("table").innerHTML =this.responseText;
	}
	xhttp.open("GET"," system.php");
	xhttp.send();
	*/
</script>
<script>
function refresh() {
$.ajax({
    url: "chercher-medicament.php", // Ton fichier ou se trouve ton chat
    success:
        function(retour){
        $('result2').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
    }
});
 
}
 
setInterval(refresh(), 10000) // Répète la fonction toutes les 10 sec
</script>

</html>