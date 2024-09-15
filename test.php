<?php
// echo __FILE__;
// echo PHP_VERSION;
// $d = 0;
// $a = 3;
// $b = 4;
// $x;
// if ($d < 0) {
//     echo "Роз'язків немає";
// } elseif ($d > 0) {
//     echo $x = -$b + sqrt($d) / 2;
//     echo $x = -$b - sqrt($d) / 2;
// }
// else {
//     echo $x =round((-$b +sqrt($d)) /(2*$a),2);
// }
//$t = rand(350, 410) / 10;
$t = -4;
echo "$t \n";
if ($t < 0) {
    echo "Мороз!";
} elseif ($t == 0) {
    echo "Не мороз і не тепло ..";
} else {
    echo "Тепло";
}

$str = ($t < 0) ? "Мороз!" : (($t == 0) ? "Не мороз і не тепло .." : "Тепло");
echo $str;

// switch ($day) {
//     case 1:
//     // echo "ПН";
//     // break;
//     case 2:
//     // echo "ВТ";
//     // break;
//     case 3:
//         echo "Не вихідний";
//         break;
//     case 7:
//         echo "Вихідний";
//         break;
//     default:
//         echo "Error";
// }