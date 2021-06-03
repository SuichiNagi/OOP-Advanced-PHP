<?php 

class Animal{
    public $name;
    public $health = 100;

    public function __construct($name){
        $this->name = $name;
    }

    public function displayHealth(){
        echo 'Name: '.$this->name.'<br>';
        echo 'Health: '.$this->health.'<br><br>';
    }

    public function walk(){
        echo 'walking...'.'<br>';
        $this->health -= 1;
        return $this;
    }

    public function run(){
        echo 'running...'.'<br>';
        $this->health -= 5;
        return $this;
    }
}

class Dog extends Animal{
    public $health = 150;

    public function pet(){
        echo 'petting...'.'<br>';
        $this->health += 5;
        return $this;
    }
}

class Dragon extends Animal{
    public $health = 170;

    public function displayHealth(){
        echo 'this is a dragon!'.'<br>';
        echo 'Name: '.$this->name.'<br>';
        echo 'Health: '.$this->health.'<br><br>';
    }

    public function fly(){
        echo 'flying...'.'<br>';
        $this->health -= 10;
        return $this;
    }
}

$animal = new Animal('Larry');
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new Dog('Woof');
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();


$dragon = new Dragon('Dragonoid');
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
?>