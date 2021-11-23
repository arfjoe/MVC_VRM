<?php

namespace App\core\form;

use App\core\Model;

class Form
{
    /**
     * @param string $action
     * @param string $method
     * @return Form
     */
    public static function begin(string $action, string $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    /**
     * @return string
     */
    public static function end(): string
    {
        return '</form>';
    }

    /**
     * @param Model $model
     * @param $attribute
     * @return Field
     */
    public function field(Model $model, $attribute): Field
    {
        return new Field($model, $attribute);
    }
}