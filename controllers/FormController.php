<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.04.2021
 * Time: 22:58
 */

namespace app\controllers;

use app\components\DebugPrint;
use yii\web\Controller;
use app\models\Form;

class FormController extends Controller
{
    /**
     * @return string
     */
    public function actionForm(){
        $form_f = new Form();

        //file_put_contents('../123.txt', print_r(\Yii::$app->request->post(), true).PHP_EOL, FILE_APPEND);
        if($form_f->load(\Yii::$app->request->post()) && $form_f->validate()){
            \Yii::$app->session->setFlash('success', "Статья сохранена");
            return$this->refresh();
//            return $this->render('form', [
//                'form_f'=>$form_f,
//            ]);
           // DebugPrint::debug($form_f);
        }else{
            return $this->render('form', ['form_f'=>$form_f]);
        }

    }

}