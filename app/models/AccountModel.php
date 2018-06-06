<?php
/**
 * Created by PhpStorm.
 * User: thoryachev
 * Date: 06.06.2018
 * Time: 9:38
 */

namespace app\models;


class AccountModel
{
    public function Registration($name, $secondName, $email, $password, $checkUser)
    {

        //echo $name, $secondName, $email, $password, $checkUser;


        $pdo = DB::getInstance()->PDO();
        $result = $pdo->prepare("SELECT * FROM users WHERE name = ? OR mail = ?");
        $result->execute([$name, $email]);
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
//            if($row['name'] == $name){
//                return print_r('Пользователь c именем ' .$name. ' уже зарегестрирован, выберете другое имя');
//            }
//            if($row['mail'] == $email){
//                return print_r('Пользователь с EMAIL ' .$email.' уже зарегестрирован.');
//            }
             echo $row['name'];
        }
//        if ($name && $email && $password && $password && $checkUser) {
//            $result = $pdo->prepare("INSERT INTO users (name, secondName, email, password, checkUser)
//							VALUES(?, ?, ?, ?, ?)");
//            $result->execute([$name, $secondName, $email, $password, $checkUser]);
//            return print_r("Add ".$name." to DB");
//        }else{
//            return print_r("Variables are empty");
//        }
    }
}