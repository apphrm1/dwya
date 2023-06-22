<?php
   include('database.php');
   
   if(isset($_POST['submit'])){
	   $_SESSION['message']="";
	   $Enter_Code = mysqli_real_escape_string($connexion,$_POST['Enter_Code']);
	   $verifyQuery = " SELECT * FROM docteur WHERE Enter_Code = $Enter_Code";
	   $runVerifyQuery = mysqli_query($connexion,$verifyQuery);
	   if($runVerifyQuery){
		   if(mYsqli_num_rows($runVerifyQuery)>0){
			   $newQuery = "UPDATE docteur SET Enter_Code=0";
			   header("Location:change-password.php");
			}else{
				$errors['verification_error'] = "Invalid Verification Code";
			}
	   }else{
		   $errors['db_error'] = "Failed while checking verification  code from database!";
	   }
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
 
    <div class="contrainer">
      
        
        <h4>Forget Password</h4>
     <form action="change-password.php" method="POST">  
      <div class="input-field">
        <input type="password" class="input" name ="Enter_Code" placeholder="Enter_Code " required>
       
      </div>

      <div class="input-field">
        <a href="changepassword.html" ><input type="submit" class="submit" name="submit" value="Register"></a>
      </div>

      </form> 
    </div>
 
    
  <script src="style/js/bootstrap.min.js" ></script>  
</body>
</html>