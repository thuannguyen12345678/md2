<?php
class QuadraticEquation {
    public $a;
    public $b;
    public $c;
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function Discriminant(){
        $delta = (($this->b)*($this->b))-4*($this->a * $this->c);
        if ($delta <0){
            echo "phương trình vô nghiệm";
        }else if($delta > 0){
            echo "phương trình có nghiệm x1 là:" . ((-$this->b + sqrt($delta))/2*$this->a) . "<br>";
            echo "phương trình có nghiệm x2 là:" . ((-$this->b - sqrt($delta))/2*$this->a);
        }else{
            echo "phương trình có nghiệm kép là: x1 = x2 = " .(- $this->b/(2*$this->a)); 
        }
    }
    
    
}
        $QuadraticEquations = new QuadraticEquation(5,10,5);
        echo $QuadraticEquations->Discriminant();
         


