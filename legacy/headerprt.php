<?php

$header .= '

	<table class="table">
	<tr><td   colspan="3" ></td></tr>
	<tr><td ></td><td >';
	if (!empty($m['logo'])) {
$header .= '<img  src="'.$m['logo'].'" >';		
		
	} else {
		
$header .=	
'<font size="7" face="Calibri" >'.$m['nome'].'</font>';	
	}
	
	
$header .=	'</td>
	</font></tr>
		</table>
<table  class="table" >
<tr><td align="CENTER">
<br>
</td></tr>
</table>';?>
