<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 25/12/17
 * Time: 19:11
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{
    public function actionSaySomething($message = 'Hello')
    {
        return $this->render('say-something', [
            'message' => $message
        ]);
    }

}