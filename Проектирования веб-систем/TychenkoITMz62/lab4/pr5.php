<?
class Human {
    private $name;
    private $age;
    private $weight;
    static $seria = "AA";
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

    public static function testik(){
        echo self::$seria;
    }
    public static function get(){
        self::testik();
    }

}
class OldDaddy extends Human {
    
    public $passId;
    static $seria = "ZZ";
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
    public static function get(){
        self::testik();
    }
}
OldDaddy::get();
echo " | ^^^ | ";
OldDaddy::testik();

