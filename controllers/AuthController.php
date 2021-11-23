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
    public function login(Request $request)
    {
        $loginModel = new LoginModel();
        if ($request->isPost()) {

            $loginModel->loadData($request->getBody());

            if ($loginModel->validate() && $loginModel->login()) {
                $loginModel->login();
            }

            return $this->view('login', [
                'model' => $loginModel
            ]);
        }

        return $this->view('login', [
            'model' => $loginModel
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()) {

            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                $registerModel->register();
            }

            return $this->view("register", [
                "model" => $registerModel
            ]);
        }

        return $this->view('register', [
            'model' => $registerModel
        ]);        
    }
}