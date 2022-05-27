<?php
define("SLOW","1");
define("MEDIUM","2");
define("FAST","3");
class Fan{
    private int $speed =1;
    private bool $on = FALSE;
    private float $radius = 5;
    private string $color = "BLUE";
     function setSpeed($speed){
        $this->speed = $speed;
    }
     function setOn($on){
        $this->on = $on;
    }
     function setRadius($radius){
        $this->radius = $radius;
    }
     function setColor($color){
        $this->color = $color;
    }
     function getSpeed(){
        return $this->speed;
    }
     function getOn(){
        return $this->on;
    }
     function getRadius(){
        return $this->radius;
    }
     function getColor(){
        return $this->color;
    }
     function toString(){
        if($this->on==TRUE){
            echo "fan is on" ."<br>";
            return "Tốc độ : ".$this->speed."    , Bán kính :".$this->radius. "    , Màu :" .$this->color;
        }else{
            echo "fan is off"."<br>";
            return "Bán kính :". $this->radius. "   , Màu :" . $this->color;
        }
    } 
    }
    $Fan1 = new Fan();
    $Fan1->setSpeed(3);
    $Fan1->setRadius(5);
    $Fan1->setOn(TRUE);
    $Fan1->setColor("YELLOW");

    echo $Fan1->toString()."<br>";
    $Fan2 = new Fan();
    $Fan1->setSpeed(2);
    $Fan1->setRadius(10);
    $Fan1->setOn(FALSE);
    $Fan1->setColor("RED");
    echo $Fan2->toString()."<br>";
   





