<?php

 
$result .= 
'<table  class="table" >
<tr><td align="center"><br></td></tr>
<tr><td align="center"><br></td></tr>
<tr><td align="center">
<font size="4" face="Calibri"><strong>'; if (!empty($_SESSION['atestado'])) {$result .= $_SESSION['titulo'];} $result .= '</strong></font>
</td></tr>
<tr><td align="center"><br></td></tr>
<tr><td align="center"><br></td></tr>
<tr><td align="center"><br></td></tr>
</table>
<table class="table">';
if (!empty($_SESSION['atestado'])) {

$result .= '	
	
  <tr><td align="justify"><font size="4" face="Calibri" >'.nl2br($_SESSION['atestado']).'</font></td></tr>
    <tr><td colspan="2"><br></td></tr>';

}



	
$result .= '</table>';
?>