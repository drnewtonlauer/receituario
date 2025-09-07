<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Gerenciador</title>
	<meta htpp-equiv="content-type" content="text/html;charset=UTF-8">
	<meta link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<meta link rel="icon" href="/favicon-32x32.png" type="image/png" sizes="32x32">
	<meta link rel="icon" href="/favicon-16x16.png" type="image/png" sizes="16x16">
	<meta link rel="manifest" href="/site.webmanifest">
	<meta link rel="stylesheet" href="css/bootstrap.css">

	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<meta name="author" content="Anísio Neto and Newton Lauer">  	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="copyright" content="MedLauer">

	<script src="js/moment.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="functions/funcs.js" type="text/javascript"></script>

	<style>
   /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
  body {
      background-color: #f8fafb;
     
    }

	  
#resultado{
position: absolute;
z-index: 9999; 
}
#resultado2{
position: absolute;
z-index: 9999; 
}

.table2{
font-family:Calibri;	
 width:100%;
 }

.xx {
  border-style: solid;
  border-bottom-width: 0;
  border-top-width: 1px;
  border-right-width: 0;
  border-left-width: 0;
}
	</style>    
</head>

<body onload="document.Form.med.focus();">

<!--  BARRA DE NAVEGAÇÃO -->
 <style>
.navbar-default {
  background-color: #2980b9;
  border-color: #2980b9;
}
.navbar-default .navbar-brand {
  color: #ffffff;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #e3e3e3;
}
.navbar-default .navbar-text {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #e3e3e3;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #e3e3e3;
  background-color: #1e74a5;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #e3e3e3;
  background-color: #1e74a5;
}
.navbar-default .navbar-toggle {
  border-color: #1e74a5;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #1e74a5;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ffffff;
}
.navbar-default .navbar-link {
  color: #ffffff;
}
.navbar-default .navbar-link:hover {
  color: #e3e3e3;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #e3e3e3;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #e3e3e3;
    background-color: #1e74a5;
  }
}
.navbar-brand {
  padding: 0px; /* firefox bug fix */
}
.navbar-brand>img {
  height: 100%;
  padding: 10px; /* firefox bug fix */
  width: auto;
} 
.panel-default > .panel-heading {
  background-color: white;
}
	::-webkit-scrollbar-track {
    background-color: #F4F4F4;
}
::-webkit-scrollbar {
    width: 6px;
    background: #F4F4F4;
}
::-webkit-scrollbar-thumb {
    background: #dad7d7;
}
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img alt="Brand" src="img/logo6.png"></a>
    </div>

    
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">

      <ul class="nav navbar-nav">      
        <li><a href="index.php">Painel</a></li>

		

				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu">          
	
		

<li><a href="pesquisamedicamento.php">Medicamento</a></li>
<li><a href="pesquisamedicamento_ped.php">Drogas Pediátricas</a></li>
<li><a href="pesquisasol.php">Solicitação</a></li>		
				
          </ul>
        </li>
      </ul>
	  
	  
		<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		  <span class="glyphicon glyphicon-user"></span>  .		  <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
		  <li class="dropdown-header">	</li>
			  <li><a href="logout.php">Sair</a></li>		
          </ul>
        </li>      
    </ul> 
    </div>
  </div>
</nav>

<!--  DIV --> 
<div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; "> 
		<div class="container">
			<div class="row">
				<div class="col-md-9">

  <div class="panel panel-default">
	<div class="panel-heading">
	<div class="row">
	
	<div class="col-md-6" align="left">
		   <button type="button" onclick="window.open('gerenciador.php)" class="btn btn-sm btn-default">Limpar</button>

		   
		<div class="btn-group">
  <button type="button" onclick="window.open('imprimirrec.php')" class="btn btn-primary  btn-sm">AIH</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">APAC</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">SOLICITAÇÃO DE ANTIMICROBIANOS</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">PEDIDO DE TRANSFERÊNCIA</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">SOLICITAÇÃO DE HEMOTERÁPICOS</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">PEDIDO DE EXAMES</button>

  <br> <br>
  <button type="button" onclick="" class="btn btn-primary  btn-sm"> INTERCONSULTA INFECTOLOGIA</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm"> INTERCONSULTA CIRURGIA GERAL</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm"> INTERCONSULTA NEFROLOGIA</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm"> INTERCONSULTA PEDIATRIA</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm"> INTERCONSULTA NEUROCIRURGIA</button>
  <br> <br> 
  <button type="button" onclick="" class="btn btn-primary  btn-sm">PRESCRIÇÃO</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">RECEITUÁRIO</button>
  <button type="button" onclick="" class="btn btn-primary  btn-sm">ATESTADO MÉDICO</button> 
  
</div>
		</div>	
		
		</div>
</div>		
		
  <div class="panel-body">
						
							<div class="col-sm-12">
										
	<br>
	
<table class="table2">
<tbody>
	<tr><td colspan=""><font style="color:gray;"><em>Preencha todos os campos</em></font></td></tr>
	
