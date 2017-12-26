<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 26/12/17
 * Time: 00:07
 */

namespace app\controllers;

use app\models\Pessoas;
use Yii;
use app\models\FormModel;
use yii\base\Controller;
use yii\data\Pagination;

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

    public function actionPessoas()
    {
        $pessoas = Pessoas::find()->orderBy('nome')->all();

//        print_r($pessoas);

        $pessoa = Pessoas::findOne(2);
        echo $pessoa->nome . " - " . $pessoa->email . "<br>";

        $pessoa->nome = 'Outro nome';
        $pessoa->save();
        echo $pessoa->nome . " - " . $pessoa->email;
    }

    public function actionPagination()
    {
        $query = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
        ]);

        $pessoas = $query->orderBy('nome')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('pagination', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);
    }

}