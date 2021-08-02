<?php
    require_once(__DIR__ . '/../model/User.php');
    
    function userValidateSignUp($userData){
        try{
            $userName = $userData["userName"];
            $email = $userData["email"];
            $password = $userData["password"];
            $mobile = $userData["mobile"];
        }catch(Exception $e){
            return null;
        }

        if($userName === null || strlen($userName) < 3 ||
           $email === null || strlen($email) < 3 ||
           $password === null || strlen($password) < 3 ||
           $mobile === null || strlen($mobile) < 3
           ){
            return null;
        }else{
            $user = new User($userName, $email, $password, $mobile);
            return $user;
        }
    }

    function userValidateLogin($userData){
        try{
            $email = $userData["email"];
            $password = $userData["password"];
        }catch(Exception $e){
            return false;
        }

        if($email === null || strlen($email) < 3 ||
           $password === null || strlen($password) < 3
           ){
            return false;
        }else{
            return true;
        }
    }

