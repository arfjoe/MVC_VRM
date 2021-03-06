<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;

class SiteController extends Controller
{
    /**
     * show welcome page
     * @return view
     */
    public function welcome()
    {
        $params = [
            'username' => "Matthieu",
            'email' => "matthieu-neo@hotmail.fr",
            'skills' => ['PHP', 'Symfony', 'JavaScript', 'HTML', 'CSS']
        ];
        return $this->view('welcome', $params);
    }
    /**
     * show contact form
     * @return view
     */
    public function contact()
    {
        return $this->view('contact');
    }

    /**
     * Handle submitted contact form
     */
    public static function handleContact(Request $request)
    {
        $body = APPLICATION::$app->request->getBody();
        echo '<pre>';
        print_r($body);
        echo '</pre>';
    }
}
