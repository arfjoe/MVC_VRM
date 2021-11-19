<?php
namespace App\Controller;

class SiteController{

    public static function handleContact(){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        exit;
    }
}