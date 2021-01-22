<?php

function generateNewString($len = 10){

    $token = "QdYQgUVyFn0UC7QsO5hZbtkNR1PskY";
    $token = str_shuffle($token);
    $token = substr($token,0, $len);

return $token;

}

function redirectToLoginPage(){

    header('Location: ../login.php');
    exit();
}

?>