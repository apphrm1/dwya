
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
$connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
if($connexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
     if(isset($_REQUEST["term"])){ 
                  
			$sql= "select  * from docteur  where service like ?";
           
     if($stmt = mysqli_prepare($connexion, $sql))
	 {
     mysqli_stmt_bind_param($stmt, "s", $param_term);        
       $param_term = $_REQUEST["term"] . '%'; 
	    
           if(mysqli_stmt_execute($stmt))
		   {
               $result = mysqli_stmt_get_result($stmt);                 
               if(mysqli_num_rows($result) > 0)
			   {  ?>
               <table>            
                    <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
					{ ?>				
				    <tr>
			     	<td><?php 
				   $username=$row['username'];  
				   $service=$row['service'];
				    $wilaya=$row['wilaya'];
				    echo  $username ;?> </td>
					<?php  echo  $service ;?> 
					<?php  echo  $wilaya ;?> 
				    </tr>
				    </table>            
                    <?php 
					} ?>
				</table>
				<?php 
		        }
		    } 
        } 
        else{
                echo "<p>No matches found</p>";
            }
			
			
		
			 ?>
			</tbody>
			
			<?php
		
		  }
    mysqli_stmt_close($stmt);
	 }
 
// close connection

?>
</body>
</html>