<?php


class Validator {
    public static function string($str,$min,$max){
        
        $value = trim($str);

        return strlen($value) < $min || strlen($value) > $max;

    } 
}