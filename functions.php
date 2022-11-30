<?php 

function makePassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $password = substr( str_shuffle( $chars ), 0, $length );

    return $password;
}

function makePIN($length = 4)
{
    $numbers = "0123456789";

    $pin = substr( str_shuffle( $numbers ), 0, $length );

    return $pin;
}

?>