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
  echo "<title>" . Constants::TITULO_EX2 . "</title>";
  ?>
</head>

<body>

  <header>
    <h1>
      <!-- Exibe o título (enunciado) do exercício -->
      <?php
      echo Constants::TITULO_EX2;
      ?>
    </h1>
  </header>

  <hr />

  <main>
    <!-- Formulário para requisitar o tempo em dias -->
    <form action="" method="POST">
      <label for="inpDias">Informe um tempo em dias:</label>
      <input type="number" name="inpDias" id="inpDias" required>

      <input type="submit" name="btnAcao" value="Calcular">
    </form>

    <div class="resultado">
      <p>
        <?php
        // Se a ação existir, execute dentro do if
        if (isset($_POST['btnAcao'])) {
          // Atribui o valor do input à $intDias
          $intDias = $_POST['inpDias'];

          // Informa o enunciado da reposta
          echo "<hr> Em $intDias dia(s) se passaram: <br />";

          // Calcula o tempo que passaria (os dias) em outras medidas
          $intHoras = $intDias * 24;
          $intMinutos = $intHoras * 60;
          $intSegundos = $intMinutos * 60;

          // Informa os resultados da resposta
          echo "
            ou $intHoras hora(s) <br />
            ou $intMinutos minuto(s) <br />
            ou $intSegundos segundo(s)
          ";
        }
        ?>
      </p>
    </div>
  </main>

  <hr />

  <footer>
    <a href="/PWIII/atividades_php/index.php">Voltar</a>
  </footer>
</body>

</html>