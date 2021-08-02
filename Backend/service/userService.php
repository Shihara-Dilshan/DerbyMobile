<?php
require_once(__DIR__ . '/../middlewares/userValidate.php');
require_once(__DIR__ . '/../config/Database.php');
require_once(__DIR__ . '/../middlewares/generateToken.php');

function signUpService($data)
{
    $validate = userValidateSignUp($data);

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

            //can further implement to email/userName already exists
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

function loginService($data)
{
    $isValid = userValidateLogin($data);

    if ($isValid === true) {
        $email = $data["email"];
        $password = $data["password"];

        $database = new Database();
        $conn = $database->connect();;

        $sql = "SELECT * FROM `user` WHERE email=?";
        $stmt = $conn->prepare($sql);

        $stmt->execute([$email]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['email'] === $email) {
                if (password_verify($password, $row['password'])) {
                    $token = generateToken($row['email'], $row['userName'], $row['id']);
                    return json_encode(
                        array(
                            'token' => $token
                        )
                    );
                } else {
                    return json_encode(
                        array(
                            'message' => "Invalid password"
                        )
                    );
                }
            } 
        }
        return json_encode(
            array(
                'message' => "Email does not exists"
            )
        );
    } else {
        return json_encode(
            array(
                'message' => "Invalid data"
            )
        );
    }
}
