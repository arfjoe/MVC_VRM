<?php
namespace App\Controllers;

class SiteController {

    public static function handleContact() {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

}