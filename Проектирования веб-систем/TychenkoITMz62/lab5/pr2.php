<?php
abstract class Figure{
    abstract public function area($size);
    abstract public function centerPoint($x, $y);
}
class Circle extends Figure {
    public function area($radius)  {
        $area = 3.14*($radius*$radius);
        echo "Area of circle = ".$area."</br>";
    }
    public function centerPoint($x, $y) {
        echo "Center of circle: {".$x.";".$y."}</br>";
    }
}
class Rectangle extends Figure {
    public function area($sideLength)  {
        echo "Area of rectangle = ".$sideLength*$sideLength."</br>";
    }
    public function centerPoint($x, $y) {
        echo "Center of rectangle: {".$x.";".$y."}</br>";
    }
}
$size = 4;
$circle = new Circle();
$circle->area($size);
$circle->centerPoint(20, 30);
$rectangle = new Rectangle();
$rectangle->area($size);
$rectangle->centerPoint(0, 4);
