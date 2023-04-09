<!DOCTYPE html>
<html lang="en">
<?php
include_once 'time-theme.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo timetheme1()?>"> 
    <title>Домашнее задание</title>
</head>

<body>
    <header class="header-main">
        <div class="logo">
            <img src="images/logo.png" alt="menu" height=45>
        </div>
        <div class="menu">
            <div class="links">
                <a class="link2" href="table.php">Задание из урока №3</a>
            </div>
                        <div class="links">
                <a class="link2" href="form.php">Задание из урока №4</a>
            </div>
            <div class="links">
                <a class="link2" href="grid.php">Задание из урока №5 (кружки)</a>
            </div>
            <div class="links">
                <a class="link2" href="table2.php">Задание из урока №5 (Таблица Менделеева)</a>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="name"><h4>Антон Мантула</h4></div>
        <div class="infocontainer">
            <div class="photo">
                <!-- <img src="images/photo.jpg" alt="photo"> -->
            </div>
            <div class="text">
                <div class="about">
                    <div class="aboutme">Всем привет! Я в настоящее время работаю инженером технического бюро в газовом цехе ПАО "ММК". С разработкой сталкивался только в университете на уроках информатики, т.е. опыта у меня нет. На данный курс пошел, так как есть желание сменить сферу деятельности.</div>
                    <div class="aboutcourse">Занятиями очень доволен. Пока что все понятно и доходчиво.</div>
                </div>
            </div>
        </div>
        <Div class="name"><h4>Времена года</h4></Div>
        <div class="season">
            <div class="winter">
                <div class="winterpicture seasonpicture"></div>        
                <div class="seasontext">Зима — самое холодное время года, наступающее за осенью и сменяющееся весной.</div>
            </div>
            <div class="spring">
                <div class="springpicture seasonpicture"></div>        
                <div class="seasontext">Весна — одно из четырёх времён года, переходный сезон между зимой и летом.</div>
            </div>
            <div class="summer">
                <div class="summerpicture seasonpicture"></div>        
                <div class="seasontext"> Лето характеризуется наиболее высокой температурой окружающей среды.</div>
            </div>
            <div class="fall">
                <div class="fallpicture seasonpicture"></div>        
                <div class="seasontext">Осень — переходный сезон, когда заметно уменьшение светового дня, и постепенно понижается температура окружающей среды.</div>
            </div>
        </div>
        <Div class="name"><h4>Города Российской Федерации</h4></Div>
        <div class="goroda">
            <div class="msc">
                <div class="mscpic"></div>
                <div class="gorodtext">Москва — столица России, город федерального значения, административный центр Центрального федерального округа и центр Московской области. Крупнейший по численности населения город России.</div>
            </div>
            <div class="ekb">
                <div class="ekbpic"></div>
                <div class="gorodtext">Екатеринбург — административный центр Уральского федерального округа и Свердловской области.</div>
            </div>
            <div class="nsk">
                <div class="nskpic"></div>
                <div class="gorodtext">Новосибирск — самый большой город в Азиатской части России. Административный центр Сибирского федерального округа, Новосибирской области.</div>
            </div>
            <div class="vld">
                <div class="vldpic"></div>
                <div class="gorodtext">Владивосток — город и порт на Дальнем Востоке России; административный центр Приморского края, Владивостокского городского округа а также центр Дальневосточного федерального округа.</div>
            </div>
        </div>
    </main>
</body>
</html>