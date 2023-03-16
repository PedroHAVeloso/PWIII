<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/intro_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/intro_php/shared/constants/titles.php");
  
  echo "<title>$titleIndex</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>
  <main>
    <h3>Lista de exercícios em php:</h3>
    <?php
    $diretorioExercicios = scandir("$pastaPadrao/PWIII/intro_php/screens/exercicios/");
    $qtdExercicios = (count($diretorioExercicios)) - 2;
    for ($iExercicios = 1; $iExercicios <= $qtdExercicios; $iExercicios++) {
      echo "<a href='exercicios/exercicio${iExercicios}.php'>Exercício $iExercicios</a>";
      echo "<hr />";
    }
    ?>
  </main>
</body>
</html>