<?php

//Prosta klasa wykorzystująca wzorzec Singleton
//zawiera konfigurację połączenia do bazy danych

class DBConfig {

  private static $instance;

  private $host = 'localhost';
  private $dbname = 'dbname';
  private $login = 'root';
  private $password = '';

  private function __construct() {}
  private function __clone() {}

  public static function getInstance() {
    if(self::$instance === null)
      self::$instance = new DBConfig();

    return self::$instance;
  }

  public function getHost(){
    return $this->host;
  }

  public function setHost($host){
    $this->host = $host;
  }

  public function getDbName(){
    return $this->dbname;
  }

  public function setDbName($dbname){
    $this->dbname = $dbname;
  }

  public function getLogin(){
    return $this->login;
  }

  public function setLogin($login){
    $this->login = $login;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = $password;
  }

}

$tmp = DBConfig::getInstance();
$tmp->setHost('host1.example.com');

$tmp2 = DBConfig::getInstance();
print_r($tmp2);
