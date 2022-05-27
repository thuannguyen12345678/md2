<?php
// class cha{
//     private string $xehoi = "vinfast";

//     public function laixe(){

//     }
   
// }
// class con extends cha{
//      public function getXehoi(){
//         return $this->xehoi;
//     }
// }
// $CON = new con();
// // echo $CON->xehoi;
//  echo $CON->laixe();
// echo $CON->getXehoi();






//  class Animal{
//     final public function say(){
//         echo "nói điều gì";
//     }
// }
// class Cat extends Animal{
//     public function say(){
//         echo "meo meo";
//     }
// }
// class Dog extends Animal{
//     public function say(){
//         echo "go go";
//     }
// }
// $cat = new Cat();
// echo $cat->say()."<br>";
// $cat = new Dog();
// echo $cat->say("chuot");






 final class Cha{
    public function xehoi(){

    }
    public function xemay(){

    }

}
class Con extends Cha{

}
$CON = new Con();
echo $CON->xehoi;