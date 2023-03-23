<!DOCTYPE html>
<html lang="pt-BR">

<!-- HEAD -->
<?php
  $pastaPadrao = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once("$pastaPadrao/PWIII/atividades_php/shared/head/head.php");
  require_once("$pastaPadrao/PWIII/atividades_php/shared/constants/titles.php");

  echo "<title>$titleEx1</title>";
  echo "<link rel='stylesheet' href=''>";
?>
<!-- /HEAD -->

<body>

  <header>
    <h3>
      <?php
      echo $titleEx1;
      ?>
    </h3>
  </header>

  <main>
    <form action="" method="POST">
      <label for="inpMinutos">Informe um tempo em minutos:</label>
      <input type="number" name="inpMinutos" id="inpMinutos" required>

      <input type="submit" name="btnAcao" value="Calcular">
    </form>

    <div class="resultado">
      <p>
      <?php
        if(isset($_POST['btnAcao'])){
          if(is_int($_POST['inpMinutos'] * 1)){
            $intMinutos = $_POST['inpMinutos'];
            echo "
            <hr> 
            A medição usada se baseia em meses de 30 dias <br />
            $intMinutos minutos são, aproximadamente: 
            ";

            // Se a quantidade de minutos for superior a 43800,
            // contará quantos meses são
            if($intMinutos >= 43800){
              $intMeses = floor($intMinutos / 43800);
              $intMinutos = $intMinutos % 43800;

              // Imprime a quantidade de meses
              if($intMeses == 1){
                echo "$intMeses mês, ";
              } else {
                echo "$intMeses meses, "; 
              }
            }

            // Se a quantidade de minutos for superior a 1440
            // contará quantos dias são
            if($intMinutos >= 1440){
              $intDias = floor($intMinutos / 1440);
              $intMinutos = $intMinutos % 1440;

              // Imprime a quantidade de dias
              if($intDias == 1){
                echo "$intDias dia, ";
              } else {
                echo "$intDias dias, "; 
              }
              //
            }

            // Se a quantidade de minutos for superior a 60
            // contará quantas horas são
            if($intMinutos >= 60){
              $intHoras = floor($intMinutos / 60);
              $intMinutos = $intMinutos % 60;

              // Imprime a quantidade de horas
              if($intHoras == 1){
                echo "$intHoras hora, ";
              } else {
                echo "$intHoras horas, "; 
              }
              //
            }

            // Se a quantidade de minutos restante após as operações for
            // superior a 0, os informa na tela.
            if($intMinutos > 0){
              echo "$intMinutos minutos";
            }
          }
          else{
            echo "<hr> O número informado deve ser do tipo inteiro! Ou seja, não deve conter vírgula, ponto e números após o mesmo.";
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