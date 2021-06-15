<?php

function autoloadFunction($className){
    $path = "classes/$className.php";
    require_once $path;
}

spl_autoload_register("autoloadFunction");