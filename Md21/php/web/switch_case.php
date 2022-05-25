<?php
//kiểm tra số ngày trong một tháng:

$month =5;
switch ($month){
    case 4:
    case 6:
    case 9:
    case 11:
        echo "thang $month co 30 ngay";
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "thang $month có 31 ngay";
        break;
    case 2:
        echo "thang $month có 28 hoặc 29 ngày";
        break;
}