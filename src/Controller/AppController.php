<?php

namespace App\Controller;

use Router\Router;
class AppController 
{

    public static function index()
    {
       include "./src/Views/home.php";
    }

    public function ShowBook()
    {
       include "./src/Views/ShowArticle.php";
    }

    public function error404()
    {
        Router::redirect("404");
    }
}