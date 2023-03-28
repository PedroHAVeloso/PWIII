<?php

function swNoBissexto($i, $intDiferenca)
{
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

function swBissexto($i, $intDiferenca)
{
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

function swNoBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni)
{
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

function swBissextoMENOSdiaInicial($intMesIni, $intDiferenca, $intDiaIni)
{
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
}
