<?php

spl_autoload_register(function (string $className){
    require_once __DIR__ . '/../src/' . $className . '.php';
});

$controller = new \MyProject\Controllers\MainController();
$controller->main();
