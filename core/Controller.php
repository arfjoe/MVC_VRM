<?php

namespace App\Core;

use App\Core\Application;

class Controller
{
    /**
     * Return the view in parameter with params
     * @param string $view
     * @param array $params
     * @return void
     */
    public function view(string $view, array $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
