<?php
require __DIR__ . '/../vendor/autoload.php';
use Firebase\JWT\JWT;


function generateToken($email, $userName, $userId)
{
    $key = "MANHDYEHfisedfjkeuiryu347ufhjndjfd";

    $payload = array(
        "email" => $email,
        "username" => $userName,
        "userid" => $userId,
        "iat" => 1356999524,
        "nbf" => 1357000000
    );
    $jwtToken = JWT::encode($payload, $key);

    return $jwtToken;
}
