<?php

namespace App\Controllers;

class Cuba extends BaseController
{
    public function index()
    {
        echo "ini controller coba method index";
    }

    public function about($name, $age)
    {
        echo "this is about  $name "  . $age;
    }
}