<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AppController extends Controller
{
    public function beforeAction($action)
    {
        $this->view->title = yii::$app->name;
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

}