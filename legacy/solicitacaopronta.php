<?php

 
$result .= 
'<table  class="table" >
<tr><td align="center"><br></td></tr>
<tr><td align="left">
<font size="3" face="Calibri" ><strong>Nome: </strong><font size="3" face="Calibri" >'.$_SESSION['nome_av'].'</font>
</td></tr>
<tr><td align="center"><br></td></tr>

</table>
<table class="table">';

if (!empty($_SESSION['solicitacao'])) {
	$result .= '<tr><td></br></td></tr>';
foreach ($_SESSION['solicitacao'] as $index=> $med){
	$num = $index+1;

$result .= '	
	
   <tr><td ><font size="3" face="Calibri" ><strong>'.$num.'.</strong><font size="3" face="Calibri" > '.nl2br($med).'</td></tr>
 ';

}}

if (!empty($_SESSION['txt'])) {
$result .= '	
	
   <tr><td ><font size="3" face="Calibri" >'.nl2br($_SESSION['txt']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
}
	
$result .= '</table>';
?>