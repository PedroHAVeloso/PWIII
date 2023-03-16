<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleEx3</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx3;
      ?>
    </h3>
  </header>

  <main>
    <form action="" method="POST">
      <label for="inpNumero">Informe um número:</label><br/>
      <input type="number" required name="inpNumero" id="inpNumero"><br/>

      <input type="submit" name="btnAcao" value="Fibonacci">
    </form>

    <div class="resultado">
      <?php
      if (isset($_POST['btnAcao'])) {
        $intNumero = $_POST['inpNumero'];
        
        $fib_A = 0;
        $fib_B = 1;
        $fib_C = 0;

        while($fib_A <= $intNumero){
          $fib_A = $fib_B + $fib_C;
          $fib_C = $fib_B;
          $fib_B = $fib_A;
          if($fib_A <= $intNumero){
            echo "$fib_A <br />";
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