<?
namespace app\views;

class ViewShop
{
    private $myArray = [];

    public function __construct($myrow)
    {
        print_r("
            <div class='row filter-category'>
            <div><h5>Filter:</h5></div>
            <div><a href='index.php?route=shop/filter-laptop'>Ноутбуки</a></div>
            <div><a href='index.php?route=shop/filter-phone'>Телефоны</a></div>
            <div><a href='index.php?route=shop/filter-tablet'>Планшеты</a></div>
            
            </div>
            <div class='row product'>
        ");
        foreach($myrow as $value)
        {
            print_r("<div class='card'>
        <div class='card-img'>
            <img class='img-inside img-fluid' src='../".$value['image']."' alt='Card image cap'>
        </div>
        <div class='card-body'>
        <h5 class='card-title'>".$value['title']."</h5>
        <a href='index.php?route=shop/showone&id=".$value['id']."' class='btn btn-primary'>Review</a>
        </div>
        </div>");
        }
        echo "</div>";
    }

}

