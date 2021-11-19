<?php
namespace App\Controller;

use App\Core\{Router, Request};

class SiteController extends Controller {

    public static function handleContact(){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

    public static function welcome(){
        $title = "Welcome Page";
        return router::renderView('welcome', ['title' => $title]);
    }

    public static function project(){
        return router::renderView('project');
    }

    public static function contact(){
        $title = "Contact Page";
        return router::renderView('contact', ['title' => $title]);
    }

}