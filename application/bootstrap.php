<?php

function __autoload($class_name){   
    $path=$class_name.'.php';
    $path=  str_replace('\\', '/', $path);
    if(file_exists($path)){
        include_once $path;
    }
}

