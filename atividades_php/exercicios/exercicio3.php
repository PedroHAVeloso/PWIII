<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/atividades_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/atividades_php/shared/constants/titles.php");

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
      <label for="inpInicial">Informe uma data inicial:</label> <br />
      <input type="date" name="inpInicial" id="inpInicial" required> <br />

      <label for="inpFinal">Informe uma data final:</label> <br />
      <input type="date" name="inpFinal" id="inpFinal" required> <br />

      <input type="submit" name="btnAcao" value="Calcular">
    </form>

    <div class="resultado">
      <p>
      <?php
        if(isset($_POST['btnAcao'])){
          // Puxa as variáves de datas dos inputs (como Date)
          $dateInicial = new DateTime($_POST['inpInicial']);
          $dateFinal = new DateTime($_POST['inpFinal']);

          if($dateFinal <= $dateInicial){
            echo "As datas devem ser diferentes! Além disso, a data final deve ser maior que a inicial.";
          }
          else{
            // Verifica o intervalo de tempo entre as duas datas
            $dateDiferenca = $dateInicial->diff($dateFinal);
            // Obtem esse intervalo em dias
            $dateDiferencaDias = $dateDiferenca->days;
            
            // Faz operações para conseguir a diferença em anos meses, 
            // semanas e horas (aproximadamente)
            $dateDiferencaAnos = $dateDiferencaDias / 365;
            $dateDiferencaMeses = $dateDiferencaDias / 30;
            $dateDiferencaSemanas = $dateDiferencaDias / 7;
            $dateDiferencaHoras = $dateDiferencaDias * 24;

            echo "
            A diferença entre as datas é, aproximadamente: <br />
            Em anos: $dateDiferencaAnos <br />
            Em horas: $dateDiferencaHoras <br />
            Em dias: $dateDiferencaDias <br />
            Em semanas: $dateDiferencaSemanas <br />
            Em meses: $dateDiferencaMeses
            ";
          }
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