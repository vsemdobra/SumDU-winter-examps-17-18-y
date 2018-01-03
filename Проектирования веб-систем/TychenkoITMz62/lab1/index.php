<?php

class Client {
    public $name;
    public $adress;
    public $bankid;
    private $random;

    function Get(){
        echo $this->name." -> Number of foot:".$this->adress."; Number of child: ".$this->bankid.";Random number:".$this->random = self::myRandom()."</br>";
    }
    function Set($c_name, $c_adress, $c_bankid) {
        $this->name =$c_name;
        $this->adress=$c_adress;
        $this->bankid=$c_bankid;
    }
    function Show($instance) {
        if($instance =="name"){
            echo $this->name;
        }elseif ($instance =="adress") {
            echo $this->adress;
        }elseif ($instance =="bankid") {
            echo $this->bankid;
        }
    }
    function Search($instance) {
        if ($instance == $this->name) {
            echo $this->Get();
        } elseif ($instance == $this->bankid) {
            echo $this->Get();
        }elseif ($instance == $this->adress) {
            echo $this->Get();
        } else echo "Search has not returned anything!</br>";
    }
    public function show_objects($array) {
        $objArray = array();
        for ($i=0;$i<count($array);$i++){
            $objArray[$i] = $array[$i]->Get();}
    }
    private function myRandom(){                        //orivate пример
        return rand(0,2000);
    }
}
$obj=[];
$obj[0]=new Client();
$obj[0]->Set("Valera","kirova 4", "212233");
$obj[1]=new Client();
$obj[1]->Set("Vasya","petropavl 5", "142233");
$obj[2]=new Client();
$obj[2]->Set("Dima","kirova 5", "922233");
for($i=0;$i<3;$i++) {
    $obj[$i]->Show("name");
    echo " object : ";
    $obj[$i]->Search("Valera");}
$obj[3]=new Client();
$obj[3]->Set("Vasya","Kirova 6", "512233");
$obj[4]=new Client();
$obj[4]->Set("Dima","Kirova 66", "812233");
echo "</br><h2>Objects in system:</h2></br>";
$obj[4]->show_objects($obj);
