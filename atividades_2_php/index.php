<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  // Atribui à $pastaPadrao o caminho da pasta padrão onde o programa está
  // De exemplo, em meu caso ela será: "C:\wamp64\www"
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);

  // Puxa o "titles.php", pasta de constantes com os títulos 
  require_once("$pastaPadrao/PWIII/atividades_php/shared/constants/titles.php");

  // Informa o título do site, usando a constante de título
  echo "<title>" . Constants::TITULO_INDEX . "</title>";
  ?>
</head>

<body>
  <main>
    <!-- Informações do aluno -->
    <h1>Nome: Pedro Henrique Alves Veloso</h1>
    <h2>RM: 21068</h2>
    <h3>E-mail Institucional: pedro.veloso7@etec.sp.gov.br</h3>

    <?php
    // Retorna um Array com os itens contidos na pasta dos exercícios
    $diretorioExercicios = scandir("$pastaPadrao/PWIII/atividades_php/exercicios/");

    // Conta a quantidade de itens no Array (menos dois pois os primeiros itens são "." e "..")
    $qtdExercicios = (count($diretorioExercicios)) - 2;
    
    // Monta as tags <a> na quantidade de itens dentro do Array/Pasta
    for ($iExercicios = 1; $iExercicios <= $qtdExercicios; $iExercicios++) {
      echo "<a href='exercicios/exercicio$iExercicios.php'>Exercício $iExercicios</a>";
      echo "<hr />";
    }
    ?>
  </main>
</body>

</html>