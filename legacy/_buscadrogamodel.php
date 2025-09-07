<?php
include("functions/config.php");
 
$valor = $_GET['valor'];
if ($valor !=''){
$valor = str_replace("'","",$valor);
$valor = str_replace("%","",$valor);



$sql = "SELECT * FROM medicamento WHERE nome LIKE '%".$valor."%' order by nome LIMIT 20";
$result = $conn->query($sql);
 
echo '

<div class="panel panel-default">
  <div class="panel-body" style="padding-top:0px;padding-bottom:0px;padding-left:0px;padding-right:0px;">	
<div class="list-group" style="font-size:14px;padding-bottom:0px;margin-bottom:0px; ">

';
while ($rdroga = mysqli_fetch_array($result)) {

	echo '<button type="button" class="list-group-item" style="padding-bottom: 3px; padding-top: 3px;border:0px;" 
	onclick="location.href=\'modeloreceita.php?id2='.$rdroga['id'].'\'">'.$rdroga['nome'].'</button>';}

	echo'</div></div></div>';
}
?>