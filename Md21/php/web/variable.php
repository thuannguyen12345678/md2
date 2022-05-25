<?php
// $arr = [
//     "nam" => 30,
//     "minh" => 20,
//     "thuan"=> 30
// ];

// foreach ($arr as $key =>$value){
//     echo "$key - $value </br>";
// };


// $txt = "w3Schools.com";
//  echo "i love $txt!"
// echo "i love" . $txt . "!";





//biến toàn cục:
// $x = 5;
// function myTest(){
//     //sử dụng biến ở bên trong hàm sẽ sinh ra lỗi:
//     // echo "<p>Variable x inside function is: $x</p>"
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";


// //biến cục bộ:

// function myTest() {
//     $x = 5; /* local scope */
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();
//sử dụng biến ở ngoài hàm sẽ sinh ra lỗi;
// echo "<p>Variable x outside function is: $x</p>";






//từ khóa global: dung để gọi biến ở ngoài  hàm mà k bị lỗi:

// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }

// myTest();
// echo $y; /* outputs 15 */

//từ khóa static: định nghĩa 1 biến không bị xóa,





function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest();
myTest();
myTest();


 ?>