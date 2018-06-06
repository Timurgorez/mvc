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

        //if we have any filter - divide it.
        $filter = explode("-", $routePieces[1]);

        // string for search controller.
        $controller = "app\\controllers\\". ucfirst($routePieces[0]).$this->controllerSuffix;
        // string for search method in controller.
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

}