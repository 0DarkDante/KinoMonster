<?php

class Human {

  private $words;

  public function setWords($words) {
    $this->worlds = $words;
  }

  public function getWords() {
    return $this->worlds;
  }

  public function sayIt() {
    return $this->getWords();
  }

}

$human = new Human();
$human->setWords("Hi!");
echo $human->sayIt();


?>