<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 26/12/17
 * Time: 00:07
 */

namespace app\controllers;

use Yii;
use app\models\FormModel;
use yii\base\Controller;

class FormController extends Controller
{
    public function actionFormulario()
    {
        $formModel = new FormModel;

        $post = Yii::$app->request->post();

        if($formModel->load($post) && $formModel->validate()){
            return $this->render('formulario-confirmacao', [
                'model' => $formModel
            ]);
        }else{
            return $this->render('formulario', [
                'model' => $formModel
            ]);
        }


    }

}