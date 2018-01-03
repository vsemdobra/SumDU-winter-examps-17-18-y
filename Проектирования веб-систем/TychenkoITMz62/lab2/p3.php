<?php
class Coor{
    private $name;
    private $login;
    private $password;
    function __construct($name, $login, $password) {
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    function Getname(){
        echo "<p>Name: ".$this->name."</br>"."Login: ".$this->login."</br>"."Password: ".$this->password."</br></p>";
    }
    public function destroy($value) {
        unset($value);
        echo "object is deleted!";
    }
}
$obj=array();
$obj[0] = new Coor("vasya","loginName1","passwrda");
$obj[1] = new Coor("petya","loginName2","passwrdb");
$obj[2] = new Coor("petro","loginName3","passwrdc");

for($i = 0; $i<count($obj); $i++) {
    echo $obj[$i]->Getname();
}
