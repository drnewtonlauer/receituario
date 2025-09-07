<?php	$footer .= '
<table class="table"  >

<tr><td align="center">
<font size="2" face="Calibri" >'.$_SESSION['UsuarioNome'].'<BR>
'.$_SESSION['especialidade'].'<BR>
CRM: '.$_SESSION['crm'].'</font>
</td><td align="center"></td></tr>


<tr><td align="center">
<font size="2" face="Calibri" ><BR>Data: ';
if ($_SESSION['UsuarioData'] == 'Sim') { $footer .= date('d/m/Y');} else {$footer .= '_____/_____/________';}

$footer .= '</font>
</td><td align="center"></td></tr>
</table>
<table class="table"  >


<tr><td align="center" COLSPAN="2"><font size="2" face="Calibri" >
	'.$m['endereco'];
IF ($m['telefone'] != '(00) 00000-0000') { $footer .= '	- 
Tel: '.$m['telefone'];}
$footer .= '</td></tr>

</table>';?>
