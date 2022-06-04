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
<div class="block_description">
    <span id="one_description">Описание</span>
    <div class="block_brief">
        <span id="title_brief">Описание</span>
        <span id="text_brief">HD-TVI камера с EXIR-подсветкой до 20 метровпостроена на 1/2.7</span>
    </div>
    <div id="line_tovars"></div>
    <div class="dop_block">
        <span id="title_dop">Работа со звуком</span>
        <span id="text_dop">Встроенный микрофон</span>
        <?php echo main::$yes ?>
    </div>
    <div id="line_tovars_2"></div>
    <div class="technicalSpecifications_block">
        <span id="title_tech">Технические характеристики</span>
        <span class="technical">Материал корпуса:</span>
        <span class="technical">Цвет:</span>
        <span class="technical">Длина, мм:</span>
        <span class="technical">Ширина, мм:</span>
        <span class="technical">Высота, мм:</span>
        <span class="technical">Вес, кг:</span>
        <span class="technical">Разрешение изображения:</span>
        <span class="technical">Матрица:</span>
        <span class="technical">Сенсор:</span>
        <span class="technical">Угол обзора:</span>

        <span class="technical" id="date_tech_1">металл</span>
        <span class="technical" id="date_tech_2">белый</span>
        <span class="technical" id="date_tech_3">155</span>
        <span class="technical" id="date_tech_4">63</span>
        <span class="technical" id="date_tech_5">63</span>
        <span class="technical" id="date_tech_6">0,32</span>
        <span class="technical" id="date_tech_7">1920x1080</span>
        <span class="technical" id="date_tech_8">1/2.9 CMOS Aptina</span>
        <span class="technical" id="date_tech_9">AR0230</span>
        <span class="technical" id="date_tech_10">80</span>
    </div>
</div>
</body>
</html>
