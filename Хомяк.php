<!DOCTYPE html>
<html>
<?php
include_once 'time-theme.php';
?>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/style-hamster.css">
    <link rel="stylesheet" type="text/css" href="<?php echo timetheme1()?>"> 
    <title>title</title>
</head>
<body>
<table> 
    <caption>
        Животные
    </caption>
    <tr>
        <td>Птица</td>
        <td><img src="images/bird.png" alt="Птица"></td>
    </tr>
    <tr>
        <td colspan="2">Хомяк <img class="grayscale" src="images/hamster.png" alt="Хомяк"></td>
        <!-- <td></td> -->
    </tr>
    <tr>
        <td>Божья коровка</td>
        <td><img src="images/ladybug.png" alt="ladybug"></td>
    </tr>
</table>
</html>