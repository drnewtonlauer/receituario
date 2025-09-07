<?php	

		if  ($_SESSION['UsuarioClinica'] == '') {		 
		$nomeclinica = '';} else {
		$nomeclinica = $_SESSION['UsuarioClinica'];}

?>
<style>
.navbar-default {
  background-color: #0c6af2;
  border-color: #0c6af2;
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
  background-color: #0c6af2;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #e3e3e3;
  background-color: #0c6af2;
}
.navbar-default .navbar-toggle {
  border-color: #0c6af2;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #0c6af2;
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
    background-color: #0c6af2;
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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img alt="Brand" src="img/logo1.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">      
        <li><a href="index.php">Painel</a></li>

      </ul>
      <ul class="nav navbar-nav">      
       

		

      </ul>
	  
	  
		<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		  <span class="glyphicon glyphicon-user"></span> <?php echo ' '.$_SESSION['UsuarioNome']; ?>
		  <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
		  <li class="dropdown-header">	</li>
			  <li><a href="logout.php">Sair</a></li>		
          </ul>
        </li>      
    </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>