<?php
$result .= '<table class="table" width="600px" border=0>
	<tr><td  valign=top>
<table   class="table" border="0" style="border-width: 2px;border-style: solid;border-color:black;">
	<tr><td  width="50%"  style="padding: 2px 2px 2px 2px;" align="center"><font size="3" >IDENTIFICAÇÃO DO EMITENTE</td></tr>
	
<tr><td   style="padding: 2px 2px 2px 2px;" ><font size="3" >Nome: '.$_SESSION['UsuarioNome'].'</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >CRM: '.$_SESSION['crm'].'</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >Endereço: '.$m['endereco'].'</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >Telefone:</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >Cidade e UF: </td></tr>
	</table>
</td><td>
<table class="table" border="0" >
	<tr><td width="50%" style="padding: 2px 2px 2px 2px;" align="center"><font size="3" >RECEITUÁRIO DE CONTROLE ESPECIAL</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >DATA: '; if ($_SESSION['UsuarioData'] == 'Sim') { $result .= date('d/m/Y');} $result .= '</td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" >1ª VIA FARMÁCIA<br>2ª VIA PACIENTE </td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><font size="3" > </td></tr>
<tr><td  style="padding: 2px 2px 2px 2px;"><br></td></tr>

<tr><td  style="padding: 2px 2px 2px 2px;" align="center"><font size="3" >__________________<br>ASSINATURA</td></tr>

</table>
					
</td></tr></table>
<font size="2" face="Calibri" ><strong>Nome:</strong> '.$_SESSION['nome_av'].'</font><br>
<font size="2" face="Calibri" ><strong>Endereço:</strong> </font><br>';

$result .= '
<table class="table" border=0>';
if (!empty($_SESSION['receita'])) {
foreach ($_SESSION['receita'] as $index=> $med){
$viaadm[] = $med['via'];
$viaadmx = array_count_values($viaadm);	
}

foreach ($viaadmx as $via => $qtdvia) {
	$result .='
	<tr><td colspan=2 align=center><br></td></tr>';
foreach ($_SESSION['receita'] as $index=> $med){

$num = $index +1;	
	$result .='	
	
   <tr><td ><strong><font size="3" face="Calibri" >'.$num.'. '.$med['med'].'</strong></td><td align="right"><font size="3" face="Calibri" >'.$med['qtd'].' <a href="receituario.php?del='.$index.'" style="text-decoration: none;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="2"><font size="2" face="Calibri" >'.nl2br($med['pos']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
}	



}
 
}

if (!empty($_SESSION['txt'])) {
$result .= '	
	
   <tr><td ><font size="2" face="Calibri" >'.nl2br($_SESSION['txt']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
}
	
$result .= '</table>';
?>