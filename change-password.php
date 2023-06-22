<?php
   include('database.php');
    if(isset($_POST['submit'])){
		$New_Password = md5($_POST['New_Password']);
		$confirm_password = md5($_POST['confirm_password']);
				if($New_Password != $confirm_password){
				$errors['New_Password'] = 'password not matched';
			}else{
				$Email = $_SESSION['Email'];
				$updateNew_Password = " UPDATE docteur SET  password = '$New_Password' WHERE Email = 'Email' ";
				$updatepass = mysqli_query($connexion,$updateNew_Password) or die("Query Failed");
				session_unset($Email);
				session_destroy();
				header('Location:login-docteur.php');
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
      
        
        <h4>Changer mot de pass</h4>
     <form action="login-docteur.php" method="POST"> 
	 
      <div class="input-field">
        <input type="password" class="input" name="New_Password" placeholder="New_Password " required>
        <i class="fa fa-lock lock"></i>
      </div>
      <div class="input-field">
        <input type="password" class="input" name="confirm_password" placeholder="confirm_password " required>
        <i class="fa fa-lock lock"></i>
      </div>

      

      <div class="input-field">
        <a href="login.html" ><input type="submit" class="submit" name="submit" value="Login"></a>
      </div>
    </form>
    </div>
  
    
  <script src="style/js/bootstrap.min.js" ></script>  
</body>
</html>