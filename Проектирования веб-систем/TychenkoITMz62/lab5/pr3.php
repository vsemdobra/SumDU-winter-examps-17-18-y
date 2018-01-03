<?php
abstract class DopInfo{
    abstract public function humanInfo();
}

class Human extends DopInfo{
    private $name;
    private $old;
    private $weight;
    function printAboutInfo(){
        echo "</br>".$this->name." -> years : ".$this->old."; kgs: ".$this->weight."</br>";
    }
    public function __construct($c_name, $c_old, $c_weight) {
        $this->name =$c_name;
        $this->old=$c_old;
        $this->weight=$c_weight;
    }
    public function humanInfo(){
        echo "i'm".$this->name.", simple human, i'm </br>";
        echo $this->old;
        echo "years</br>===========</br>";
    }
}

class OldDaddyClass extends DopInfo {
    public function humanInfo(){
        echo "This is old daddy </br>";
    }
}
$valera = new Human("Valera", "44", "100");
$valera->humanInfo();
$OldDaddyClass = new OldDaddyClass();
$OldDaddyClass->humanInfo();
