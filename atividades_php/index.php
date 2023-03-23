<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/atividades_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/atividades_php/shared/constants/titles.php");
  
  echo "<title>$titleIndex</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>
  <main>
    <h3>Nome: Pedro Henrique Alves Veloso</h3>
    <h3>RM: 21068</h3>
    <h3>E-mail Pessoal: contatopedrohalves@gmail.com</h3>
    <h3>E-mail Institucional: pedro.veloso7@etec.sp.gov.br</h3>
    <?php
    // Retorna um Array com os itens contidos na pasta
    $diretorioExercicios = scandir("$pastaPadrao/PWIII/atividades_php/exercicios/");
    // Conta a quantidade de itens no Array (menos dois pois os primeiros itens são "." e "..")
    $qtdExercicios = (count($diretorioExercicios)) - 2;
    // Monta as tags <a> na quantidade de itens dentro do Array/Pasta
    for ($iExercicios = 1; $iExercicios <= $qtdExercicios; $iExercicios++) {
      echo "<a href='exercicios/exercicio${iExercicios}.php'>Exercício $iExercicios</a>";
      echo "<hr />";
    }
    ?>
  </main>
</body>

</html>