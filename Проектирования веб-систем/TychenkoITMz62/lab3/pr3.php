<?
class Human {
    private $name;
    private $age;
    private $weight;
    function printAnimalInfo(){
        echo "</br>".$this->name." -> Age: ".$this->age."; weight: ".$this->weight."</br>";
    }
    public function __construct($c_name, $c_age, $c_weight){
        $this->name =$c_name;
        $this->age=$c_age;
        $this->weight=$c_weight;
    }
    public function __destruct(){
        echo "Destroyed: ".$this->name;
    }
}
class OldDaddy extends Human {
    public $seria;
    public $passId;
    function printOldDaddyInfo(){
        echo "</br>Seria".$this->seria." -> passId: ".$this->passId."</br>";
    }
    function __construct($c_name, $c_age) {
        $this->seria = $c_name;
        $this->passId = $c_age;
    }
    public function __destruct(){
        echo "Destroyed: ".$this->seria. " ";
    }
}
$animal = new Human("Petrov", "14", "40");
$animal->printAnimalInfo();
$animal->__destruct();
$OldDaddy = new OldDaddy("MB", "142232");
$OldDaddy->printOldDaddyInfo();
$OldDaddy->__destruct();
