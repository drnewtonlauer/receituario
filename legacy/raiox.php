<?php  
include"verificalogin.php";
include"functions/config.php";




if (isset($_GET['op'])){
unset($_SESSION['solicitacao']);	
}




if (empty($_SESSION['solicitacao'])) {
$_SESSION['solicitacao'] = [];
}





?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Raio-X</title><?php include "favicon.php"; ?>

	<script src='js/moment.min.js'></script>	
	

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
	
	<script type="text/javascript" src="functions/funcs.js"></script>
	



	
	<style>
   /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
  body {
      background-color: #f8fafb;
     
    }



.table2{
font-family:Calibri;	
 width:100%;
 }


  </style>	
<style id="jsbin-css">


</style>
  </head>
<script>
var posicao = localStorage.getItem('posicaoScroll');

/* Se existir uma opção salva seta o scroll nela */
if(posicao) {    
    /* Timeout necessário para funcionar no Chrome */
    setTimeout(function() {
        window.scrollTo(0, posicao);
    }, 1);
}

/* Verifica mudanças no Scroll e salva no localStorage a posição */
window.onscroll = function (e) {
    posicao = window.scrollY;
    localStorage.setItem('posicaoScroll', JSON.stringify(posicao));
}
</script>
<body >
<?php include "menu.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
			<div class="col-md-2">
</div>
				<div class="col-md-8">
	<div class="panel panel-default">	
		<div class="panel-heading" >
		<div class="row">
	<div class="col-md-6" align=left>


	</div>
	<div class="col-md-6" align=right>
		 
	<form class="form-horizontal Form" action="functions/raiox.php" target="_blank" id="Form" name="Form" method="POST" autocomplete="off">		
    <button type="button"  onclick="location.href='raiox.php?op=1'"  class="btn btn-sm btn-default" >Limpar</button>
  <button type="submit"   class="btn btn-primary  btn-sm">Gerar Requisição</button>
  

		</div>	
		
		
		</div></div>
						<div class="panel-body">

							
													<div class="col-sm-12">
<br>
								<div  align="left"><strong><font size="3" face="Calibri" >Nome: </strong><?php echo$_SESSION['nome_av'];?></font></div><br>
	
<BR>



				
				
				
				
				<div class="form-group form-group-sm" >
					<div class="col-sm-12">
<font style="font-size:12px;" face="Calibri" >
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk1" class="checkbox" name="chk1" value="RX DE CRÂNIO AP + PERFIL"><label for="chk1"><strong>CRÂNIO</strong> AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk0" class="checkbox" name="chk0" value="RX DE OSSOS DA FACE"><label for="chk0"><strong>OSSOS DA FACE</strong> </label></div>
<div class="checkbox"><input type="checkbox" id="chk3" class="checkbox" name="chk3" value="RX DE TÓRAX AP"><label for="chk3"><strong>TÓRAX</strong> AP </label></div>
<div class="checkbox"><input type="checkbox" id="chk4" class="checkbox" name="chk4" value="RX DE QUADRIL AP"><label for="chk4"><strong>QUADRIL</strong> AP </label></div>

</div>
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk7" class="checkbox" name="chk7" value="RX DE ABDÔMEN EM ORTOSTASE"><label for="chk7"><strong>ABDÔMEN</strong> EM ORTOSTASE </label></div>
<div class="checkbox"><input type="checkbox" id="chk2" class="checkbox" name="chk2" value="RX DE COLUNA CERVICAL AP + PERFIL"><label for="chk2"><strong>COLUNA CERVICAL</strong> AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk5" class="checkbox" name="chk5" value="RX DE COLUNA TORÁCICA AP + PERFIL"><label for="chk5"><strong>COLUNA TORÁCICA</strong> AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk6" class="checkbox" name="chk6" value="RX DE COLUNA LOMBAR AP + PERFIL"><label for="chk6"><strong>COLUNA LOMBAR</strong> AP + PERFIL </label></div>


