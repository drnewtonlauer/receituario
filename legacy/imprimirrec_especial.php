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

include("receitapronta_especial.php");       

ob_clean();
$mpdf = new \Mpdf\Mpdf(['format' => $_SESSION['UsuarioPapel']]);
  $mpdf->SetTitle($_SESSION['nome_av']);
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("estilo2.css");
 $mpdf->WriteHTML($css, 1);
if ($_SESSION['UsuarioCab'] == 'Sim') {
include("headerprt.php");
 $mpdf->SetHTMLHeader($header);  }
  
  
include("footer_especial.php");
$mpdf->SetHTMLFooter($footer);
$mpdf->AddPage('', // L - landscape, P - portrait 
        '', '', '', '',
    15, // margin_left
        15, // margin right
       60, // margin top  - conteudo
       35, // margin bottom
        15, // margin header
        20); // margin footer
 $mpdf->WriteHTML($result);

$mpdf->Output('Prescrição de '.$_SESSION['nome_av'].'.pdf', 'I');

exit; 

?>
    
