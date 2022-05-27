<?php
define("admin" ,1);
define("user" ,2);

class User{
    protected string $name;
    protected string $email;
    public int $role = 1;
    public function getInfo(){
       return "name : ".$this->name."<br>"." email : " .$this->email."<br>";
    }
    public  function isAdmin(){
        if($this->role==1){
            echo "là admin";
        }else if($this->role==2){
            echo "là người dùng bình thường";
        }
    }
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    public function setEmail($ts_email){
        $this->email = $ts_email;
    }
    public function setRole($ts_role){
        $this->role = $ts_role;
    }
}
$user1 = new User();
$user1->setName("thuần");
$user1->setEmail("thuan@gmail.com");
$user1->setRole(1);
echo  $user1->getInfo();
 $user1->isAdmin();


