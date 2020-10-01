<?php

spl_autoload_register(function ($nameClass) {
    var_dump($nameClass);
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    //Resolve o problema do namespace configurado com \\ no Mac e Linux
    if (PHP_OS !== "Windows") {
        $filename = str_replace("\\", "/", $filename);
    }
    if (file_exists($filename)) {
        require_once($filename);
    }
});
