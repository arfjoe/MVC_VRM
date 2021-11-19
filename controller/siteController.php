<?php
namespace App\Controller;

use App\Core\{Router, Request};

class SiteController {

    public static function handleContact(){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

    public static function handleView(){

        $view = Request::getPath();
        $view == '/' ? $view = 'welcome' : $view;
        return router::renderView($view);
    }

}