<?php  
include"functions/config.php";
session_start();
$peso = $_SESSION['peso_av'];
$header = '';
$footer = '';

//select clinica

$idclin = $_SESSION['IdClinica'] ;
$h = "SELECT * from clinicas where idclin='$idclin'";	
$resultado_even = mysqli_query($conn, $h);
$m = mysqli_fetch_array($resultado_even);
	



require_once __DIR__ . '/vendor/autoload.php';




include("receitapronta_ped.php");      
ob_clean();
$mpdf = new \Mpdf\Mpdf(['format' => $_SESSION['UsuarioPapel']]);
  $mpdf->SetTitle($_SESSION['nome_av']);
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("estilo.css");
 $mpdf->WriteHTML($css, 1);

if ($_SESSION['UsuarioCab'] == 'Sim') {
include("headerprt.php");
include("footerprt.php");
 $mpdf->SetHTMLHeader($header);  
  $mpdf->SetHTMLFooter($footer);}
$mpdf->AddPage('', // L - landscape, P - portrait 
        '', '', '', '',
            15, // margin_left
        15, // margin right
       60, // margin top  - conteudo
       35, // margin bottom
        15, // margin header
        20); // margin footer
	//	$mpdf->SetJS('this.print();');
 $mpdf->WriteHTML($result);

$mpdf->Output('Prescrição de '.$_SESSION['nome_av'].'.pdf', 'I');

exit; 

?>