<?php

abstract class Car {

  protected $model;
  protected $doors;
  protected $engine;

  public function __construct($model = null, $doors = null, $engine = null) {


    $this->model = $model;
    $this->doors = $doors;
    $this->engine = $engine;

  }

  abstract function __clone();



  public function getModel(){
    return $this->model;
  }

  public function setModel($model){
    $this->model = $model;
  }

  public function getDoors(){
    return $this->doors;
  }

  public function setDoors($doors){
    $this->doors = $doors;
  }

  public function getEngine(){
    return $this->engine;
  }

  public function setEngine($engine){
    $this->engine = $engine;
  }

}

class Volkswagen extends Car {

  public function __construct($model, $doors, $engine) {
    parent::__construct($model, $doors, $engine);
  }

  public function __clone() {}


}


$golf = new Volkswagen('golf', 4, '1.9 TDI');
$passat = clone $golf;
$passat->setModel('passat');
$jetta = clone $passat;
$jetta->setModel('jetta');

$bora = new Volkswagen('bora', 4, '1.8 T');
$tiguan = clone $bora;
$tiguan->setModel('tiguan');
