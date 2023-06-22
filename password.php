<?php 
 include('database.php');
 include ('header.php');
 //ini_set('max_execution_time',300);
   if(isset($_POST['submit'])){
	   $Email = $_POST['Email'];	   
	   $EmailCheckQuery = "SELECT * FROM docteur WHERE Email = '$Email' ";
	   $EmailCheckResult = mysqli_query($connexion,$EmailCheckQuery);
	   
	   //if query run
	   if($EmailCheckResult){
		   //if email matched
		   if(mysqli_num_rows($EmailCheckResult)> 0){
			   $Enter_Code = rand(999999,111111);
			   $updateQuery = " UPDATE docteur SET Enter_Code = $Enter_Code WHERE Email = '$Email'";
			   $updateResult = mysqli_query($connexion,$updateQuery);
			   if($updateResult){
				   $subject = 'Email Verification Code';
				   $message = "Our Verification code is $Enter_Code";
				   $sender = 'From:madjedmellal@gmail.com';
				   
				   if(mail($Email,$subject,$message,$sender)){
					   $message = "we have sent a verification code to your email <br> $Email";
					   
					   $_SESSION['message'] =  $message;
					   header('Location:confirmepassword.php');
				   }else{
					   $errors['otp_errors'] = ' failed while sending code!';
				   }
			   }else{
				   $errors['db_errors'] = " failed while inserting data into database!";
			   }
		   }else{
			   $errors['invalidEmail'] = "invalid Email Address";
		   }
	   }else{
		   $errors['db_errors'] = " failed while checking email from database!";
	   }
   }
?>
<!DOCTYPE html>
<html lang="en">
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
 <title> recuperation mot de pass</title>
</head>
<body>

    <div class="contrainer">
      <center><br><br>
       <div class="row" align="center">
  <div class="col-md-3"></div>
     <div class="col-md-6">
   
	      <div class="panel panel-primary">
				<div class="panel-heading">mot de passe oublie </div>
				<div class="panel-body">
		
     
     <form action="password.php" method="POST"> 
	 <div class="input-field">
        <input type="text" class="input" name="Email" placeholder="Email " required>
     </div>
       <a href="confirmepassword.php" ><input type="submit"  name="submit" value="Demander"></a>


     
      
	  </form>

  </div>  </div>  </div>
  
  <div class="col-md-3"></div></div>  </div><br><br>
    
  <script src="js/bootstrap.min.js" ></script>  
</body>
</html>
<?php
include ('footer.php');
?>