</div>
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk8" class="checkbox" name="chk8" value="RX DE OMBRO DIREITO AP + PERFIL"><label for="chk8"><strong>OMBRO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk9" class="checkbox" name="chk9" value="RX DE COTOVELO DIREITO AP + PERFIL"><label for="chk9"><strong>COTOVELO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk10" class="checkbox" name="chk10" value="RX DE ANTEBRAÇO DIREITO AP + PERFIL"><label for="chk10"><strong>ANTEBRAÇO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk11" class="checkbox" name="chk11" value="RX DE PUNHO DIREITO AP + PERFIL"><label for="chk11"><strong>PUNHO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk12" class="checkbox" name="chk12" value="RX DE MÃO DIREITA AP + OBLÍQUO"><label for="chk12"><strong>MÃO</strong> DIREITA AP + OBLÍQUO </label></div>

</div>
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk13" class="checkbox" name="chk13" value="RX DE OMBRO ESQUERDO AP + PERFIL"><label for="chk13"><strong>OMBRO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk14" class="checkbox" name="chk14" value="RX DE COTOVELO ESQUERDO AP + PERFIL"><label for="chk14"><strong>COTOVELO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk15" class="checkbox" name="chk15" value="RX DE ANTEBRAÇO ESQUERDO AP + PERFIL"><label for="chk15"><strong>ANTEBRAÇO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk16" class="checkbox" name="chk16" value="RX DE PUNHO ESQUERDO AP + PERFIL"><label for="chk16"><strong>PUNHO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk17" class="checkbox" name="chk17" value="RX DE MÃO ESQUERDA AP + OBLÍQUO"><label for="chk17"><strong>MÃO</strong> ESQUERDA AP + OBLÍQUO </label></div>

</div>
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk18" class="checkbox" name="chk18" value="RX DE COXA DIREITA AP + PERFIL"><label for="chk18"><strong>COXA</strong> DIREITA AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk19" class="checkbox" name="chk19" value="RX DE JOELHO DIREITO AP + PERFIL"><label for="chk19"><strong>JOELHO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk20" class="checkbox" name="chk20" value="RX DE PERNA DIREITA AP + PERFIL"><label for="chk20"><strong>PERNA</strong> DIREITA AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk21" class="checkbox" name="chk21" value="RX DE TORNOZELO DIREITO AP + PERFIL"><label for="chk21"><strong>TORNOZELO</strong> DIREITO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk22" class="checkbox" name="chk22" value="RX DE PÉ DIREITO AP + OBLÍQUO"><label for="chk22"><strong>PÉ</strong> DIREITO AP + OBLÍQUO </label></div>

</div>
<div class="col-sm-6">
<div class="checkbox"><input type="checkbox" id="chk23" class="checkbox" name="chk23" value="RX DE COXA ESQUERDA AP + PERFIL"><label for="chk23"><strong>COXA</strong> ESQUERDA AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk24" class="checkbox" name="chk24" value="RX DE JOELHO ESQUERDO AP + PERFIL"><label for="chk24"><strong>JOELHO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk25" class="checkbox" name="chk25" value="RX DE PERNA ESQUERDA AP + PERFIL"><label for="chk25"><strong>PERNA</strong> ESQUERDA AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk26" class="checkbox" name="chk26" value="RX DE TORNOZELO ESQUERDO AP + PERFIL"><label for="chk26"><strong>TORNOZELO</strong> ESQUERDO AP + PERFIL </label></div>
<div class="checkbox"><input type="checkbox" id="chk27" class="checkbox" name="chk27" value="RX DE PÉ ESQUERDO AP + OBLÍQUO"><label for="chk27"><strong>PÉ</strong> ESQUERDO AP + OBLÍQUO </label></div>
<br><br><br><br><br><br><br><br><br><br><br>
</div>

</div>
</div>







</font> 

</form>
<br><br><br>
	
</div></div>

</div>			
</div>
<div class="col-md-2">
</div>
</div>
    </div>





</body></html>