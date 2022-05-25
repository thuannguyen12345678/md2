<?php
//  class HCN{

//     //khởi tạo thuộc tính
//     public $dai;
//     public $rong;

//     //hàm constructor
//     public function __construct($ts_dai, $ts_rong){

//         $this->dai = $ts_dai;
//         $this->rong = $ts_rong;



//     }
//     //khởi tạo phương thức
//     public function tinhdientich(){
//         return $this->dai * $this->rong;
//     }
//     public function tinhchuvi(){
//         return ($this->dai + $this->rong)*2;
//     }

//     public function setDai($ts_dai){
//         $this->dai = $ts_dai;
//     }
//     public function setRong($ts_rong){
//         $this->rong = $ts_rong;
//     }
//     public function getDai(){
//         return $this->dai;
//     }
//     public function getRong(){
//         return $this->rong;
//     }
// }

// //khởi tạo đối  tượng:
// $HCN=new HCN(2,3);
// $HCN->setDai(4);
// $HCN->setRong(3);
// //truy cập thuộc tính:
// // echo $HCN->dai;
// //echo $hcn->rong;

// //truy cập phương thức:
// echo $HCN->tinhdientich();
// echo" </br>";
// echo $HCN->tinhchuvi();
// echo "<pre>";
// print_r($HCN);
//  die();

//    class Hcn{
// public $dai;
// public $rong;
// public function __construct($ts_dai, $ts_rong){
//     $this->dai = $ts_dai;
//     $this->rong = $ts_rong;
// }
// public function dientich(){
//     return ($this->dai * $this->rong);
// }
// public function chuvi(){
//     return ($this->dai + $this->dai) * 2;
// }
// }
// $Hcn = new Hcn(5,6);
// echo $Hcn-> dientich();
// echo "<br>";
// echo $Hcn->chuvi();
// echo "<pre>";
// print_r($Hcn);

class mon{
    public $van;
    public $toan;
    public $dia;

    public function __construct($ts_van, $ts_toan, $ts_dia ){
        $this->van = $ts_van;
        $this->toan = $ts_toan;
        $this->dia = $ts_dia;
        
    }
    
    public function diemtong(){
        return ($this->sum =$this->van + $this->toan + $this->dia);
        
    }
    public function avg(){
        return ($this->van + $this->toan + $this->dia)/3;
    }
    public function setVan($ts_van){
        $this->van = $ts_van;
    }
    public function setToan($ts_toan){
        $this->toan = $ts_toan;
    }
    public function setDia($ts_dia){
        $this->dia = $ts_dia;
    }
    public function getVan(){
        return $this->van;
    }
    public function getToan(){
        return $this->toan;
    }
    public function getDia(){
        return $this->dia;
    }
   
}
$mon = new Mon(7,8,9);
    echo $mon->diemtong();
    echo "<br>";
    echo $mon->avg();
    $mon->setVan(6);
    echo "<br>";
    $mon->setToan(6);
    echo "<br>";
    $mon->setDia(5);
    echo $mon->getVan();
    echo "<br>";
    echo $mon->getToan();
    echo "<br>";
    echo $mon->getDia();
    echo "<br>";
echo $mon->diemtong();
echo "<br>";
echo $mon->avg();