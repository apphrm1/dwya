<?php
include ('header.php');
  // Initialiser la session
 
  
  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de principale
    header("Location: index.php");
  }
 
 include('footer.php');

?>