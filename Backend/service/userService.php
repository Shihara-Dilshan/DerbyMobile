<?php
require_once(__DIR__ . '/../middlewares/userValidate.php');
require_once(__DIR__ . '/../config/Database.php');


function signUpService($data)
{
    $validate = userValidate($data);

    if ($validate === null) {
        return json_encode(
            array(
                'message' => "Invalid data. Please fill the data"
            )
        );
    } else {
        $validate->setPassword(password_hash($validate->getPassword(), PASSWORD_BCRYPT));

        $database = new Database();
        $conn = $database->connect();

        try {
            $statement = $conn->prepare('INSERT INTO user (userName, email, password, mobile) 
                                     VALUES (:userName, :email, :password, :mobile)');

            //can further implement to email/userName alreasy exists
            $statement->execute([
                'userName' => $validate->getUserName(),
                'email' => $validate->getEmail(),
                'password' => $validate->getPassword(),
                'mobile' => $validate->getMobile(),
            ]);
        } catch (Exception $e) {
            return json_encode(
                array(
                    'message' => $e->getMessage()
                )
            );
        }
        return json_encode(
            array(
                'message' => "succesfully inserted"
            )
        );
    }
}
