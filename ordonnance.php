
<?php

session_start();
include('phpqrcode/qrlib.php');
define("FPDF_FONTPATH","fpdf/font/"); 
//lien vers le dossier " font " 
include("fpdf/fpdf.php"); 

include('database.php');
//lien vers le fichier contenant la classe FPDF

     class PDF extends FPDF
    {

    function Header()
    {
	
	$this->SetFont('Arial','I',2);
    $this->Ln(8);
    $this->Ln(30);
  $this->SetDrawColor(188,188,188);
    $this->Line(0,45,350,45);
  }
	
  
    function Footer()
    {
		
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }

  
$connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
$display_heading=array('ord_id'=>'ord_id','nomcommercial'=>'nomcommercial','med_usage'=>'med_usage','duree'=>'duree',
                                 'med_id'=>'med_id','id'=>'id','quantite'=>'quantite','usernamepharmacie'=>'usernamepharmacie',
								 'doct_id'=>'doct_id','nommalade'=>'nommalade','agemalade'=>'agemalade','date_ord'=>'date_ord');
 
$result=mysqli_query($connexion,"select medicaments.nomcommercial,medinordonnance.med_usage,medinordonnance.duree
                                 
                from (medinordonnance inner join medicaments on medicaments.id=medinordonnance.med_id )inner join ordonnances on     
								 medinordonnance.ord_id=ordonnances.ord_id where ordonnances.doct_id='".$_SESSION['id']."' and 
								 medinordonnance.ord_id='".$_SESSION['ord_id']."'");

    
	
	
	$header=mysqli_query($connexion,"show columns from medinordonnance");
    $pdf = new PDF('P','mm','A5');
    $pdf->AddPage();
 
	$pdf->AliasNbPages();
	 $iddd=$_SESSION['ord_id'];
     
	 $pdf->SetFont('Times','B',30);
      $pdf->Cell(0,30,'ORDONNANCE N  '.$iddd,0,0,'C');
	  
		  
     $pdf->SetFont('Times','I',12);
   
    
   foreach($header as $heading){
	
	//$pdf->Cell(60,30,$display_heading[$heading['Field']],0);   
   } 
   
    
    $data = '';
     while ($row = mysqli_fetch_assoc($result)) {
		 $pdf->Ln();
		  
       foreach ($row as $column) {
       $pdf->Cell(40,10,$column,0); 
       // $data .= $row["nomcommercial"] . "\n";
    }    $data .= $row["nomcommercial"] . "\n";
}
      
        $qrCodeFile = 'phpqrcode/all_data.png';
		QRcode::png($data, $qrCodeFile);      
        $pdf->Image($qrCodeFile,100,160,40,40);
    
     $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
     $resultttt=mysqli_query($connexion,"select username ,service,telephone,adresse,commune 
                                   	from docteur where id='".$_SESSION['id']."'");
     
    
	
	
	//affiche les cordonnees de docteur
	  $pdf->SetY(0);
	if ($resultttt)
	{	

    foreach ($resultttt as $data) {
		
            $pdf->Cell(5,10,'Docteur  '.$data['username']);
		    $pdf->Cell(5,20,'Specialiste en  '.$data['service']);
            $pdf->Cell(5,30,'Adresse  '.$data['adresse']);
            $pdf->Cell(5,40,'A  '.$data['commune']);
		    $pdf->Cell(5,50,'Telephone  '.$data['telephone']);


	}} 
	 

         //affiche les cordonnees de malade
	
	  
    $connexion = mysqli_connect("localhost", "root", "", "pharma") or die("Erreur de connexion: " . mysqli_error($connexion));
    $resultt=mysqli_query($connexion,"select ordonnances.date_ord ,ordonnances.nommalade,ordonnances.agemalade
                                   	from ordonnances   inner join medinordonnance on ordonnances.ord_id=medinordonnance.ord_id
									where ordonnances.doct_id='".$_SESSION['id']."' and 
								     medinordonnance.ord_id='".$_SESSION['ord_id']."' group by ordonnances.nommalade ");
    //$headerr=mysqli_query($connexion,"show columns from ordonnances");
     $pdf->SetX(100);
	
    if ($resultt)
	{	
     
    foreach ($resultt as $dataa) {
		
            $pdf->Cell(5,20,'LE : '.$dataa['date_ord']);
		    $pdf->Cell(5,30,'Patient:  '.$dataa['nommalade']);
            $pdf->Cell(5,40,'Age: '.$dataa['agemalade']);
           

	}} 
    $pdf->Output();
	
    ?>
