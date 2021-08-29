<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.04.2021
 * Time: 23:02
 */

namespace app\models;

use yii\base\Model;

class Form extends Model
{
    public $name;
    public $email;
    public $text;


    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    public function attributeLabels()
    {
        return[
          'name' => 'Ваше имя',
          'email' => 'Ваш email',
          'text' => 'Введите текст',
        ];
    }

    public function conte()
    {
        $top = $this->name.'111';

        return $top;
    }


}