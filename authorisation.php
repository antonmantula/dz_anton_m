<?php
session_start();
include("include/Connect2DB.php");
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
    <title>Страница авторизации</title>
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
    <form action="include/auth.php" method="post">
        <label for="login">Логин:</label>
        <input type="text" name="login">
        <br>
        <label for="password">Пароль:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Войти</button>
    </form>
    <?php
    /*
    $Users = [
        ['login' => 'admin', 'hash' => '0192023a7bbd73250516f069df18b500'],      //password admin123
        ['login' => 'moderator', 'hash' => 'ccefcf04c4a06c54b80c57a2f20d59f9'],  //password moder123
        ['login' => 'anton', 'hash' => '42b46b98d4cf19ec3b8eb076284a63fd'],      // password anton123
    ];
    $_POST['login'] = isset($_POST['login']) ? $_POST['login'] : 1;
    $_POST['password'] = isset($_POST['password']) ? $_POST['password'] : 1;
    foreach($Users as $key){
        if ($key['login']==$_POST['login'] && $key['hash']==(md5($_POST['password']))){
            header ("Location:welcome.php");
        } else {
            echo "Введите данные для входа или " . '<a href="registration.php">зарегистрируйтесь.</a>'; break;
        }
    }
*/
?>
</body>
</html>