<?php
class Redireccion{
    public static function redirigir($url){
        header('location: ' .$url,true, 301);
        exit(); //o tambien se usa die();
    }
}
?>