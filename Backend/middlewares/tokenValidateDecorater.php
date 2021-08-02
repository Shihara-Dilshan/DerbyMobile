<?php
    function tokenValidateDecorater ($decorator, $function, $args, $kwargs) {

        // Call the decorator and pass the function to it
        $decorator($function, $args, $kwargs);
    }
    
    // Run test
    //tokenValidateDecorater('wrap_testing', 'testing', 1,1);