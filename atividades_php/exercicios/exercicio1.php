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
  echo "<title>" . Constants::TITULO_EX1 . "</title>";
  ?>
</head>

<body>

  <header>
    <h1>
      <!-- Exibe o título (enunciado) do exercício -->
      <?php
      echo Constants::TITULO_EX1;
      ?>
    </h1>
  </header>

  <hr />

  <main>
    <!-- Formulário para requisitar o tempo em minutos -->
    <form action="" method="POST">
      <label for="inpMinutos">Informe um tempo em minutos:</label>
      <input type="number" name="inpMinutos" id="inpMinutos" required>

      <input type="submit" name="btnAcao" value="Calcular">
    </form>

    <div class="resultado">
      <p>
        <?php
        // Se o botão for clicado (variável btnAcao for iniciada), execute o código dentro do if
        if (isset($_POST['btnAcao'])) {
          // Se o input de minutos for do tipo inteiro, execute o código dentro do if
          if (is_int($_POST['inpMinutos'] * 1)) {
            // Cria a variável inteira puxando o valor do input
            $intMinutos = $_POST['inpMinutos'];

            // Informa na tela as regras da medição
            echo "
            <hr /> 
            A medição usada se baseia em meses de 30 dias.
            <hr />
            ";

            // Inicio da tag da resposta
            echo "
            <p>$intMinutos minuto(s) é/são, aproximadamente: <strong>
            ";

            // Se a quantidade de minutos for superior a 43800,
            // contará quantos meses são
            if ($intMinutos >= 43800) {
              $intMeses = floor($intMinutos / 43800);
              $intMinutos = $intMinutos % 43800;


              // Imprime a quantidade de meses
              echo "$intMeses mês(es). ";
            }

            // Se a quantidade de minutos for superior a 1440
            // contará quantos dias são
            if ($intMinutos >= 1440) {
              $intDias = floor($intMinutos / 1440);
              $intMinutos = $intMinutos % 1440;

              // Imprime a quantidade de dias
              echo "$intDias dia(s). ";
            }

            // Se a quantidade de minutos for superior a 60
            // contará quantas horas são
            if ($intMinutos >= 60) {
              $intHoras = floor($intMinutos / 60);
              $intMinutos = $intMinutos % 60;

              // Imprime a quantidade de horas
              echo "$intHoras hora(s). ";
              //
            }

            // Se a quantidade de minutos restante após as operações for
            // superior a 0, os informa na tela.
            if ($intMinutos > 0) {
              // Imprime a quantiade de minutos
              echo "$intMinutos minuto(s). ";
              // 
            }

            // Fim da tag do resultado da resposta
            echo "</strong></p> ";
          }
          // Se o número não for inteiro, requisita ao usuário um número inteiro.
          else {
            echo "<hr /> O número informado deve ser do tipo inteiro! Ou seja, não deve conter vírgula ou ponto e números após.";
          }
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