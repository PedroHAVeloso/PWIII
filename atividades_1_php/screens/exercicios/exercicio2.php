<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleEx2</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx2;
      ?>
    </h3>
  </header>

  <main>
    <form action="" method="POST">
      <label for="inpNumero">Informe um número:</label><br/>
      <input type="number" required name="inpNumero" id="inpNumero"><br/>

      <input type="submit" name="btnAcao" value="Verificar">
    </form>

    <div class="resultado">
      <?php
      if (isset($_POST['btnAcao'])) {
        $intNumero = $_POST['inpNumero'];

        if ($intNumero % 2 == 0):
          echo "O número $intNumero é par.";
        else:
          echo "O número $intNumero é impar.";
        endif;
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