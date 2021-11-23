<?php

namespace App\model;

use App\Model\DataModel;


/**
 * Class RegisterModel
 * @package App\models
 */
class RegisterModel extends DataModel
{

    public string $login = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function register(){
        echo "creating new user";
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function tableName(): string
    {
        return 'user';
    }

    public function attributes(): array
    {
        return ['login', 'email', 'password'];
    }

    public function labels(): array
    {
        return [
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password'
        ];
    }

    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'login' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED/* , [self::RULE_MIN, 'min' => 6], [self::RULE_MAX, 'max' => 22] */],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}