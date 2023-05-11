<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleEx6</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx6;
      ?>
    </h3>
  </header>

  <main>
    <form action="" method="POST">
      <label for="inpNumero">Informe um número:</label><br />
      <input type="number" required name="inpNumero" id="inpNumero"><br />

      <input type="submit" name="btnAcao" value="Piramidiar">
    </form>

    <div class="resultado">
      <?php
      if (isset($_POST['btnAcao'])) {
        $intNumero = $_POST['inpNumero'];
        
        for($iPiramide = 0; $iPiramide <= $intNumero; $iPiramide++){
          for($iExibir = 1; $iExibir <= $iPiramide; $iExibir++){
            echo $iPiramide * $iExibir . " ";
          }
          echo "<br />";
        }

        for($intNumero = $intNumero - 1; $intNumero >= 0; $intNumero--){
          for($iExibir = 1; $iExibir <= $intNumero; $iExibir++){
            echo $intNumero * $iExibir . " ";
          }
          echo "<br />";
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