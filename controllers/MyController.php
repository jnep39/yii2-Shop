<?php

namespace app\controllers;

use yii\web\Controller;


class MyController extends Controller
{
    public function actionIndex()
    {

        $firstVar = $_POST;
        return $this->render('index',
            [
                "firstVar" => $firstVar,
            ]
        );
    }
}
