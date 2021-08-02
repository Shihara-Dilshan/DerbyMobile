<?php
// require __DIR__ . '/vendor/autoload.php';
// use Firebase\JWT\JWT;

// require_once("./config/Database.php");
// require_once("./config/header.php");


// $key = "example_key";
// $payload = array(
//     "iss" => "http://example.org",
//     "aud" => "http://example.com",
//     "iat" => 1356999524,
//     "nbf" => 1357000000
// );

// /**
//  * IMPORTANT:
//  * You must specify supported algorithms for your application. See
//  * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
//  * for a list of spec-compliant algorithms.
//  */
// $jwt = JWT::encode($payload, $key);
// $decoded = JWT::decode($jwt, $key, array('HS256'));

// print_r($decoded);

// /*
//  NOTE: This will now be an object instead of an associative array. To get
//  an associative array, you will need to cast it as such:
// */

// $decoded_array = (array) $decoded;

// /**
//  * You can add a leeway to account for when there is a clock skew times between
//  * the signing and verifying servers. It is recommended that this leeway should
//  * not be bigger than a few minutes.
//  *
//  * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
//  */
// JWT::$leeway = 60; // $leeway in seconds
// $decoded = JWT::decode($jwt, $key, array('HS256'));

// $DB = new Database();
// $myPDO = $DB->connect();

// echo json_encode(
//     array(
//         'message' => "$_SERVER[REQUEST_URI]"
//     )
// );

function call_decorator ($decorator, $function, $args, $kwargs) {

    // Call the decorator and pass the function to it
    $decorator($function, $args, $kwargs);
}

function testing ($args, $kwargs) {
    echo 'test 1234' ;
}

function wrap_testing ($func, $args, $kwargs) {

    // Before call on passed function
    echo 'Before testing';

    // Call the passed function
    $func($args, $kwargs);

    // After call on passed function
    echo 'After testing';
}

// Run test
call_decorator('wrap_testing', 'testing', 1,1);
