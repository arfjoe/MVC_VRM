<?php
namespace App\Controller;

use App\Core\Application;

class SiteController extends Controller {

    public static function handleContact() {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

    public static function welcome() {
        $title = "Welcome Page";
        return Application::$app->router->renderView('welcome', ['title' => $title]);
    }

    public static function project() {
        return Application::$app->router->renderView('project');
    }

    public static function contact() {
        $title = "Contact Page";
        return Application::$app->router->renderView('contact', ['title' => $title]);
    }

}