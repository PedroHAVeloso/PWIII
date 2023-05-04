<?php

class Database
{
  private const DB_DSN = 'mysql';
  private const DB_NAME = 'terceirods_pedro_veloso';
  private const DB_SERVER = '107.161.183.203';
  private const DB_USER = 'terceirods_pedro_veloso';
  private const DB_PASS = 'terceirods1313';


  static function connect()
  {
    try {
      $connection =
        new PDO(
          self::DB_DSN . ":host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME,
          self::DB_USER,
          self::DB_PASS
        );
      return $connection;
    } catch (Exception $exc) {
      return $exc->getMessage();
    }
  }
}
