<?php

 
$result .= 
'<table  class="table" >

<tr><td align="left">
<font size="3" face="Calibri" ><strong>Nome: </strong><font size="3" face="Calibri" >'.$_SESSION['nome_av'].'</font>
</td></tr>
</table>
<table class="table">
<tr><td colspan=2 align=center><br></td></tr>';
if (!empty($_SESSION['receita'])) {

	
foreach ($_SESSION['receita'] as $index=> $med){

$num = $index +1;	
	$result .='	
	

	

   <tr><td ><strong><font size="3" face="Calibri" >'.$num.'. '.$med['med'].'</strong></td><td align="right"><font size="3" face="Calibri" >'.$med['qtd'].' <a href="receituario.php?del='.$index.'" style="text-decoration: none;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="2"><font size="2" face="Calibri" >'.nl2br($med['pos']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
	
} 
}


	
$result .= '</table>';
?>