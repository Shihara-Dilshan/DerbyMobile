<?php
    require __DIR__ . '/../vendor/autoload.php';
    use Firebase\JWT\JWT;

    function validateToken ($func, $args, $kwargs) {
        $key = "MANHDYEHfisedfjkeuiryu347ufhjndjfd";
        
        // Before call on passed function
        try{
            $decoded = JWT::decode($args, $key, array('HS256'));
        }catch(Exception $e){
            echo json_encode(
                array(
                    'message' => "Invalid token"
                )
            );
            return;
        }

        // Call the passed function
        $func($args, $kwargs);
    }