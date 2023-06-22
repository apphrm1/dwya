<?php
include ('header.php');

?>

<html>
<head>
 <link rel="stylesheet" href="css/style.css" >
 <link rel="stylesheet" href="css/monstyle.css" >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<head>
<body>
<h1 class="text-center"> LISTE DES MEDICAMENTS </h1>
			
			<div class="panel panel-primary">
				
<center>
 		
 
<?php
 echo "<a href='?lettre=A'>A</a>";echo "     ";
 echo "<a href='?lettre=B'>B</a>";echo "     ";
 echo "<a href='?lettre=C'>C</a>";echo "     ";
 echo "<a href='?lettre=D'>D</a>";echo "     ";
 echo "<a href='?lettre=E'>E</a>";echo "     ";
 echo "<a href='?lettre=F'>F</a>";echo "     ";
 echo "<a href='?lettre=G'>G</a>";echo "     ";
 echo "<a href='?lettre=H'>H</a>";echo "     ";
 echo "<a href='?lettre=I'>I</a>";echo "     ";
 echo "<a href='?lettre=J'>J</a>";echo "     ";
 echo "<a href='?lettre=K'>K</a>";echo "     ";
echo "<a href='?lettre=L'>L</a>";echo "     ";
echo "<a href='?lettre=M'>M</a>";echo "     ";
echo "<a href='?lettre=N'>N</a>";echo "     ";
echo "<a href='?lettre=O'>O</a>";echo "     ";
echo "<a href='?lettre=P'>P</a>";echo "     ";
echo "<a href='?lettre=Q'>Q</a>";echo "     ";
echo "<a href='?lettre=R'>R</a>";echo "     ";
echo "<a href='?lettre=S'>S</a>";echo "     ";
echo "<a href='?lettre=T'>T</a>";echo "     ";
echo "<a href='?lettre=U'>U</a>";echo "     ";
echo "<a href='?lettre=V'>V</a>";echo "     ";
echo "<a href='?lettre=W'>W</a>";echo "     ";
echo "<a href='?lettre=X'>X</a>";echo "     ";
echo "<a href='?lettre=Y'>Y</a>";echo "     ";
echo "<a href='?lettre=Z'>Z</a>";echo "     ";
?>
</center>
<?php
// Liste des éléments


$liste = array("Abilify","Abufene","Aceclofenac","Acetylcysteine","Acetylleucine","Aciclovir","Acide Folique","Acide Fusidique",
"Acide Tiaprofenique","Acide Tranexamique","Aclasta","Actifed","Actiskenan","Actisoufre","Activir","Actonel","Actrapid","Acupan",
"Adapalene","Adenuric","Adrenaline","Adrigyl","Advagraf","Advil","Aerius","Aetoxisclerol","Afinitor","Airomir","Akineton","Alairgix"
,"Baclofène","Bactrim","Bactroban","Baraclude","Baume","Beagyne","Becilan","Beclometasone","Becotide","Benerva","Bepanthen",
"Bépanthène","Berberis","Betadine","Betahistine","Betamethasone","Betaserc","Betneval","Bevitine","Bexsero",
"Bicarbonate De Sodium","Bilaska","Biocalyptol","Biocidan","Biomag","Bionolyte","Biotine","Bipreterax","Bisoce",
"Bisoprolol","Cabergoline","Calcibronat","Calcidose","Calciparine","Calcitonine","Calendula","Caltrate", "Carbamazepine", 
"Carbocisteine", "Carbolevure","Carbosylan","Cardensiel", "Cartrex", "Casodex", "Catapressan", "Cebutid","Cefepime",
"Cefixime","Cefpodoxime","Ceftazidime","Ceftriaxone","Céfuroxime","Celebrex","Celectol","Celestene", "Cellcept","Celluvisc",
"Cerazette","Ceris","Cerulyse"

);?>
	
	<?php
