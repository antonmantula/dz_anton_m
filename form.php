<!DOCTYPE html>
<html lang="en">
<?php
include_once 'time-theme.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" name="lesson4">
    <p>
        <label for="login">Имя пользователя:</label>
        <input id="login" type="text"> 
    </p>
    <p>
        <label for="e-mail">E-mail:</label>
        <input id="e-mail" type="email" required> 
    </p>
    <p>
        <label>Что Вам нравится больше всего?
            <select name="name1">
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="php">PHP</option>
                <option value="bitrix">BITRIX</option>
            </select>
        </label>
    </p>
    <fieldset>
        <legend>Хочу быть...</legend>
        <p>
            <input type="radio"> Junior PHP Developer 
            <input type="radio"> Middle PHP Developer 
            <input type="radio"> Front-end разработчик
            <input type="radio"> Нее, хочу быть дизайнером
        </p>
    </fieldset>
    <fieldset>
        <legend>Мои навыки в программировании</legend>
        <p>
            <input type="checkbox"> Бог программирования
            <input type="checkbox"> Гуру программирования
            <input type="checkbox"> Я еще учусь
        </p>
    </fieldset>
    <p>
        <label for="time">Во сколько мне удобно приходить на занятия:</label>
        <input id="time" type="time"> 
    </p>
    <p>
        <label for="comm">Мои пожелания и комментарии по крусам:</label>
        <textarea name="comments" id="comm" cols="30" rows="5"></textarea>
        </p>
    <p>
        <button type="submit">Все, я справился с заполнением формы!</button>
    </p>
</form>
</body>
</html>