<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Article;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $article = Article::find();
        //echo $article->count();
        $pagination = new \yii\data\Pagination(['totalCount' => $article->count(), 'pageSize' => 10]);

        $data = $article->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('index', ['data' => $data, 'pagination' => $pagination]);
    }

    public function actionAdd()
    {
        $model = new Article();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->save()){
            //echo 'success';
            return $this->redirect(['index']);
        }

        return $this->render('add', ['model' => $model]);
    }

    public function actionEdit($code)
    {
        if($model = Article::findOne($code))
        {
            if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->save()){
                return $this->redirect(['index']);
            }

            return $this->render('edit', ['model' => $model]);
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($code){
        Article::findOne($code)->delete();
        return $this->redirect(['index']);
    }
}
