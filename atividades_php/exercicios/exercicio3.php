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
  echo "<title>" . Constants::TITULO_EX3 . "</title>";
  ?>
</head>

<body>

  <header>
    <h1>
      <!-- Exibe o título (enunciado) do exercício -->
      <?php
      echo Constants::TITULO_EX3;
      ?>
    </h1>
  </header>

  <hr />

  <!-- 
    Fiz esse exercício usando o primeiro método,
    foi ai que percebi o resto do enunciado e que precisava ser
    com as 6 variáveis (bem mais chatinho em), então fiz desse jeito
  -->

  <?php
  // Verifica se a strEscolha existe, ou seja, se o usuário já escolheu o método para usar
  if (!isset($_GET['strEscolha'])) {
    // Se não existir uma escolha, executa o site para o usuário escolher o método
    echo
    '
    <main>

      <h2>Qual método você deseja usar para o exercício (o jeito que programei, o resultado é o mesmo em ambos)?</h2>
      <form action="" method="GET">
        <input type="submit" name="strEscolha" value="Método fáciozinho">
        <input type="submit" name="strEscolha" value="Método chatinho">
      </form>

    </main>
  
    <hr />

    <footer>
      <a href="/PWIII/atividades_php/index.php">Voltar</a>
    </footer>
    ';
  } else {
    $strEscolha = $_GET['strEscolha'];

    // Se a escolha do método for essa, executa a construção do site para o método faciozinho
    // MODO FACIL DE SER FEITO (COM FUNCOES DO PHP)
    if ($strEscolha == "Método fáciozinho") {
      // Inicio do HTML
      echo '
      <main>

        <form action="" method="POST">
          <label for="inpInicial">Informe uma data inicial:</label> <br />
          <input type="date" name="inpInicial" id="inpInicial" required> <br />

          <label for="inpFinal">Informe uma data final:</label> <br />
          <input type="date" name="inpFinal" id="inpFinal" required> <br />

          <input type="submit" name="btnAcao" value="Calcular">
        </form>

        <div class="resultado">
          <p>
      ';

      if (isset($_POST['btnAcao'])) {
        // Puxa as variáves de datas dos inputs (como Date)
        $dateInicial = new DateTime($_POST['inpInicial']);
        $dateFinal = new DateTime($_POST['inpFinal']);

        // Se a data final for igual ou menor que a inicial, informa que não pode ser assim
        if ($dateFinal <= $dateInicial) {
          echo "As datas devem ser diferentes! Além disso, a data final deve ser maior que a inicial.";
        } else {
          // Verifica o intervalo de tempo entre as duas datas
          $dateDiferenca = $dateInicial->diff($dateFinal);
          // Obtem esse intervalo em dias
          $dateDiferencaDias = $dateDiferenca->days;

          // Informa a diferença de tempo para o usuário
          echo "A diferença entre as datas é de: $dateDiferencaDias dia(s)";
        }
      }

      // Fim do HTML
      echo '
          </p>
        </div>
      </main>

      <hr />

      <footer>
        <a href="/PWIII/atividades_php/exercicios/exercicio3.php">Voltar</a>
      </footer>
      ';
    }

    // Se a escolha do método for essa, executa a construção do site para o método chatinho
    // MODO DIFICIL DE SER FEITO (NA MÃO ISSO AQUI)
    if ($strEscolha == "Método chatinho") {
      // Inicio do HTML
      echo '
      <main>

        <h3>O cálculo nesse modo é feito de maneira aproximada, não atingindo o resultado exato.</h3>
        <h3>Considera meses de 30 dias exatos e anos de 365 dias exatos.</h3>

        <form action="" method="POST">
          <label for="inpInicial">Informe uma data inicial:</label> <br />
          <input type="number" name="inpDiaIni" id="inpInicial" placeholder="Dia (Ex: 01)" required> 
          <input type="number" name="inpMesIni" id="inpInicial" placeholder="Mês (Ex: 01)" required> 
          <input type="number" name="inpAnoIni" id="inpInicial" placeholder="Ano (Ex: 2000)" required> 
          <br />

          <label for="inpInicial">Informe uma data final:</label> <br />
          <input type="number" name="inpDiaFin" id="inpFinal" placeholder="Dia (Ex: 01)" required> 
          <input type="number" name="inpMesFin" id="inpFinal" placeholder="Mês (Ex: 01)" required> 
          <input type="number" name="inpAnoFin" id="inpFinal" placeholder="Ano (Ex: 2005)" required> 
          <br />

          <input type="submit" name="btnAcao" value="Calcular">
        </form>

        <div class="resultado">
          <p>
      ';

      require_once("$pastaPadrao/PWIII/atividades_php/shared/ex3chatinho.php");

      // Fim do HTML
      echo '
          </p>
        </div>
      </main>

      <hr />

      <footer>
        <a href="/PWIII/atividades_php/exercicios/exercicio3.php">Voltar</a>
      </footer>
      ';
    }
  }
  ?>

</body>

</html>