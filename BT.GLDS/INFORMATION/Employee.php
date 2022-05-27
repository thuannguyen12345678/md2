<?php
namespace INFORMATION;
class  Employee{
    public string $ho;
    public string $ten;
    private string  $ngay_sinh;
    public string $dia_chi;
    private string $cong_viec;
    public function __construct($ho ="" , $ten ="" , $ngay_sinh ="" , $dia_chi ="", $cong_viec = ""){
        $this->ho =$ho;
        $this->ten =$ten;
        $this->ngay_sinh =$ngay_sinh;
        $this->dia_chi =$dia_chi;
        $this->cong_viec =$cong_viec;
    }
    public function setFirstName($ho){
        $this->ho = $ho;
    }
    public function setLastName($ten){
        $this->ten = $ten;
    }
    public function setBirtDay($ngay_sinh){
        $this->ngay_sinh = $ngay_sinh;
    }
    public function setAddress($dia_chi){
        $this->dia_chi = $dia_chi;
    }
    public function setWork($cong_viec){
        $this->cong_viec = $cong_viec;
    }
    public function getHo(){
        return $this->ho;
    }
    public function getTen(){
       return $this->ten;
    }
    public function getNgay_sinh(){
        return $this->ngay_sinh;
    }

    public function getDia_chi(){
        return $this->dia_chi;
    }
    public function getCong_viec(){
        return $this->cong_viec;
    }
    public function getInfo(){
        return "Họ và tên :". $this->ho." ".$this->ten."<br>". "Sinh Ngày :". $this->ngay_sinh."<br>". "Địa chỉ :". $this->dia_chi."<br>". "Vị trí công việc :". $this->cong_viec;
    }
}

//     $emp = new Employee("Nguyễn Đức",  "Thuần", "20_3_1998", "đông hà", "Giám đốc");
// echo $emp->getInfo();