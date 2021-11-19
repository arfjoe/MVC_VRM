<?php

namespace App\Controllers;

use App\Core\Application;

class SiteController
{
    /**
     * show welcome page
     * @return view
     */
    public static function welcome()
    {
        $params = [
            'username' => "houcem",
            'email' => "hedhoucem@gmail.com"
        ];
        return Application::$app->router->renderView('welcome', $params);
    }

    /**
     * show project page
     * @return view
     */
    public static function project()
    {
        return Application::$app->router->renderView('project');
    }

    /**
     * show contact form
     * @return view
     */
    public static function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    /**
     * Handle submitted contact form
     */
    public static function handleContact()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
}