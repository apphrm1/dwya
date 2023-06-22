<?php 
session_start();
?>  
 <header class="header">
    <meta charset="utf-8">
  
  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
       
	   
	    <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700">
		<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
       
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700">
		<link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css" media="all">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		 
		 <script type="text/javascript" src="config/javascriptCode.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       
         <link rel="stylesheet" href="css/style.css">
		<link type="text/css" rel="stylesheet" href="css/style.css?t=<? echo time(); ?>" media="all">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       
		
            <div class="header-content" >
        
	    	<?php 
	echo '
	

<div id = "header" >

<nav id="navigation"  >


	<ul>
	 <li>  <a href="index.php"><span class="Home" ><i class="fa fa-home" style="font-size: 30; color: #fff ;"  ></i></span> </a><a href="index.php">ACCUEIL</a>	</li>

		<li><a href="page-docteur.php" target="_self" title="Vous etes un profetionnel de sante">
			<span class="Login"><i class="fa fa-user-md" style="font-size: 30; color: #fff ;"  ></i></span> </a>
			<a href="page-docteur.php">DOCTEURS</a>
			</a>			
			&emsp;</li>
	<li><a href="page-pharmacie.php" target="_self" title="Vous etes un pharmacien">
			<span class="Login"><i class="fa fa-flask"  style="font-size: 30; color: #fff ;"></i></span> </a>
			<a href="page-pharmacie.php">PHARMACIES</a>
			</a>			
			&emsp;</li>
<li><a href="chercher-pharmacie.php" target="_self" title="Vous etes un malade">
			<span class="Login"><i class="fa fa-users" style="font-size: 30; color: #fff ;"  ></i></span> </a>
			<a href="page-client.php">CLIENTS</a>
			</a>			
			&emsp;</li>
          <li><a href="contact.php" target="_self" title="contactez-nous">
			<span class="Login"><i class="fa fa-envelope" style="font-size: 30; color: #fff ;"  ></i></span> </a>
			<a href="contact.php">CONTACT</a>
			</a>			
			&emsp;</li>			    	
			
	</ul>	
</nav>


   <div id ="logo_div" >     <h1  dir="rtl" id = "univ" height="110px"  align= "right" color="red"> 
<img src="images/logo site.png" height="70px" width="120px"></div></center> </i>     </div>
	
	</div>
	
	</div>
	
	<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date("l, F j, Y"); ?></div>
				</div>
			</div>
	';
		

	?> 
  
  </header>
  