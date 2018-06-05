<?php
/**
 * Created by PhpStorm.
 * User: thoryachev
 * Date: 05.06.2018
 * Time: 10:41
 */

namespace app\controllers;

use app\models\ShopModel;
use app\views\ViewShop;
use app\views\ViewShowOne;

class ShopController
{
    public function actionShowone()
    {
        $shop = new ShopModel();
        if($_GET['id']){
            $id = $_GET['id'];
            $myrow = $shop->getShowOne($id);
        }
        //var_dump($myrow);
        return new ViewShowOne($myrow);
    }


    public function actionFilter()
    {
        $route = $_GET['route'];
        $routePieces = explode('/',strtolower($route));
        $filter = explode("-", $routePieces[1]);

        $shop = new ShopModel();

        $category = [
            'phone' => 1,
            'tablet' => 2,
            'laptop' => 3
        ];
        foreach ($category as $key => $value){
            if($filter[1] == $key){
                $result = $shop->FilterCategory($value);
            }
        }
        return new ViewShop($result);

    }
}