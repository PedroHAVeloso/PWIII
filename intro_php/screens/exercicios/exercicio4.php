<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleEx4</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx4;
      ?>
    </h3>
  </header>

  <main>
    <div class="resultado">
      <?php
        $intLimite = 400;
        for($iPrimos = 1; $iPrimos <= $intLimite; $iPrimos++){
          for($iVerificar = 1; $iVerificar < $iPrimos; $iVerificar++){
            if($iPrimos % $iVerificar == 0){
              
            }
          }
        }
      ?>
    </div>
  </main>

  <!-- FOOTER -->
  <?php
    require_once("$pastaPadrao/PWIII/intro_php/shared/footer/footer.php");
  ?>
  <!-- /FOOTER -->
</body>
</html>