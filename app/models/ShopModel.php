<?php
namespace app\models;

use app\models\DB;

class ShopModel
{
    public function getArrayWithProduct()
    {
        $pdo = DB::getInstance()->PDO();
//        var_dump($pdo);
        $result = $pdo->prepare("SELECT * FROM product");
        $result->execute();
        $myrow = [];
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $myrow[] = $row;
        };

        return $myrow;
    }

    public function getShowOne($id)
    {
        $pdo = DB::getInstance()->PDO();
//        var_dump($pdo);
        $result = $pdo->prepare("SELECT * FROM product WHERE id = ?");
        $result->execute([$id]);
        $myrow = [];
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $myrow[] = $row;
        };

        return $myrow;
    }

    public function FilterCategory($filter)
    {
        $pdo = DB::getInstance()->PDO();

        $result = $pdo->prepare("SELECT * FROM product WHERE category_id = ?");
        $result->execute([$filter]);
        $myrow = [];
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $myrow[] = $row;
        };

        return $myrow;
    }
}