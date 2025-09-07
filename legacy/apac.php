<?php  include "functions/config.php"; 
session_start();
$id_sus = $_GET['id_sus'];

	  $s = "SELECT * from sus WHERE id_sus=$id_sus";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$nome=$mod['nome'];
$endereco=$mod['endereco'];
}	
 ?> 



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Anísio Neto and Newton Lauer">  	
	<meta name="copyright" content="MedLauer">	
	<title>apac</title>
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
		<td align="center" style="font-size:14px; border: 1px solid black; font-weight: bold; padding: 4px" >LAUDO PARA SOLICITAÇÃO/AUTORIZAÇÃO DE<br>PROCEDIMENTO AMBULATORIAL 
		</td>
	</tr>
	</table>
	
	<table align="center" width="100%"> 
	<tr >
		<td colspan="2" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título1">IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (SOLICITANTE)</label>
		</td>
	</tr>
	<tr>
		<td style="width: 75%;" > 
			<label style=" background-color:white; font-size:8px; position:absolute;left:70px;top:115px" for="campo1">1-NOME DO ESTABELECIMENTO SOLICITANTE</label>
			<input  style="border:1px solid black; height:20px;" value="<?php echo $_SESSION['UsuarioClinica'];?>">	
		</td>
		<td>
			<label style=" background-color:white; font-size:8px; position:absolute;left:600px;top:115px" for="campo2">2- CNES</label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	</table>
	
	<table align="center" width="100%"> 
	<tr >
		<td colspan="4" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título2">IDENTIFICAÇÃO DO PACIENTE </label>
		</td>
	</tr>
	<tr>
		<td colspan="2"> 
			<label style=" background-color:white; font-size: 8px; position:absolute;left:70px;top:166px" for="campo3">3-NOME DO PACIENTE</label>
			<input  style="border:1px solid black; height:20px;" value="<?php echo $nome;    ?>">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:540px;top:166px" for="campo4">4- SEXO</label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:166px" for="campo5">5- N° DO PRONTUÁRIO</label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:193px" for="campo6">6- CARTÃO NACIONAL DE SAÚDE (CNS)</label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:410px;top:193px" for="campo7">7- DATA DE NASCIMENTO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:540px;top:193px" for="campo81">8.1- RAÇA/COR</label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:193px" for="campo82">8.2- ETNIA</label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td colspan="3"> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:218px" for="campo9">9- NOME DA MÃE </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:218px" for="campo10">10- TELEFONE DE CONTATO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td colspan="3"> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:244px" for="campo11">11- NOME DO RESPONSÁVEL </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:244px" for="campo12">12- TELEFONE DE CONTATO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td colspan="4"> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:269px" for="campo13">13- ENDEREÇO (RUA, N°, BAIRRO) </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
	</tr>
	<tr>
		<td width="50%" > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:295px" for="campo14">14- MUNICIPIO DE RESIDÊNCIA </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:400px;top:295px" for="campo15">15- CÓD. IBGE MUNICIPIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:540px;top:295px" for="campo16">16- UF </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:295px" for="campo17">17- CEP </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	</table>	

	<table align="center" width="100%"> 
	<tr >
		<td colspan="3" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título3">PROCEDIMENTO SOLICITADO </label>
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:48px;top:346px" for="campo18">18- CÓDIGO DO PROCEDIMENTO PRINCIPAL </label>
			<input  style="border:1px solid black; height:42px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:255px;top:346px" for="campo19">19- NOME DO PROCEDIMENTO PRINCIPAL </label>
			<input  style="border:1px solid black; height:42px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:590px;top:346px" for="campo20">20- QTDE </label>
			<input  style="border:1px solid black; height:42px;">
		</td>
	</tr>
	</table>	
	
	<table align="center" width="100%"> 
	<tr >
		<td colspan="3" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título4">PROCEDIMENTO(S) SECUNDÁRIO(S) </label>
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:416px" for="campo21">21- CÓDIGO DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:300px;top:416px" for="campo22">22- NOME DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:416px" for="campo23">23- QTDE </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px; position:absolute;left:55px;top:441px" for="campo24">24- CÓDIGO DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:300px;top:441px" for="campo25">25- NOME DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:441px" for="campo26">26- QTDE </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:467px" for="campo27">27- CÓDIGO DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:300px;top:467px" for="campo28">28- NOME DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:467px" for="campo29">29- QTDE </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:493px" for="campo30">30- CÓDIGO DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:300px;top:493px" for="campo31">31- NOME DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:493px" for="campo32">32- QTDE </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:518px" for="campo33">33- CÓDIGO DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td width = "50%">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:300px;top:518px" for="campo34">34- NOME DO PROCEDIMENTO SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:640px;top:518px" for="campo35">35- QTDE </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	</table>
	
	<table align="center" width="100%"> 
	<tr >
		<td colspan="4" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título5">JUSTIFICATIVA DO(S) PROCEDIMENTO(S) SOLICITADO(S) </label>
		</td>
	</tr>
	<tr>
		<td width = "50%"> 
			<label style=" background-color:white; font-size: 8px; position:absolute;left:70px;top:568px" for="campo36">36- DESCRIÇÃO DO DIAGNÓTICO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px; position:absolute;left:408px;top:568px" for="campo37">37- CID 10 PRINCIPAL </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:530px;top:568px" for="campo38">38- CID 10 SECUNDÁRIO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td>
			<label style=" background-color:white; font-size: 7px;position:absolute;left:640px;top:568px" for="campo39">39- CID 10 CAUSAS ASSOCIADAS </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	<tr>
		<td colspan="4"> 
			<label style=" background-color:white; font-size: 8px; position:absolute;left:70px;top:595px" for="campo40">40- OBSERVAÇÕES </label>
			<input  style="border:1px solid black; height:160px;">	
		</td>
	</tr>	
	</table>

	<table align="center" width="100%"> 
	<tr >
		<td colspan="3" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título6">SOLICITAÇÃO </label>
		</td>
	</tr>
	<tr>
		<td width = "50%"> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:783px" for="campo41">41- NOME DO PROFISSIONAL SOLICITANTE </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:410px;top:783px" for="campo42">42- DATA DA SOLICITAÇÃO </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td rowspan ="2">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:590px;top:783px" for="campo45">45- ASSINATURA E CARIMBO </label>
			<input  style="border:1px solid black; height:60px;">
		</td>
	</tr>
	<tr>
		<td > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:816px" for="campo43">43- DOCUMENTO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td > 
			<label style=" background-color:white; font-size: 6px;position:absolute;left:390px;top:816px" for="campo44">44- N° DOCUMENTO (CNS/CPF) DO PROFISSIONAL SOLICITANTE </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
	</tr>	
	</table>
	
	<table align="center" width="100%"> 
	<tr >
		<td colspan="3" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título7"> AUTORIZAÇÃO </label>
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:871px" for="campo46">46- NOME DO PROFISSIONAL AUTORIZADOR </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:285px;top:871px" for="campo47">47- CÓD. ÓRGÃO EMISSOR </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
		<td rowspan ="2">
			<label style=" background-color:white; font-size: 8px;position:absolute;left:560px;top:871px" for="campo52">52- N° DA AUTORIZAÇÃO (APAC) </label>
			<input  style="border:1px solid black; height:60px;">
		</td>
	</tr>
	<tr>
		<td > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:904px" for="campo48">48- DOCUMENTO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td > 
			<label style=" background-color:white; font-size: 6px;position:absolute;left:285px;top:904px" for="campo49">49- N° DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
	</tr>	
	<tr>
		<td > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:55px;top:935px" for="campo50">50- DATA DA AUTORIZAÇÃO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:285px;top:935px" for="campo51">51- ASSINATURA E CARIMBO </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td > 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:560px;top:935px" for="campo53">53- PERIODO DE VALIDADE DA APAC </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
	</tr>	
	</table>

	<table align="center" width="100%"> 
	<tr >
		<td colspan="2" style="background-color: black; color: white; text-align: center;">
			<label style="font-size:12px; font-weight: bold;" for="título8"> IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (EXECUTANTE) </label>
		</td>
	</tr>
	<tr>
		<td> 
			<label style=" background-color:white; font-size: 8px;position:absolute;left:70px;top:986px" for="campo54">54- NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE </label>
			<input  style="border:1px solid black; height:20px;">	
		</td>
		<td>
			<label style=" background-color:white; font-size: 8px;position:absolute;left:450px;top:986px" for="campo55">55- CNES </label>
			<input  style="border:1px solid black; height:20px;">
		</td>
	</tr>
	</table>
   
	</td></tr>    
  </table>
 </section>
</body>
</html>