<!-- FORMULÁRIO IDENTIFICAÇÃO -->
 <tr><td   <font style="color:gray;"><em>Gerenciador</em></font></td></tr> 
    <tr><td
	<form action="" method="post"> 
        <label for="be">BE:</label>
        <input type="text" name="be" id="be" oninput="copyValue('be', 'be2')" onblur="updateOriginalValue('be', 'be2')"><br>

        <label for="nomedopaciente">Nome do Paciente:</label>
        <input type="text" name="nomedopaciente" id="nomedopaciente" oninput="copyValue('nomedopaciente', 'nomedopaciente2')" onblur="updateOriginalValue('nomedopaciente', 'nomedopaciente2')"><br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade" oninput="copyValue('idade', 'idade2')" onblur="updateOriginalValue('idade', 'idade2')"><br>
		
		<label for="dn">Data de Nascimento:</label>
        <input type="text" name="dn" id="dn" oninput="copyValue('dn', 'dn2')" onblur="updateOriginalValue('dn', 'dn2')"><br>

		<label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso" oninput="copyValue('peso', 'peso2')" onblur="updateOriginalValue('peso', 'peso2')"><br>

		<label for="hda">HDA:</label>
        <input type="text" name="hda" id="hda" oninput="copyValue('hda', 'hda2')" onblur="updateOriginalValue('hda', 'hda2')"><br>

		<label for="diagnostico">Diagnóstico:</label>
        <input type="text" name="diagnostico" id="diagnostico" oninput="copyValue('diagnostico', 'diagnostico2')" onblur="updateOriginalValue('diagnostico', 'diagnostico2')"><br>

		<label for="cid">CID:</label>
        <input type="text" name="cid" id="cid" oninput="copyValue('cid', 'cid2')" onblur="updateOriginalValue('cid', 'cid2')"><br>

		<label for="nomedomedico">Nome do Médico:</label>
        <input type="text" name="nomedomedico" id="nomedomedico" oninput="copyValue('nomedomedico', 'nomedomedico')" onblur="updateOriginalValue('nomedomedico', 'nomedomedico')"><br>

		<label for="nomedamae">Nome da Mãe:</label>
        <input type="text" name="nomedamae" id="nomedamae" oninput="copyValue('nomedamae', 'nomedamae2')" onblur="updateOriginalValue('nomedamae', 'nomedamae2')"><br>

		<label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" oninput="copyValue('telefone', 'telefone2')" onblur="updateOriginalValue('telefone', 'telefone2')"><br>

		<label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" oninput="copyValue('endereco', 'endereco2')" onblur="updateOriginalValue('endereco', 'endereco2')"><br>

		<label for="cns">CNS:</label>
        <input type="text" name="cns" id="cns" oninput="copyValue('cns', 'cns')" onblur="updateOriginalValue('cns', 'cns2')"><br>
		
		<label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" oninput="copyValue('cep', 'cep')" onblur="updateOriginalValue('cep', 'cep2')"><br>

		<label for="dih">DIH:</label>
        <input type="text" name="dih" id="dih" oninput="copyValue('dih', 'dih')" onblur="updateOriginalValue('dih', 'dih2')"> 
	</form> </td></tr>
	<tr><td
       Copia de repetição   
	<form action="" method="post">
        <label for="BE_copy">BE:</label>
        <input type="text" name="be2" id="be2" oninput="updateOriginalValue('be', 'be2')"><br>

        <label for="nomedopaciente">Nome do Paciente:</label>
        <input type="text" name="nomedopaciente" id="nomedopaciente2" oninput="updateOriginalValue('nomedopaciente', 'nomedopaciente2')"><br>

        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade2" oninput="updateOriginalValue('idade', 'idade2')"><br>
		
		<label for="dn">Data de Nascimento:</label>
        <input type="text" name="dn" id="dn2" oninput="updateOriginalValue('dn', 'dn2')" ><br>

		<label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso2" oninput="updateOriginalValue('peso', 'peso2')" ><br>

		<label for="hda">HDA:</label>
        <input type="text" name="hda" id="hda2" oninput="updateOriginalValue('hda', 'hda2')" ><br>

		<label for="diagnostico">Diagnóstico:</label>
        <input type="text" name="diagnostico" id="diagnostico2" oninput="updateOriginalValue('diagnostico', 'diagnostico2')" ><br>

		<label for="cid">CID:</label>
        <input type="text" name="cid" id="cid2" oninput="updateOriginalValue('cid', 'cid2')" ><br>

		<label for="nomedomedico">Nome do Médico:</label>
        <input type="text" name="nomedomedico" id="nomedomedico2" oninput="updateOriginalValue('nomedomedico', 'nomedomedico2')" ><br> 

		<label for="nomedamae">Nome da Mãe:</label>
        <input type="text" name="nomedamae" id="nomedamae2" oninput="updateOriginalValue('nomedamae', 'nomedamae2')" ><br>

		<label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone2" oninput="updateOriginalValue('telefone', 'telefone2')" ><br>

		<label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco2" oninput="updateOriginalValue('endereco', 'endereco2')" ><br>

		<label for="cns">CNS:</label>
        <input type="text" name="cns" id="cns2" oninput="updateOriginalValue('cns', 'cns2')" ><br>
		
		<label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep2" oninput="updateOriginalValue('cep', 'cep2')" ><br>

		<label for="dih">DIH:</label>
        <input type="text" name="dih" id="dih2" oninput="updateOriginalValue('dih', 'dih2')" ><br>
    
    </form> </td></tr><br>
	
	<script>
        function copyValue(originalId, copyId) {
            var originalValue = document.getElementById(originalId).value;
			document.getElementById(copyId).value = originalValue;
			copyElement.value = originalElement.value;
        }
		function updateOriginalValue(originalId, copyId) {
            var originalElement = document.getElementById(originalId);
            var copyElement = document.getElementById(copyId);
		    originalElement.value = copyElement.value;
        }		
    </script>
		
		<br>
	
</tbody></table>
<br>
	
</div></div>

</div>		
</div>
</div>
</div>
    </div>

</body>
</html>



