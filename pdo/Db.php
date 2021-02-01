<?php

class Db
{
  private static $pdo = null;

  private function __construct()
  {
    // Singleton : constructeur privé
  }

  public static function getInstance(): PDO
  {
    if (self::$pdo === null) {
      try {
        $config = parse_ini_file(__DIR__ . '/../config/config.ini');
        $dsn = 'mysql:dbname=' . $config['db_name'] . ';host=' . $config['host'] . ';charset=' . $config['charset'];
        $user = $config['user'];
        $password = $config['password'];

        self::$pdo = new PDO($dsn, $user, $password);
        echo "Construction PDO";
      } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
    }

    echo "Retour PDO";
    return self::$pdo;
  }
}
