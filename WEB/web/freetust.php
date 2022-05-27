<?php
// $nam = array(
//     1990,
//     1991,
//     1992,
//     1993,
//     1994
// );
// foreach ($nam as $value){
//     echo $value . "<br/>";
// }





// $sinhvien = array(
//     'sv1' => 'nguyễn văn A',
//     'sv2' => 'nguyễn văn B',
//     'sv3' => 'nguyễn văn C',
//     'sv4' => 'nguyễn văn D',
//     'sv5' => 'nguyễn văn E',
//     'sv6' => 'nguyễn văn F',
//     'sv7' => 'nguyễn văn G',
//     'sv8' => 'nguyễn văn H'
// );
// foreach ($sinhvien as $tensv){
//     echo $tensv . '<br/>';
// }

//dung foreach để duyệt mảng:
// $age = array(
//     "peter" =>"35",
//     "ben" => "37",
//     "jone" =>"43"
// );
// foreach($age as $key => $value){
//     echo "key=" . $key . ",value=". $value;
//     echo "<br>";
// }



//dùng mảng liên kết:
// $student = [
//     'name' => 'nguyễn văn tèo',
//     'job' => 'sinh viên'
// ];
// echo $student ['name'] . '-' . $student['job'];




//mảng 2 chiều:
$arr = [
    [1,2,3,4,5],
    [3,4,5,6,7],
    [4,2,2,3,5]
];
// echo $arr[1][4];

for ($i = 0; $i<count($arr);$i++){
    for ($j =0; $j< count($arr[0]); $j++){
        echo $arr[$i][$j];
    }
}
?>