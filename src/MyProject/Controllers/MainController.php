<?php

namespace MyProject\Controllers;

class MainController
{
    public function main()
    {
        echo 'Home page';
        echo '<br>';
    }
    public function sayHello(string $name)
    {
        echo 'Hello' . $name;
    }
}
