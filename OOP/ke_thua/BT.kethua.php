<?php
class Circle{
    protected string $ban_kinh;
    protected string $mau_sac;
    public static $Dien_tich;
    public function setBan_kinh($ban_kinh){
        $this->ban_kinh = $ban_kinh;
        
    }
    public function setMau_sac($mau_sac){
        $this->mau_sac = $mau_sac;
    }
    public function getBan_kinh(){
        return $this->ban_kinh;
    }
    public function gettMau_sac(){
        return $this->mau_sac;
    }
    public function toString(){
        echo "bán kính là:" . $this->ban_kinh ."Màu Sắc :". $this->mau_sac."<br>";
    }
    public function Dien_tich(){
        return self::$Dien_tich=($this->ban_kinh*$this->ban_kinh)*pi();
    }
}
    $circle =new Circle();
    $circle->setBan_kinh(5);
    echo $circle->Dien_tich()."<br>";


class Cylinder extends Circle{
    public string $chieu_cao;
    public function setChieu_cao($chieu_cao){
        $this->chieu_cao = $chieu_cao;
    }
    public function getChieu_cao(){
        return $this->chieu_cao;
    }

    public function getThe_tich(){
       return parent::$Dien_tich * $this->chieu_cao;
    }
    public function toString(){
       echo "bán kính là:" . $this->ban_kinh ."      Màu Sắc :". $this->mau_sac. "   Chiều  cao là: ".$this->chieu_cao."<br>";
    }
}
$Cylinder =new Cylinder();
 $Cylinder->setChieu_cao(20);
$Cylinder->setBan_kinh(5);
$Cylinder->setMau_sac("blue");
 $Cylinder->toString();
echo $Cylinder->getThe_tich();





 
