<?php

/**
 * Dump and die
 * 
 * A function that helps to dump and stop the process.
 * 
 * @param mixed $value: The value to dump
 */
function dd ($value){

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
    die();
}

/**
 * abort - Abort a given request with a http status code
 * 
 * @param number $code: The status code to abort with
 */
function abort ($code = 404){

    http_response_code($code);

    require "views/{$code}.php";

    die();

}

/**
 * A function that appends a path to the base path
 * 
 * @param string $path The path to append
 * 
 * @return string A full path.
 */
function base_path($path){
    return BASE_PATH.$path;
}

/**
 * A function that appends a path to the configuration's
 * folder path.
 * 
 * @param string $path The path to append
 * 
 * @return string A full path of the config.
 */
function config($path){
    return BASE_PATH . 'configs/'. $path;
}

/**
 * A function that appends a path to the view's
 * folder path.
 * 
 * @param string $path The path to append
 * 
 * @return string A full path of the view.
 */
function view($path){
    return BASE_PATH . 'views/'. $path;
}

/**
 * A function that appends a path to the controller's
 * folder path.
 * 
 * @param string $path The path to append
 * 
 * @return string A full path of the controller.
 */
function controller($path){
    return BASE_PATH .'controllers/'. $path;
}