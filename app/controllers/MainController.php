<?php

namespace app\controllers;

use app\models\ShopModel;
use app\views\ViewShop;

class MainController
{
//    public function __construct(){
//        var_dump("MainController");
//    }

    public function actionShop()
    {
        $shop = new ShopModel();
        $myrow = $shop->getArrayWithProduct();
        return new ViewShop($myrow);
    }

    public function actionAbout()
    {
        require_once  __DIR__.'/../views/about.html';
    }

    public function actionContacts()
    {
        require_once  __DIR__.'/../views/contacts.html';
    }

    public function actionMain()
    {
        require_once __DIR__.'/../views/main.html';
    }
    public function actionDelivery()
    {
        require_once __DIR__.'/../views/delivery.html';
    }
}







