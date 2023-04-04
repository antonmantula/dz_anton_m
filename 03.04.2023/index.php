<?php
echo "Задание №1. <br>";
echo "<br>";
$a = 5;
while ($a <= 13) {
    echo $a . '<br>';
    $a++;
}

echo "<br>";
echo "Задание №2 (while). <br>";
echo "<br>";
$num = 1000;
$i1 = 0;
while ($num >= 50) {
    $num = $num / 2;
    $i1++;
}
echo "Получилось число $num . <br>";
echo "Количество итераций: $i1 . <br>";

echo "<br>";
echo "Задание №2 (for). <br>";
echo "<br>";
$num2 = 1000;
$i2 = 0;
for ($num2 = 1000; $num2 >= 50; $i2++) {
    $num2 = $num2 / 2;
}
echo "Получилось число $num2 . <br>";
echo "Количество итераций: $i2 . <br>";

echo "<br>";
echo "Задание №3 (switch). <br>";
echo "<br>";
$i=5;
switch ($i){
    case '0': echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10';break;
    case '1': echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9';break;
    case '2': echo '0, 1, 2, 3, 4, 5, 6, 7, 8';break;
    case '3': echo '0, 1, 2, 3, 4, 5, 6, 7';break;
    case '4': echo '0, 1, 2, 3, 4, 5, 6';break;
    case '5': echo '0, 1, 2, 3, 4, 5';break;
    case '6': echo '0, 1, 2, 3, 4';break;
    case '7': echo '0, 1, 2, 3';break;
    case '8': echo '0, 1, 2';break;
    case '9': echo '0, 1';break;
    case '10': echo '0';break;
    default: echo 'Задайте число от 0 до 10.';
}
echo "<br>";

echo "<br>";
echo "Задание №3 (for). <br>";
echo "<br>";
$i2 = 5;
if ($i2 < 0 || $i2 > 10) {
    echo 'Задайте число от 0 до 10.';
} else {
    $b = 0; 
    for ($b = 0; $b <= 10-$i2; $b++) {
        if ($b == 0) {
            echo $b;
        }else {
            echo ", $b";
        }
    }
}