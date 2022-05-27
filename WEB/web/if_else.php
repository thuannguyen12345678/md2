<?php




// $sum = 0;
// for ($i = 1; $i <=100; $i++){
//     if ($i % 2==0){
//         $sum+=$i;
//     }
// }
// echo $sum;



//kiểm tra xem có phải số chẳn hay không:
function isEvenNumber($number){
    return $number %2 === 0;
}

if (isEvenNumber(number:6)){
    echo "là số chẳn";

}else{
    echo "là số lẻ";
}
?>