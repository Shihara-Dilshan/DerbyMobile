<?php
    require_once(__DIR__ . '/../middlewares/userValidate.php');

    function signUpService($data){
        $validate = userValidate($data);

        if($validate === null){
            return json_encode(
                array(
                    'message' => "Invalid data. Please fill the data"
                )
            );
        }else{
            $validate->setPassword(password_hash($validate->getPassword(), PASSWORD_BCRYPT));
            return json_encode(
                array(
                    'message' => $validate->getPassword()
                )
            );
        }
    }