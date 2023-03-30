<?php
require_once("$pastaPadrao/PWIII/atividades_php/shared/functions/switches.php");

if (isset($_POST['btnAcao'])) {
  // Puxa as variáves dos inputs
  // INICIAL
  $intDiaIni = $_POST['inpDiaIni'];
  $intMesIni = $_POST['inpMesIni'];
  $intAnoIni = $_POST['inpAnoIni'];

  // FINAL
  $intDiaFin = $_POST['inpDiaFin'];
  $intMesFin = $_POST['inpMesFin'];
  $intAnoFin = $_POST['inpAnoFin'];

  // VARIAVEL DE DIFERENÇA
  $intDiferenca = 0;

  // SE O ANO FINAL FOR MENOR QUE O INICIAL, INFORMA ERRO
  if (
    $intAnoFin < $intAnoIni || $intDiaFin < 1 || $intDiaFin > 31 ||
    $intDiaIni < 1 || $intDiaIni > 31 || $intMesFin < 1 || $intMesFin >
    12 || $intMesIni < 1 || $intMesIni > 12 || $intAnoFin > 2049 || $intAnoIni < 1950
  ) {
    echo "O ano final deve ser maior ou igual ao ano inicial! Além disso informe meses e datas corretas. <br />";
    echo "E por algum motivo do destino, os anos devem estar entre 1950 à 2049.";
  }
  //
  //
  // SE OS ANOS FOREM DIFERENTES, FAZ A CONTA CERTINHA ENTRE A DIFERENÇA EM DIAS
  else if ($intAnoFin != $intAnoIni) {
    // CONTA OS DIAS DO MES INFORMADO DO ANO INICIAL
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      $intDiferenca = swBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni);
    } else {
      // ANO NÃO BISSEXTO
      $intDiferenca = swNoBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni);
    }

    // COMO OS DIAS DO MES INFORMADO JA FORAM CONTADOS, AUMENTA 1 PARA CONTAR OS PROXIMOS MESES DESSE ANO
    $intMesIni++;

    // CONTA OS DIAS DO MES INFORMADO DO ANO FINAL
    $intDiferenca += $intDiaFin;

    // COMO OS DIAS DESSE MES INFORMADO JA FORAM CONTADOS, DIMINUI O MES PARA CONTAR DOS OUTROS JA PASSADOS DESSE ANO
    $intMesFin--;

    // CONTA OS DIAS RESTANTES DOS MESES RESTANTES DO ANO INICIAL
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      for ($i = $intMesIni; $i <= 12; $i++) {
        $intDiferenca = swBissexto($i, $intDiferenca);
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = $intMesIni; $i <= 12; $i++) {
        $intDiferenca = swNoBissexto($i, $intDiferenca);
      }
    }

    // CONTA OS DIAS APÓS O ANO FINAL (DESCONSIDERA O ULTIMO MES)
    if (($intAnoFin % 4 == 0) && ($intAnoFin % 100 != 0 || $intAnoFin % 400 == 0)) {
      // ANO BISSEXTO
      for ($i = 1; $i <= $intMesFin; $i++) {
        $intDiferenca = swBissexto($i, $intDiferenca);
        
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = 1; $i <= $intMesFin; $i++) {
        $intDiferenca = swNoBissexto($i, $intDiferenca);
      }
    }

    // AUMENTA, POIS O ANO INICIAL JÁ FOI CONTABILIZADO
    $intAnoIni++;

    // CONTA ENTRE O ANO SEGUINTE AO INICIAL E O INICIO DO ANO FINAL
    while ($intAnoIni < $intAnoFin) {
      // VERIFICA SE O ANO É BISSEXTO
      if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
        // ANO BISSEXTO
        for ($i = 1; $i <= 12; $i++) {
          $intDiferenca = swBissexto($i, $intDiferenca);
        }
      } else {
        // ANO NÃO BISSEXTO
        for ($i = 1; $i <= 12; $i++) {
          $intDiferenca = swNoBissexto($i, $intDiferenca);
        }
      }
      // AUMENTA PARA O PRÓXIMO ANO
      $intAnoIni++;
    }

    // INFORMA A DIFERENÇA ENTRE AS DATAS
    echo "A diferença entre as datas é de: $intDiferenca dia(s)";
  }
  //
  //
  //
  //
  //
  // SE OS ANOS FOREM IGUAIS, E O MES INICIAL FOR MENOR
  else if ($intMesIni < $intMesFin) {
    // JÁ ADICIONA OS DIAS FINAIS
    $intDiferenca = $intDiaFin;
    // E DIMINUI UM MES FINAL, POIS 1 JÁ FOI CONTABILIZADO
    $intMesFin--;

    // CONTA O MES INICIAL
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      $intDiferenca = swBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni);
    } else {
      // ANO NÃO BISSEXTO
      $intDiferenca = swNoBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni);
    }

    // AUMENTA 1 MES POIS O PRIMEIRO MES INICIAL JA FOI CONTADO
    $intMesIni++;

    // CONTA O RESTO DOS MESES
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      for ($i = $intMesIni; $i <= $intMesFin; $i++) {
        $intDiferenca = swBissexto($i, $intDiferenca);
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = $intMesIni; $i <= $intMesFin; $i++) {
        $intDiferenca = swNoBissexto($i, $intDiferenca);
      }
    }

    // RETORNA A DIFERENÇA EM DIAS
    echo "A diferença entre as datas é de: $intDiferenca dia(s)";
  }
  //
  //
  //
  //
  //
  // SE OS MESES FOREM IGUAIS
  else if ($intMesIni == $intMesFin) {
    if ($intDiaFin > $intDiaIni) {
      echo "A diferença entre as datas é de: " . $intDiaFin - $intDiaIni . " dia(s)";
    } else {
      echo "Pelo menos os dias devem ser diferentes em!";
    }
  } else if ($intMesIni > $intMesFin) {
    echo "Em anos iguais, o mês inicial deve ser menor ou igual ao final!";
  } else {
    echo "Se você chegou aqui, deu algum erro que eu não consegui corrigir, parabéns.";
  }
}
