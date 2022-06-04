<?php
include '../public/variable.php';
use variable\main;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/catalog.css">
    <title></title>
</head>
<body>
    <div class="block_header">
        <?php echo main::$logoB;?>
        <div class="search-menu">
            <input type="text" id="search-block"
            placeholder="Поиск среди товаров"
            >
            <button id="search-btn"><?php echo main::$search;?></button>
        </div>
        <?php echo main::$geo;?>
        <span id="town">Выберите ваш город:</span>
        <!-- Выбор города: Москва и Московская область-->
        <?php echo  main::$tube2;?>
        <span id="tel1">+7 (999) 999-99-99</span>
        <span id="order-call">Заказать звонок</span>
        <?php echo main::$basket?>
        <span id="count">Товаров:</span> <!-- Вместо 10 - сделать переменную-->
        <span id="sum">Сумма:</span> <!-- Вместо 9999 - сделать переменную-->
        <?php echo main::$user;?>
        <span id="lk">Личный кабинет</span>
    </div>
</body>
</html>
