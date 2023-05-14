<?php 
function changecol($str1) { // функция для окрашивания первой фразы.
    $arr1 = preg_split("/[?!.]+/", $str1);
    foreach ($arr1 as $key => $value) {
        if ($key == 0) { 
        echo '<span style="color: black">' . $value . '.' .'</span>';
        } else {
        $arr2[] = $value;
        
        }   
    }
    echo implode(' ', $arr2) . '.';
}
function differentcolor($str2) {  // функция для чередования цвета четных и нечетных слов.
    $arr2 = explode(' ', $str2);
    foreach ($arr2 as $key => $value) {
        if ($key % 2 == 0) {
            echo '<span style="color: darkcyan">' . $value .'</span>' . ' ';
        } else {
            echo '<span style="color: darkcyan">' . $value  .'</span>' . ' ';
        }
    }
}
function birthtime($str3) { // функция для расчета разницы в днях между днем рождения и текущей датой
    echo "<br>";
    $dateobirth = DateTime::createFromFormat("d.m.Y", "$str3");
    $today = new DateTime(); 
    echo 'Дата рождения: ' . $dateobirth->format("d.m.Y") . ' г.';
    echo "<br>";
    echo 'Текущая дата: ' . $today->format("d.m.Y") . ' г.';
    echo "<br>";
    $interval = $today->diff($dateobirth);
    echo 'Сегодня мне: ' . $interval->days . ' дней.';
}
function ColorSwitch($color_id) { // выбор цвета фона
    switch ($color_id){
        case '1': return '<link rel="stylesheet" type="text/css" href="styles/style-day.css"';break;
        case '2': return '<link rel="stylesheet" type="text/css" href="styles/style-night.css"';break;
    }  
}


