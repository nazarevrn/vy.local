<?php

namespace app\models;

use yii\db\ActiveRecord;

class Vacations extends ActiveRecord
{
    public static function tableName()
    {
        return '{{vacations}}';
    }

    public function rules()
    {
        return [
            //проверка на непустоту
            [['user_id', 'begin', 'end', 'status'], 'required'],
            //проверка соответствия типов
            [['user_id', 'status'], 'integer'],
            [['begin', 'end'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }
}
