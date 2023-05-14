<?php
session_start();
$_POST['exit'] = isset($_POST['exit']) ? $_POST['exit'] : 0;
$e = $_POST['exit'];
    if ($e == 1) {
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<?php // подключения php-страницы с функцией для смены темы.
include_once 'time-theme.php';
?>
<?php // подключения php-страницы с функциями.
include_once 'functions.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Страница регистрации</title>
    <?php
    //echo timetheme1(); // применение функции для смены темы по времени суток
    if (empty($_COOKIE['color'])) { // применение функции для смены темы вручную
        echo '<link rel="stylesheet" type="text/css" href="styles/style-day.css">';
    } else {
        $color_id = $_COOKIE['color'];
        echo ColorSwitch($color_id);
    }
    ?>
</head>
<body>
    <header class="header-main">
        <div class="logo">
           <img src="images/logo.png" alt="menu" height=45>
        </div>
        <div class="menu">
            <div class="links">
                <a class="link2" href="authorisation.php">Авторизация</a>
            </div>
            <div class="links">
                <a class="link2" href="registration.php">Регистрация</a>
            </div>
            <div class="links">
                <a class="link2" href="fact.php">Fact</a>
            </div>
            <div class="links">
                <a class="link2" href="bitrix.php">Bitrix</a>
            </div>
            <div class="links">
                <a class="link2" href="index.php">Главная страница</a>
            </div>
            <div class="links">
                <a class="link2" href="account.php"><?
                if (isset($_SESSION['username']['0'])) {
                    echo "Личный кабинет, " . $_SESSION['username']['0'];
                }
                ?></a>
          </div>
        </div>
    </header>
    <hr>
    <form action="include/reg.php" method="post">
        <label for="login">Логин:</label>
        <input type="text" name="login">
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password">
        <br>
        <label for="email">Электронная почта: </label>
        <input type="email" name="email">
        <br>
        <button type="submit">Зарегистрироваться</button>
    </form>

</body>
</html>