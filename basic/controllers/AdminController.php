<?php

namespace app\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'empty';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogout()
    {
        return $this->render('logout');
    }

    public function actionLogin()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return $this->render('test');
    }
}
