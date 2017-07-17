<?php

spl_autoload_register(function($class){
    echo $class;
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if (file_exists($the_path)) {

        require_once($the_path);

    } else {

        die("This file name {$class}.php was not found man....");
    }
});

function redirect($location)
{
    header("Location: {$location}");
}

require_once("config.php");
require_once("database.php");
require_once("base.php");

?>
