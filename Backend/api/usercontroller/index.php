<?php
require_once(__DIR__ . '/../../service/userService.php');
require_once(__DIR__ . '/../../middlewares/tokenValidateDecorater.php');
require_once(__DIR__ . '/../../middlewares/validateToken.php');


$request = $_SERVER['REQUEST_METHOD'];
$url = rawurldecode("$_SERVER[REQUEST_URI]");
$BASE_URL = "/api/usercontroller";


function signUp()
{
    $data = json_decode(file_get_contents('php://input'), true);
    echo signUpService($data);
}

function login()
{
    $data = json_decode(file_get_contents('php://input'), true);
    echo loginService($data);
}

function methodeNotSupported()
{
    echo json_encode(
        array(
            'message' => "Methode not supported"
        )
    );
}

function invalidUrl($url)
{
    echo json_encode(
        array(
            'message' => "Invalid url"
        )
    );
}

switch ($url) {
    case $BASE_URL . "/api/v2/user/signup":
        if ($request === "POST") {
            $headers = getallheaders();
            $token = isset($headers['token']) ? $headers['token'] : null;
            tokenValidateDecorater('validateToken', 'signUp', $token ,null);
        } else {
            methodeNotSupported();
        }
        break;
    case $BASE_URL . "/api/v2/user/login":
        if ($request === "POST") {
            login();
        } else {
            methodeNotSupported();
        }
        break;
    default:
        invalidUrl($url);
}
