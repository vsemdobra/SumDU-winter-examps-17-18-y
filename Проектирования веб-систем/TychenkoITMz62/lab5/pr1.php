<?php
abstract class Coor
{
    private $firstName = "";
    private $lastName = "";
    public function setName( $firstName, $lastName ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getName(){
        return $this->firstName." ".$this->lastName;
    }
    abstract public function showWelcomeMessage();
}
class Visitor extends Coor{
    public function showWelcomeMessage(){
        echo "Hi " . self::getName() . ", welcome to our shop! To buy something, please, register!<br>";
    }
    public function newMessage( $subject ) {
        echo "Creating new message:  $subject<br>";
    }
}
class Shopper extends Coor
{
    public function showWelcomeMessage(){
        echo "Hi " . self::getName() . ", welcome to our online store!<br>";
    }
    public function addToCart( $item ) {
        echo "Adding $item to cart<br>";
    }
}
$visitor = new Visitor();
$visitor->setName("dear", "guest");
$visitor->showWelcomeMessage();
echo "</br>";$shopper = new Shopper();
$shopper->setName("Chris", "Lu");
$shopper->showWelcomeMessage();
echo "</br>";
$visitor->newMessage("This is test message. Thanks for using our service!");
echo "</br>";$shopper->addToCart("milk");
