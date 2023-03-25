<?php

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

  if ($intAnoFin < $intAnoIni) {
    echo "O ano final deve ser maior ou igual ao ano inicial!";
  }
  // SE OS ANOS FOREM DIFERENTES, FAZ A CONTA CERTINHA ENTRE A DIFERENÇA EM DIAS
  else if ($intAnoFin != $intAnoIni) {
    // CONTA OS DIAS DO MES INFORMADO DO ANO INICIAL
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      switch ($intMesIni) {
          // Janeiro, 31 dias
        case 1:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Fevereiro, 28 dias
        case 2:
          $intDiferenca += 29 - $intDiaIni;
          break;

          // Março, 31 dias
        case 3:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Abril, 30 dias
        case 4:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Maio, 31 dias
        case 5:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Junho, 30 dias
        case 6:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Julho, 31 dias
        case 7:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Agosto, 31 dias
        case 8:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Setembro, 30 dias
        case 9:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Outubro, 31 dias
        case 10:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Novembro, 30 dias
        case 11:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Dezembro, 31 dias
        case 12:
          $intDiferenca += 31 - $intDiaIni;
          break;
      }
    } else {
      // ANO NÃO BISSEXTO
      switch ($intMesIni) {
          // Janeiro, 31 dias
        case 1:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Fevereiro, 28 dias
        case 2:
          $intDiferenca += 28 - $intDiaIni;
          break;

          // Março, 31 dias
        case 3:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Abril, 30 dias
        case 4:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Maio, 31 dias
        case 5:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Junho, 30 dias
        case 6:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Julho, 31 dias
        case 7:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Agosto, 31 dias
        case 8:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Setembro, 30 dias
        case 9:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Outubro, 31 dias
        case 10:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Novembro, 30 dias
        case 11:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Dezembro, 31 dias
        case 12:
          $intDiferenca += 31 - $intDiaIni;
          break;
      }
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
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 29;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = $intMesIni; $i <= 12; $i++) {
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 28;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
      }
    }

    // CONTA OS DIAS APÓS O ANO FINAL (DESCONSIDERA O ULTIMO MES)
    if (($intAnoFin % 4 == 0) && ($intAnoFin % 100 != 0 || $intAnoFin % 400 == 0)) {
      // ANO BISSEXTO
      for ($i = 1; $i <= $intMesFin; $i++) {
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 29;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = 1; $i <= $intMesFin; $i++) {
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 28;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
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
          switch ($i) {
              // Janeiro, 31 dias
            case 1:
              $intDiferenca += 31;
              break;

              // Fevereiro, 28 dias
            case 2:
              $intDiferenca += 29;
              break;

              // Março, 31 dias
            case 3:
              $intDiferenca += 31;
              break;

              // Abril, 30 dias
            case 4:
              $intDiferenca += 30;
              break;

              // Maio, 31 dias
            case 5:
              $intDiferenca += 31;
              break;

              // Junho, 30 dias
            case 6:
              $intDiferenca += 30;
              break;

              // Julho, 31 dias
            case 7:
              $intDiferenca += 31;
              break;

              // Agosto, 31 dias
            case 8:
              $intDiferenca += 31;
              break;

              // Setembro, 30 dias
            case 9:
              $intDiferenca += 30;
              break;

              // Outubro, 31 dias
            case 10:
              $intDiferenca += 31;
              break;

              // Novembro, 30 dias
            case 11:
              $intDiferenca += 30;
              break;

              // Dezembro, 31 dias
            case 12:
              $intDiferenca += 31;
              break;
          }
        }
      } else {
        // ANO NÃO BISSEXTO
        for ($i = 1; $i <= 12; $i++) {
          switch ($i) {
              // Janeiro, 31 dias
            case 1:
              $intDiferenca +=  31;
              break;

              // Fevereiro, 28 dias
            case 2:
              $intDiferenca +=  28;
              break;

              // Março, 31 dias
            case 3:
              $intDiferenca +=  31;
              break;

              // Abril, 30 dias
            case 4:
              $intDiferenca +=  30;
              break;

              // Maio, 31 dias
            case 5:
              $intDiferenca +=  31;
              break;

              // Junho, 30 dias
            case 6:
              $intDiferenca +=  30;
              break;

              // Julho, 31 dias
            case 7:
              $intDiferenca +=  31;
              break;

              // Agosto, 31 dias
            case 8:
              $intDiferenca +=  31;
              break;

              // Setembro, 30 dias
            case 9:
              $intDiferenca +=  30;
              break;

              // Outubro, 31 dias
            case 10:
              $intDiferenca +=  31;
              break;

              // Novembro, 30 dias
            case 11:
              $intDiferenca +=  30;
              break;

              // Dezembro, 31 dias
            case 12:
              $intDiferenca +=  31;
              break;
          }
        }
      }
      $intAnoIni++;
    }

    echo "A diferença entre as datas é de: $intDiferenca dia(s)";
  }
  // SE OS ANOS FOREM IGUAIS, E O MES INICIAL FOR MENOR
  else if ($intMesIni < $intMesFin) {
    $intDiferenca = $intDiaFin;
    $intMesFin--;
    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      switch ($intMesIni) {
          // Janeiro, 31 dias
        case 1:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Fevereiro, 28 dias
        case 2:
          $intDiferenca += 29 - $intDiaIni;
          break;

          // Março, 31 dias
        case 3:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Abril, 30 dias
        case 4:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Maio, 31 dias
        case 5:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Junho, 30 dias
        case 6:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Julho, 31 dias
        case 7:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Agosto, 31 dias
        case 8:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Setembro, 30 dias
        case 9:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Outubro, 31 dias
        case 10:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Novembro, 30 dias
        case 11:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Dezembro, 31 dias
        case 12:
          $intDiferenca += 31 - $intDiaIni;
          break;
      }
    } else {
      // ANO NÃO BISSEXTO
      switch ($intMesIni) {
          // Janeiro, 31 dias
        case 1:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Fevereiro, 28 dias
        case 2:
          $intDiferenca += 28 - $intDiaIni;
          break;

          // Março, 31 dias
        case 3:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Abril, 30 dias
        case 4:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Maio, 31 dias
        case 5:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Junho, 30 dias
        case 6:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Julho, 31 dias
        case 7:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Agosto, 31 dias
        case 8:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Setembro, 30 dias
        case 9:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Outubro, 31 dias
        case 10:
          $intDiferenca += 31 - $intDiaIni;
          break;

          // Novembro, 30 dias
        case 11:
          $intDiferenca += 30 - $intDiaIni;
          break;

          // Dezembro, 31 dias
        case 12:
          $intDiferenca += 31 - $intDiaIni;
          break;
      }
    }
    $intMesIni++;

    if (($intAnoIni % 4 == 0) && ($intAnoIni % 100 != 0 || $intAnoIni % 400 == 0)) {
      // ANO BISSEXTO
      for ($i = $intMesIni; $i <= $intMesFin; $i++) {
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 29;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
      }
    } else {
      // ANO NÃO BISSEXTO
      for ($i = $intMesIni; $i <= $intMesFin; $i++) {
        switch ($i) {
            // Janeiro, 31 dias
          case 1:
            $intDiferenca += 31;
            break;

            // Fevereiro, 28 dias
          case 2:
            $intDiferenca += 28;
            break;

            // Março, 31 dias
          case 3:
            $intDiferenca += 31;
            break;

            // Abril, 30 dias
          case 4:
            $intDiferenca += 30;
            break;

            // Maio, 31 dias
          case 5:
            $intDiferenca += 31;
            break;

            // Junho, 30 dias
          case 6:
            $intDiferenca += 30;
            break;

            // Julho, 31 dias
          case 7:
            $intDiferenca += 31;
            break;

            // Agosto, 31 dias
          case 8:
            $intDiferenca += 31;
            break;

            // Setembro, 30 dias
          case 9:
            $intDiferenca += 30;
            break;

            // Outubro, 31 dias
          case 10:
            $intDiferenca += 31;
            break;

            // Novembro, 30 dias
          case 11:
            $intDiferenca += 30;
            break;

            // Dezembro, 31 dias
          case 12:
            $intDiferenca += 31;
            break;
        }
      }
    }
    echo "A diferença entre as datas é de: $intDiferenca dia(s)";
  } else if ($intMesIni == $intMesFin) {
  } else if ($intMesIni > $intMesFin) {
    echo "Em anos iguais, o mês inicial deve ser menor ou igual ao final!";
  } else if ($intDiaFin != $intDiaIni) {
  } else {
  }
}
