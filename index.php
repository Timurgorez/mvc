<?php

require_once 'autoload.php';


use app\controllers\MainController;
use app\controllers\ContactsController;
use app\controllers\Route;
use app\models\Model;



//$d = new Model();
//$r = new MainController();









?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="nav-wrapper">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?route=main">Main Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=main/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=main/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=main/delivery">Delivery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=main/contacts">Contacts</a>
                </li>
            </ul>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="index.php?route=account/registration"><button type="button" class="btn btn-secondary">Registration</button></a>
                <a href="index.php?route=account/singin"><button type="button" class="btn btn-secondary">Sing In</button></a>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="main-content">
        <?
        if(!($_GET)){?>
            <div>
                <h1 id="page-title">Круть-Верть-Магазин - интернет-магазин бытовой техники в Украине</h1>
                    <p>
                        <a class="z" href="index.php?route=main/shop">Магазины мобильников , планшетов и ноутбуков</a>
                        Электронный мир приобрели необычайную популярность. И не только потому, что электроника для современного человека стала необходимостью, а и потому, что здесь вы обязательно найдете нужное устройство для отдыха, работы, развлечения, путешествий и общения по очень выгодным ценам.</p>
                    <p>Почему делать покупки через интернет-магазин бытовой техники удобнее и выгоднее? Здесь для вас подготовлен огромный ассортимент продукции с подробным описанием каждой модели. Вы без проблем сможете выбрать и купить компьютер или ноутбук, телевизор, <a class="z" href="index.php?route=shop/filter-phone">Телефоны</a>, иную технику. Такого ассортимента нет ни в одном оффлайн-магазине. Сравнить разные модели, почитать отзывы и узнать подробные характеристики товаров можно без спешки, поэтому ваш выбор - более объективен.</p>
                    <p>Особая категория товаров в нашем магазине - техника для автомобилистов. У нас вы можете купить GPS-навигаторы, радар-детекторы, видеорегистраторы.</p>
                    <p>Мы предлагаем большой выбор техники для отдыха в дороге и дома: наушники, плееры, фото- и <a class="z" href="index.php?route=shop/filter-laptop">Ноутбуки</a> и т.п.</p>
                    <p>Все новинки практически сразу же попадают в наш магазин техники, в каталоге которого вы легко найдете последние модели смартфонов, современного сетевого оборудования, любого товара для дома и работы. К тому же, своим клиентам мы предлагаем самые низкие цены.</p>
                    <p>Вся продукция, которую предлагает интернет-магазин техники Эльмир, имеет гарантию от производителей. Ею вы сможете воспользоваться в любом сервисном центре Харькова, Киева, Одессы, Днепропетровска, Запорожья, других городов.</p>
                    <p>Оперативную доставку по Украине обеспечивает команда логистов и менеджеров, которые ежедневно кропотливо обрабатывают ваши заказы. За время существования наш магазин справедливо заслужил отличную репутацию, что подтверждается только положительными отзывами о работе и множеством постоянных клиентов. Наш интернет-магазин бытовой техники ждет вас!</p>
            </div>
        <?
        }
        ?>
            <div>
            <?
            if($_GET['route']){
                $route = new Route();
                $route->callRoute();
            }
            ?>
            </div>

    </div>
</div>









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>
