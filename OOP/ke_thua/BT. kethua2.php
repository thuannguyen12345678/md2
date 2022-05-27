<?php
class Point2D{
    public float $X;
    public float $Y;
    public function __construct(float $X,float $Y){
        $this->X =$X;
        $this->Y =$Y;
    }
    public function setX(float $X){
        $this->X =$X;
    }
    public function setY(float $Y){
        $this->Y =$Y;
    }
    public function getX(){
        return $this->X;
    }
    public function getY(){
        return $this->Y;
    }
    public function setXY(float $X, float $Y){
        $this->X =$X;
        $this->Y =$Y;
    }
    public function getXY(){
        return [$this->X,$this->Y];
    }
    public function toString(){
        return "X = ". $this->X . " Y = " . $this->Y;
    }
}
class Point3D extends Point2D{
    public float $Z;
    public function __construct( float $X,float $Y, float $Z){
        parent::__construct($X, $Y);
        $this ->Z = $Z;
       
    }
    public function setZ(float $Z){
        $this->Z =$Z;
    }
    public function getZ(){
        return $this->Z;
    }
    public function setXYZ(float $X, float $Y, float $Z){
        $this->X =$X;
        $this->Y =$Y;
        $this->Z =$Z;
    }
    public function getXYZ(){
        return [$this->X, $this->Y, $this->Z];
    }
    public function toString(){
        return $this->X . " " . $this->Y ." ". $this->Z;
    }
}

$point3D = new Point3D(4,5,6);
echo "<pre>";
print_r($point3D->getXY());