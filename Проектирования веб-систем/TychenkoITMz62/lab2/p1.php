<?php
class Coor{
private $text;
function __construct($text)
{
$this->text=$text;
}
function Getname()
{
echo "<p>Name: ".$this->text."<br>";
}
}
$object = new Coor("Nick");
$object->Getname();
?>