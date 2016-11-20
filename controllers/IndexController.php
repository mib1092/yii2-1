<?php

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex($message = 'How are you, teacher?')
    {
        return $this->render('index', ['message' => $message]);
    }
}
