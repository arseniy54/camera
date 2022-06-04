<?php
    include_once '../public/variable.php';
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
    <div class="block-footer">
        <div class="block">
             <?php echo main::$logoW;?>
            <span id="phone">+7 (999) 999-99-99 </span>
            <span id="email">support@its-project.su</span>
            <div class="views">
                <a id="company" href=#>О компании</a>
                <a id="garant" href=#>Гарантия</a>
                <a id="work" href=#>Работа</a>
                <a id="pay" href=#>Доставка и оплата</a>
                <a id="montage" href=#>Монтаж</a>
                <a id="contact" href=#>Адреса и контакты</a>
            </div>
            <div class="call">
                <span id="text-call">Заказать звонок</span>
                <div class="call-menu">
                    <input id="text-phone" class="phone"
                           type="tel"
                           pattern="+7 (9[0-9]{2}) - [0-9]{3} - [0-9]{2} - [0-9]{2})"
                           placeholder="+7 (999) 999-99-99" />
                    <button id="button-call"><?php echo main::$tube;?></button>
                </div>
            </div>
            <div id="line"></div>
            <div class="social">
                <?php echo main::$instagram . main::$facebook . main::$twitter;?>
            </div>
            <span id="emblem">&copy; 2022 “ITS-PROJECT”</span>
        </div>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
    $(".phone").mask("+7(999)999-9999");
</script>