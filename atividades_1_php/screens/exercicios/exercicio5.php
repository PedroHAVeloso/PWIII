<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleEx5</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx5;
      ?>
    </h3>
  </header>

  <main>
    <div class="resultado">
      <?php
        $intLimite = 10000;
        $intSoma = 0;
        for($iPerfeitos = 1; $iPerfeitos < $intLimite; $iPerfeitos++){
          for($iVerificar = 1; $iVerificar < $iPerfeitos; $iVerificar++){
            if($iPerfeitos % $iVerificar == 0){
              $intSoma += $iVerificar;
            }
          } 
          if($intSoma == $iPerfeitos){
            echo "$intSoma <br />";
          }
          $intSoma = 0;
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