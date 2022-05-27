<?php

echo "наследование", "<br>" ;

class Animal {
  private $pes;

  public function __construct($name, $coloring, $breed, $age) {
    $this->name = $name;
    $this->coloring = $coloring;
    $this->breed = $breed; 
    $this->age = $age; 
  }
  
  public function say() {
    echo "мои характеристики: " ;
  }

}

class Dog extends Animal {
  public function setName() {
  echo "Я умею лаять ";
  }
}

class Cat extends Animal {
  public function iam() {
    echo "Я умею мяукать ";
  }
}

$dog = new Dog( "Бровко", "синий", "овчарка", "17");
$dog -> setName();
$dog -> say();
echo " меня зовут " . $dog->name . " цвет " . $dog->coloring . " моя порода " . $dog->breed . " мне " . $dog->age . " лет";
 
echo "<br>" ;

$cat = new Cat ("Мурка", "біло-чорна", "свинкс", "2");
$cat->iam();
$cat->say();
echo " меня зовут " . $cat->name . " цвет " . $cat->coloring . " моя порода " . $cat->breed . " мне " . $cat->age . " лет";

echo "<br>","Полиморфизм" ;




?>