<?php
/**
 * Created by PhpStorm.
 * User: thoryachev
 * Date: 05.06.2018
 * Time: 14:58
 */

namespace app\views;


class ViewShowOne
{
    public function __construct($myrow)
    {
        foreach ($myrow as $row){
            print_r("
            <div class='card-full'>
            <img class='img-inside img-fluid' src='../".$row['image']."' alt='Card image cap'>
            <div class='card-body-inside'>
            <h5 class='card-title'>".$row['title']."</h5>
            <p><b>Цена: ".$row['price']."</b></p>
            <p> Размер: ".$row['size']."</p>
            <p>Цвет: ".$row['color']."</p>
            <p><b>Описание:</b> <br>".$row['description']."</p>
            <a href='index.php?id=".$row['id']."&shopcard=".$row['id']."'><button class='btn btn-primary'>Add to Card</button></a>
            </div>
            </div>
            ");
        }
    }
}