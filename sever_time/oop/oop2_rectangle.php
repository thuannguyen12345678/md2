<?php
class Rectangle{
    public $width;
    public $height;
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    //tính diện tích
    public function getArea(){
        return $this->width * $this->height;
    }

    //tính chu vi:
    public function getPerimeter(){
        return (($this->width + $this->height)*2);
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . "," . "height=" . $this->height . "}";
    }
} 
$Rectangle = new Rectangle(10,20);
echo $Rectangle->width;
echo "<br>";
echo $Rectangle->height;
echo "<br>";


$Rectangle->height = 30;
echo "<br>";

$Rectangle->width = 20;
echo "<br>";

echo $Rectangle->height;
echo "<br>";

echo $Rectangle->width;
echo "<br>";


echo $Rectangle->getPerimeter();
echo "<br>";

echo $Rectangle->getArea();
echo "<br>";

echo ("your Rectangle". $Rectangle->display());