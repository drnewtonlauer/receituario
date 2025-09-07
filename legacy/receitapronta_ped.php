<?php

 
$result .= 
'<table  class="table" >

<tr><td align="left">
<font size="3" face="Calibri" ><strong>Nome: </strong><font size="3" face="Calibri" >'.$_SESSION['nome_av'].'</font>
</td></tr>
</table>
<table class="table">
	<tr><td colspan=2 align=center><br></td></tr>';
foreach ($_SESSION['receita_ped'] as $index=> $med){

$num = $index +1;
$dose = ($med['calc'] * $peso);		
	$result .='	
	
   <tr><td ><strong><font size="3" face="Calibri" >'.$num.'. '.$med['med'].'</td></STRONG><td align="right"><font size="3" face="Calibri" >'.$med['qtd'].' </td></tr>
   <tr><td colspan="2"><font size="2" face="Calibri" >'; 
   
   $result .=nl2br($med['pos']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
}	


	$result .= '</table>';

?>