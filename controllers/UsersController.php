<?php

namespace app\controllers;

use yii\rest\ActiveController;


class UsersController extends ActiveController
{
    public $modelClass = 'app\models\Users';

    public function init()
    {
        parent::init();
        // отключаем механизм сессий в api
        \Yii::$app->user->enableSession = false;
    }
}