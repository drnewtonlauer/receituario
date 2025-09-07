<?php  
include"functions/config.php";
session_start();

$header = '';
$footer = '';

//select clinica

$idclin = $_SESSION['IdClinica'] ;
$h = "SELECT * from clinicas where idclin='$idclin'";	
$resultado_even = mysqli_query($conn, $h);
$m = mysqli_fetch_array($resultado_even);



require_once __DIR__ . '/vendor/autoload.php';

include("alcom1_pronto.php");   
  
ob_clean();
$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
  $mpdf->SetTitle($_SESSION['a1_nome']);
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("estilo_alcom1.css");
 $mpdf->WriteHTML($css, 1);


$mpdf->AddPage('L', // L - landscape, P - portrait 
        '', '', '', '',
            15, // margin_left
        15, // margin right
       15, // margin top  - conteudo
       15, // margin bottom
        15, // margin header
        15); // margin footer
	//	$mpdf->SetJS('this.print();');
 $mpdf->WriteHTML($result);

$mpdf->AddPage('P', // L - landscape, P - portrait 
        '', '', '', '',
            25, // margin_left
        25, // margin right
       20, // margin top  - conteudo
       15, // margin bottom
        25, // margin header
        15); // margin footer
	//	$mpdf->SetJS('this.print();');
 $mpdf->WriteHTML($result2);
 
$mpdf->Output('RN de '.$_SESSION['a1_nome'].'.pdf', 'I');

exit; 

?>