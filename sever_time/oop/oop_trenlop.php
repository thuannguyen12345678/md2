<?php
// class colors{
//     public static $color = "red";
//     public static function getcolor(){
//        return self::$color;
//     }
 
// }
// echo colors::getcolor();


class Student{
    public string $name;
    public string $email;
    protected string $favorites;
    private static $school = "CG";
    public static function getSchool(){
        return self::$school;
    }
    public function __construct(string $name, string  $email, string $favorites){
            $this->name = $name;
            $this->email = $email;
            $this->favorites = $favorites;
    }
    // public function getEmail(){
    //     return $this->email;
    // }
    public function getFavorites(){
        return $this->favorites;
    }
     
  
}
$S = new Student("nguyen đức thuan", "thuann@gmail.com", "ngủ");
// echo $S->name."<br>";
echo $S->email."<hr>";
echo student::getSchool();
// echo $S->getFavorites();