<?php
class Coor{
private $text;

function __construct($text)
{
$this->text=$text;
}

function Getname()
{
echo "<p>name: ".$this->text."<br>";
}

	public function destroy($value) {
	unset($value);
	echo "object is deleted";
	}

}
$object = new Coor("Nick");
$object->Getname();
$object->destroy($object);

?>