if (!isset( $_GET['lettre'])) {
	
echo '<table class="table table-striped">';
	?><div class="panel-heading"> <?php echo " TOUS MEDICAMENTS ";?></div>
  	<div class="panel-body">
	<?php
	foreach ($liste as $element) {
		  echo "<tr>";
    echo "<td>$element</td>";
echo "</tr>";}}
echo "</table>";?>
</div></div>
<?php if (isset($_GET['lettre']) && $_GET['lettre'] == "A") {
     $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "A";
    });
	
		echo "<h1>Medicaments commencant par A</h1>";

	echo '<table class="table table-striped">';
	
	
	foreach ($liste as $element) {
    echo "<tr>";
    echo "<td>$element</td>";
    echo "</tr>";
}
echo "</table>";
} //LETREE B
if (isset($_GET['lettre']) && $_GET['lettre'] == "B") {
  
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "B";
    });
	echo "<h1>Medicaments commencant par B</h1> ";
   
    echo '<table class="table table-striped">';
	foreach ($liste as $element) {
    echo "<tr>";
    echo "<td>$element</td>";
    echo "</tr>";
}
echo "</table>";
} 

//LETTRE C
if (isset($_GET['lettre']) && $_GET['lettre'] == "C") {
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "C";
    });
    echo "<h1>Medicaments commencant par C </h1>"; 
    echo '<table class="table table-striped">';
	foreach ($liste as $element) {
    echo "<tr>";
    echo "<td>$element</td>";
    echo "</tr>";
}
echo "</table>";
} 
//LETRE D
if (isset($_GET['lettre']) && $_GET['lettre'] == "D") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "D";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE E
if (isset($_GET['lettre']) && $_GET['lettre'] == "E") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "E";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE F
if (isset($_GET['lettre']) && $_GET['lettre'] == "F") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "F";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE J
if (isset($_GET['lettre']) && $_GET['lettre'] == "J") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "J";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE H
if (isset($_GET['lettre']) && $_GET['lettre'] == "H") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "H";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE I
if (isset($_GET['lettre']) && $_GET['lettre'] == "I") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "I";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE G
if (isset($_GET['lettre']) && $_GET['lettre'] == "G") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "G";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
   
}
//LETRE K
if (isset($_GET['lettre']) && $_GET['lettre'] == "K") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "K";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
   
}
//LETRE L
if (isset($_GET['lettre']) && $_GET['lettre'] == "L") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "L";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
   
}
//LETRE M
if (isset($_GET['lettre']) && $_GET['lettre'] == "M") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "M";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE N
if (isset($_GET['lettre']) && $_GET['lettre'] == "N") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "N";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
   
}
//LETRE O
if (isset($_GET['lettre']) && $_GET['lettre'] == "O") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "O";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
    
}
//LETRE P
if (isset($_GET['lettre']) && $_GET['lettre'] == "P") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "P";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
    
}
//LETRE Q
if (isset($_GET['lettre']) && $_GET['lettre'] == "Q") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "Q";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
    
}
//LETRE R
if (isset($_GET['lettre']) && $_GET['lettre'] == "R") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "R";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
    
}

//LETRE S
if (isset($_GET['lettre']) && $_GET['lettre'] == "S") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "S";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE T
if (isset($_GET['lettre']) && $_GET['lettre'] == "T") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "T";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
   
}
//LETRE U
if (isset($_GET['lettre']) && $_GET['lettre'] == "U") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "U";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
    sort($liste);
} else {
    
}
//LETRE V
if (isset($_GET['lettre']) && $_GET['lettre'] == "V") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "V";
    });
    sort($liste);
} else {
   }
//LETRE W
if (isset($_GET['lettre']) && $_GET['lettre'] == "W") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "W";
    });
     sort($liste);
} else {
   
}
//LETRE X
if (isset($_GET['lettre']) && $_GET['lettre'] == "X") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "X";
    });
    sort($liste);
} else {
   
}

//LETRE Y
if (isset($_GET['lettre']) && $_GET['lettre'] == "Y") {
    // Filtre la liste pour afficher seulement les éléments qui commencent par "a"
    $liste = array_filter($liste, function($element) {
        return substr($element, 0, 1) == "Y";
    });
    // Trie les éléments filtrés dans l'ordre alphabétique
   // sort($liste);
} else {
    // Trie la liste complète dans l'ordre alphabétique
   // sort($liste);
}
//LETRE Z
?>
</div>
<?php
include ('footer.php');?>