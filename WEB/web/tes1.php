<?php 

// echo '<pre>';
// print_r( $_SERVER );
// echo '</pre>';

 //KIỂM TRA KHI NGƯỜI DÙNG SUMBIT FORM
//   if( $_SERVER ['REQUEST_METHOD']== 'POST'){
//     echo '<pre>';
//     print_r( $_REQUEST );
//     echo '</pre>';

// $username=$_REQUEST['username'];
// $password=$_REQUEST['password'];


//  echo "xin chào mọi người". "tôi là ".$username ."<br> password là".$password;


//   }
  
$name = "Nguyễn Đức Thuần";
$telephone = 0123456789;
$class = c04;



echo $name;

// $name = "thuần";
// $number = 12345;
// $numerical = 10.22;
// $B = true;
// $c = array("dog", "cat","tiger");
// $n = null;

// echo $name;
// echo $number;
// echo $numerical;

// var_dump($name);

// echo '<pre>';
// print_r( $c);
// print_r( $c);

// echo '</pre>';

// var_dump($c);





// $a = 5;
//     function tinh_tong(){
//         global $a;
//         $b = 6;
//         echo $a + $b;
//     }
//     tinh_tong();
?>





<form action="" method="post">
    tài khoản:
    <input type="text" name="username" id="username">
    <br>
    mật khẩu:
    <input type="password" name="password" id="">
    <br>
    <input type="submit" value="sumbit">
</form> 