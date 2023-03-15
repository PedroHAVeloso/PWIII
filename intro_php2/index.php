<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revisão de PHP</title>
</head>
<body>

  <header>
    <h3>Revisão de PHP</h3>
  </header>

  <main>
    <form action="" method="get">
      <label for="inpNumero1">Número 1:</label><br/>
      <input type="number" required name="inpNumero1" id="inpNumero1"><br/>

      <label for="inpNumero2">Número 2:</label><br/>
      <input type="number" required name="inpNumero2" id="inpNumero2"><br/>

      <!-- <label for="selOperacao">Selecione a operação desejada:</label><br/>
      <select name="selOperacao" id="selOperacao">
        <option value="optAdicao">Adição</option>
        <option value="optSubtracao">Subtração</option>
        <option value="optMultiplicacao">Multiplicação</option>
        <option value="optDivisao">Divisão</option>
      </select><br/> -->

      <input type="submit" name="btnAcao" value="Somar">
      <input type="submit" name="btnAcao" value="Subtrair">
      <input type="submit" name="btnAcao" value="Multiplicar">
      <input type="submit" name="btnAcao" value="Dividir">
    </form>

    <div>
      <?php
        if(isset($_GET['btnAcao'])){
          $douNumero1 = $_GET['inpNumero1'];  
          $douNumero2 = $_GET['inpNumero2'];
          $strAcao = $_GET['btnAcao'];

          switch($strAcao){
            case "Somar":
              echo "Resultado da Adição: " . $douNumero1 + $douNumero2;
              break;
            case "Subtrair":
              echo "Resultado da Subtração: " . $douNumero1 - $douNumero2;
              break;
            case "Multiplicar":
              echo "Resultado da Multiplicação: " . $douNumero1 * $douNumero2;
              break;
            case "Dividir":
              echo "Resultado da Divisão: " . $douNumero1 / $douNumero2;
              break;
          }

          // $strOperacao = $_GET['selOperacao'];
          // switch($strOperacao){
          //   case "optAdicao":
          //     echo "Resultado da Adição: " . $douNumero1 + $douNumero2;
          //     break;
          //   case "optSubtracao":
          //     echo "Resultado da Subtração: " . $douNumero1 - $douNumero2;
          //     break;
          //   case "optMultiplicacao":
          //     echo "Resultado da Multiplicação: " . $douNumero1 * $douNumero2;
          //     break;
          //   case "optDivisao":
          //     echo "Resultado da Divisão: " . $douNumero1 / $douNumero2;
          //     break;
          // }
        }
      ?>
    </div>
  </main>

</body>
</html>
