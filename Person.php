<?php
class Person{
private $name;
private $lastname;
private $age;
private $hp;
private $mother;
private $father;

function __construct($name,$lastname,$age,$mother=null,$father=null){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->hp = 100;
    $this->father =$father;
    $this->mother =$mother;
}
function sayHi($name){
    return "Hi $name, I'm ".$this->name;
}
function setHp($hp){
    if($this->hp+$hp>=100)$this->hp=100;
    else $this->hp = $this->hp+$hp;
}
function getHp(){
    return $this->hp;
}
function getName(){
    return $this->name;
}
function getmother(){
    return $this->mother;
}
function getFather(){
    return $this->father;
}
function getLastName(){
    return $this->lastname;
}
function getInfo(){
    return "<h3>About me:</h3><br>"."My name is: ".$this->getName().
    "<br> my lastname is: ".$this->getLastName().
    "<br> my father's name is: ".$this->getFather()->getName().
    "<br> my father's lastname is: ".$this->getFather()->getLastName().
    "<br> my mother's name is: ".$this->getMother()->getName().
    "<br>my mother's lastname is: ".$this->getMother()->getLastName().
    "<br>my grandfather's name is: ".$this->getFather()->getFather()->getName().
    "<br> my grandfather's lastname is: ".$this->getFather()->getFather()->getLastName().
    "<br> my second grandfather's name is: ".$this->getMother()->getFather()->getName().
    "<br> my second grandfather's lastname is: ".$this->getMother()->getFather()->getLastName().
    "<br> my grandmother's name is: ".$this->getFather()->getMother()->getName().
    "<br> my grandmother's lastname is: ".$this->getFather()->getMother()->getLastName().
    "<br> my second grandmother's name is: ".$this->getMother()->getMother()->getName().
    "<br> my second grandmother's lastname is: ".$this->getMother()->getMother()->getLastName();
}
}
/* Здоровье человека не может быть выше 100 */
$igor = new Person("Igor","Petrov",68);
$claudia = new Person("Claudia","Petrova", 65);
$egor = new Person("Egor","Ivanov",70);
$zina = new Person("Zinaida","Ivanova",69);

$alex = new Person("Alex","Ivanov",42,$zina,$egor,);
$olga = new Person("Olga","Ivanova",42, $claudia,$igor);
$valera = new Person("Valera","Ivanov",15,$olga,$alex);

/* echo $valera->getName()."<br>"; */
/* echo $valera->mother->getName(); так не работает, если закрыть public на private */
/* echo $valera->getMother()->getName()."<br>"; *///имя мамы
/* echo $valera->getMother()->getfather()->getName(); *///имя дедушки
/* 
echo $valera->getFather()->getName(); */
echo $valera->getInfo();

/* создать как минимум две бабушки и два дедушки по линии каждого из родителей
вывести на экран информацию по всей родне сына, ссылка на репозиторий*/
/* $medKit = 50;



$alex->setHp(-30);//упал
echo $alex->getHP()."<br>";
$alex->setHP($medKit);
echo $alex->getHP();
 */

/* echo $alex->sayHi($igor->name); */

/* $alex->name = "Alex"; */
/* echo $alex->name; */
?>