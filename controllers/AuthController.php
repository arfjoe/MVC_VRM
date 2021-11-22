<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Model\RegisterModel;
use App\Model\LoginModel;

class AuthController extends Controller
{
    /**
     * show contact form
     * @return view
     */
    public function login()
    {
        return $this->view('login');
    }

    public function register()
    {
        return $this->view('register');
    }

    /**
     * Handle submitted Login form
     */
    public static function handleLogin(Request $request)
    {
        $body = APPLICATION::$app->request->getBody();
        echo '<pre>';
        print_r($body);
        echo '</pre>';
    }

    /**
     * Handle submitted Register form
     */
    public function handleRegister(Request $request)
    {

        $registerModel = new RegisterModel();
        if($request->getMethod()==='post'){
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                return "Success";
            }
        }
        echo '<pre>';
        print_r($registerModel->errors);
        echo '</pre>';
        return $this->view('register',[
            'model' => $registerModel
        ]);



        /* $body = APPLICATION::$app->request->getBody(); */
        /* $login = APPLICATION::$app->request->getBody()['login'];
        if(!$login){
            $errors['login'] = 'Champs Obligatoire';
        }
        $email = APPLICATION::$app->request->getBody()['email'];
        if(!$email){
            $errors['email'] = 'Champs Obligatoire';
        }
        $password = APPLICATION::$app->request->getBody()['password'];
        if(!$password){
            $errors['password'] = 'Champs Obligatoire';
        }

        return $this->view('register',[
            'errors'=>$errors
        ]); */
    }
}