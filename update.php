


<?php


include ('database.php');



// Check if the submit button was clicked
if(isset($_POST['btn_save'])) {
  
  // Retrieve the data from the form
  $h = $_POST['ord_id'];
  $v = $_POST['med_id'];
  


$request=mysqli_query($connexion,"INSERT INTO `medinordonnance`(`ord_id`, `med_id`, `med_usage`, `duree`) VALUES ('$h','$v','','')")
 or die(mysqli_error($connexion));

if($request)
echo "saved..";

else
echo "failed..";

// Close the database connection
$connexion->close();

}

?>