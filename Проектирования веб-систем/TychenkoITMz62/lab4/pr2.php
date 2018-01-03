<?php
class Coor
{
  private $text;
  static $count=0;
  function __construct($text)
  {
          $this->text=$text;
          Coor::$count++;
  }
  function Getname()
  {
        echo "<p>Name: ".$this->text."<br>";
      }
}

    echo Coor::$count."<br>";
    $object = new Coor("Nick");
    echo Coor::$count."<br>";
    $object->Getname();
class cccc
{
    public static function stat_metod()
    {
        echo "hello! statick";
    }

}
cccc::stat_metod();