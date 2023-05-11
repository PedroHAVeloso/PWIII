<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");

  echo "<title>$titleEx1</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx1;
      ?>
    </h3>
  </header>

  <main>
    <form action="" method="POST">
      <label for="inpNumero1">Número 1:</label><br/>
      <input type="number" required name="inpNumero1" id="inpNumero1"><br/>

      <label for="inpNumero2">Número 2:</label><br/>
      <input type="number" required name="inpNumero2" id="inpNumero2"><br/>

      <input type="submit" name="btnAcao" value="Somar">
      <input type="submit" name="btnAcao" value="Subtrair">
      <input type="submit" name="btnAcao" value="Multiplicar">
      <input type="submit" name="btnAcao" value="Dividir">
    </form>

    <div class="resultado">
      <?php
      if (isset($_POST['btnAcao'])) {
        $douNumero1 = $_POST['inpNumero1'];
        $douNumero2 = $_POST['inpNumero2'];
        $strAcao = $_POST['btnAcao'];

        switch ($strAcao) {
          case "Somar":
            echo "Resultado da Adição: " . $douNumero1 + $douNumero2 . ".";
            break;

          case "Subtrair":
            echo "Resultado da Subtração: " . $douNumero1 - $douNumero2 . ".";
            break;

          case "Multiplicar":
            echo "Resultado da Multiplicação: " . $douNumero1 * $douNumero2 . ".";
            break;

          case "Dividir":
            if ($douNumero2 == 0):
              echo "Não é possível dividir um número por 0.";
            else:
              echo "Resultado da Divisão: " . $douNumero1 / $douNumero2 . ".";
            endif;
            break;
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