<?php

interface Absense {
  public function countDays();
}

class LessThan10YearsOfWork implements Absense {

  public function countDays()
    {
      return 20;
    }

}

class MoreThan10YearsOfWork implements Absense {

  public function countDays()
  {
    return 26;
  }

}

class Context {

  private $strategy;

  public function setStrategy(Absense $absense)
  {
      $this->strategy = $absense;
  }

  public function getStrategy()
  {
    return $this->strategy;
  }

}


  $absense = new Context();
  $absense->setStrategy(new MoreThan10YearsOfWork);

  echo $absense->getStrategy()->countDays();

  $absense->setStrategy(new LessThan10YearsOfWork);

  echo $absense->getStrategy()->countDays();
