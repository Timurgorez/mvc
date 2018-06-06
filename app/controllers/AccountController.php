<?php
/**
 * Created by PhpStorm.
 * User: thoryachev
 * Date: 06.06.2018
 * Time: 9:00
 */

namespace app\controllers;


use app\models\AccountModel;

class AccountController
{
    public $attributes;
    private $errors = [];
    private $minNameLetter = 3;
    private $maxNameLetter = 15;

    public function actionRegistration()
    {
        require_once __DIR__.'/../views/registration.html';
    }

    public function actionSingin()
    {
        require_once __DIR__.'/../views/signIn.html';
    }

    public function Validation($var)
    {
        $var = htmlspecialchars($var, ENT_QUOTES);
        $var = trim($var);
        return $var;
    }

    public function actionReg(){

        if(count($_POST) > 0){
            $name = $this->Validation($_POST["name"]);
            $secondName = $this->Validation($_POST["secondName"]);
            $email = $this->Validation($_POST["email"]);
            $password = $this->Validation($_POST["password"]);
            $checkUser = $this->Validation($_POST["checkUser"]);
        }else{
            return print_r('No variable POST');
        }
        $this->isEmailOk($email);
        $this->isNameOk($name, $this->minNameLetter, $this->maxNameLetter);







        $this->getError();

//        $reg = new AccountModel();
//        print_r($myrow = $reg->Registration($name, $secondName, $email, $password, $checkUser));
    }




    public function load($attributes = [])
    {
        foreach($attributes as $key => $value){
            if(!empty($key)){
                $this->attributes[$key] = $value;
            }
        }
    }

    public function isEmailOk($attributeEmail)
    {
        $pattern = '#^([\w]+\.?)+(?<!\.)@(?!\.)[a-zа-я0-9ё\.-]+\.?[a-zа-яё]{2,}$#ui';
        if(!preg_match($pattern, $attributeEmail)){
            return $this->errors["errorEmail"] = " ". $attributeEmail ." This is not valid Email Address";
        }else{
            return true;
        }
    }

    public function isNameOk($attributeName, $min , $max)
    {
        $pattern = "/^[a-zA-Zа-яА-ЯёЁ']{".$min.",".$max."}?$/";
        if(!preg_match($pattern, $attributeName)){
            return $this->errors["errorName"] = $attributeName." - This field should contain only letters";
        }else{
            return true;
        }
    }

    public function required($attributeName)
    {

        if(empty($this->attributes[$attributeName])){
            foreach($this->attributes as $key => $value){
                
            }
        }

    }

    public function getError()
    {

        if(!empty($this->errors)){
            foreach ($this->errors as $value){
                echo $value;
            }
            echo "<input type='button' onclick='history.back();' value='Go back and try again'/>";
        }


    }



    public function greaterThan($attributeName = '', $compareValue = 0)
    {
        // TODO: Implement greaterThan() method.
    }

    public function lowerThan($attributeName = '', $compareValue = 0)
    {
        // TODO: Implement lowerThan() method.
    }

    public function between($attributeName = '', $compareValueMin = 0, $compareMax = 0)
    {
        // TODO: Implement between() method.
    }

    public function strLongerThan($attributeName = '', $compareValue = 0)
    {
        // TODO: Implement strLongerThan() method.
    }

    public function strLessThan($attributeName = '', $compareValue = 0)
    {
        // TODO: Implement strLessThan() method.
    }

    public function strLengthBetween($attributeName = '', $compareValueMin = 0, $compareMax = 0)
    {
        // TODO: Implement strLengthBetween() method.
    }

    public function strLength($attributeName = '', $compareValue = 0)
    {
        // TODO: Implement strLength() method.
    }

    public function isNumeric($attributeName = '')
    {
        // TODO: Implement isNumeric() method.
    }

    public function isUrl($attributeName = '')
    {
        // TODO: Implement isUrl() method.
    }

    public function isTrue($attributeName = '')
    {
        // TODO: Implement isTrue() method.
    }

    public function isIn($attributeName = '', $compareArray = [])
    {
        // TODO: Implement isIn() method.
    }

    public function isNotIn($attributeName = '', $compareArray = [])
    {
        // TODO: Implement isNotIn() method.
    }

    public function equals($attributeName1 = '', $attributeName2 = '')
    {
        // TODO: Implement equals() method.
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }

    public function getErrors()
    {
        // TODO: Implement getErrors() method.
    }
    public function strLengthEquals( $attributeName = '', $compareValue = 0)
    {

    }
}