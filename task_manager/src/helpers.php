<?php

/**
 * dd - Dump and die
 * 
 * A function that helps to dump and stop the process.
 * 
 * @param value : The value to dump
 */
function dd ($value){
    var_dump($value);
    die();
}

/**
 * abort - Abort a given request with a http status code
 * 
 * @param code : The status code to abort with
 */
function abort ($code = 404){

    http_response_code($code);

    require "views/{$code}.php";

    die();

}