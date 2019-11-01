<?php

namespace app\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'empty';
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}
