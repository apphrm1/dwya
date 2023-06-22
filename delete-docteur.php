
<?php

include('database.php');
if(isset($_post['id']))
{
	$sql=mysqli_query($connexion,"delete * from docteur where id ='".$_GET['id']."'");
	 session_destroy();
	  header('Location: index.php');
	 
}
?>