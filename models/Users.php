<?php

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return '{{users}}';
    }

    public function rules()
    {
        return [
            //проверка на непустоту
            [['login', 'password', 'email', 'surname', 'name'], 'required'],
            //проверка соответствия типов
            [['login', 'password', 'email', 'surname', 'name'], 'string'],
            //[['begin', 'end'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }
}
