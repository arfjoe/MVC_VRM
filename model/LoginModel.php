<?php

namespace App\model;

use App\core\Model;

/**
 * Class RegisterModel
 * @package App\models
 */
class LoginModel extends Model
{
    public string $login = "";
    public string $password = "";


    public function login()
    {
       echo '
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <strong>Logged to your account</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    }

    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'login' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 20]]
        ];
    }
}