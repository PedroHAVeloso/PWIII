<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/atividades_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/atividades_php/shared/constants/titles.php");

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
      <label for="inpDias">Informe um tempo em dias:</label>
      <input type="number" name="inpDias" id="inpDias" required>

      <input type="submit" name="btnAcao" value="Calcular">
    </form>

    <div class="resultado">
      <p>
      <?php
        if(isset($_POST['btnAcao'])){
          $intDias = $_POST['inpDias'];
          echo "<hr> Em $intDias dias se passaram: <br />";

          // Calcula o tempo que passaria (os dias) em outras medidas
          $intHoras = $intDias * 24;
          $intMinutos = $intHoras * 60;
          $intSegundos = $intMinutos * 60;

          // Informa os tempos na tela
          echo "
            $intHoras hora(s) <br />
            ou $intMinutos minuto(s) <br />
            ou $intSegundos segundo(s)
          ";
        }
      ?>
      </p>
    </div>
  </main>

  <!-- FOOTER -->
  <?php
    require_once("$pastaPadrao/PWIII/atividades_php/shared/footer/footer.php");
  ?>
  <!-- /FOOTER -->
</body>
</html>