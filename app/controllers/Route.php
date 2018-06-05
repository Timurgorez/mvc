<?php


namespace app\controllers;


use app\models\Model;
//use app\controllers\MainController;


//use app\controllers\error404;

class Route
{
    private $route = "route";
    private $actionDefault = "main";
    private $controllerSuffix = "Controller";
    private $actionPrefix = "action";



    public function callRoute (){
        $route = $_GET[$this->route];
        if(empty($route)) return new Error404("<br>Route $route is empty<br>");
        $routePieces = explode('/',strtolower($route));
        //var_dump($routePieces);
        $filter = explode("-", $routePieces[1]);
        //var_dump($filter[1]);
        $controller = "app\\controllers\\". ucfirst($routePieces[0]).$this->controllerSuffix;
        $action = $this->actionPrefix;

        if(count($filter) > 1){ // if we have filter category, like 'phone','tablet','laptop'.
            $action = $action . $filter[0];
        }else{
            for($i = 1; $i <= count($routePieces); $i++){
                if(count($routePieces) == 1){ // if only 'route=main' -> main page.
                    $action .= ucfirst($this->actionDefault);
                }else{
                    $action .= ucfirst(strtolower($routePieces[$i]));
                }
            }
        }

        //var_dump($action);
//        if(empty($routePieces[1])){
//            $action = $this->actionPrefix . ucfirst($this->actionDefault);
//        }elseif($routePieces[2]){
//            $action = $this->actionPrefix . ucfirst($routePieces[2]);
//        }else{
//            $action = $this->actionPrefix . ucfirst($routePieces[1]);
//        }

        if(!class_exists($controller)){
            return new Error404("<br>Not found controller $controller<br>");
        }else{
            $controllerClass = new $controller();
        }
        if(!method_exists($controller, $action)){
            return new Error404("<br>Not found method $action<br>");
        }else{
            $controllerClass->$action();
        }
    }

    //    public function __construct ()
//    {
//        $this->route = $_GET['route'];
//
//        switch ($_GET['route']) {
//            case 'contacts':
//                echo "contacts <br>";
//                new Model($this->route);
//                //$this->getContacts();
//                break;
//            case 'about':
//                echo "about  <br>";
//                new Model($this->route);
//                break;
//            case 'auth':
//                echo "Регистрация  <br>";
//                new Model($this->route);
//                break;
//            case 'singin':
//                echo "Вход  <br>";
//                new Model($this->route);
//                break;
//        }
//
//    }

}