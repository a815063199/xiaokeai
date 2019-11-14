<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Article;

class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionValidate(){
        $data = [
            'Test' => [
                'username' => 'xiangyu',
                'password' => '123456',
                'repassword' => '123',
                'age' => 20,
                'number' => 'dddd',
                'email' => 'dddd',
                'sex' => 'man',
                'pt' => 'sdsfds',
                'str' => 'sdsfds',
            ]
        ];

        $test = new \app\models\Test();

        $test->load($data);

        if(!$test->validate()){
            var_dump($test->getErrors());
        }

        //var_dump($test);

    }

    public function actionDb(){
        /* 使用 ActiveRecord组件*/
        //$articles = Article::findAll(['code' => 'US']);
        //$articles = Article::findOne(['code' => 'RU']);
        
        //$articles = Article::find()->where(['code' => 'RU'])->one();
        //$articles = Article::find()->where(['code' => 'CA'])->all()->count();

        //防止注入
        //$articles = Article::find()->where('code=:code', [':code' => 'CA'])->all();

        //$articles = Article::find()->where(['code' => 'CA'])->orderBy('name asc')->all();
        //$articles = Article::find()->where(['code' => 'CA'])->limit(1)->all();
        
        //$articles = Article::findOne(['code' => 'US']);
        //$articles->name = 'This is a new name';
        //false 不验证参数
        //var_dump($articles->save(false));

        //更新多个参数
        //var_dump(Article::updateAll(['code' => 'CN'], ['name' => '中国']));
        //$articles = Article::find()->all();
        
        //$articles = new Article();
        //$articles->code = 'JP';
        //$articles->name = 'Japan';
        //var_dump($articles->save(false));
        
        //删除一条数据
        //Article::findOne(['code' => 'JP' ])->delete();
        //删除多条数据
        //Article::deleteAll(['id' => '5']);

        //$articles = Article::find()->all();
        //print_r($articles);


        /* 使用 Query组件*/
        /*
        $db = (new \yii\db\Query);

        $querys = $db->from('country')->where('code=:code', [':code' => 'CN'])->one();
        $querys = $db->select('name')->from('country')->where('code=:code', [':code' => 'CN'])->one();
        $querys = $db->select('name')->from('country')->where('code=:code', [':code' => 'CN'])->all();
        $querys = $db->select('name')->from('country')->where('code=:code', [':code' => 'CN'])->orderBy('name asc')->offset(0)->limit(1)->all();


         */

        /* 使用 db组件*/
        $db = \Yii::$app->db;

        $querys = $db->createCommand("select * from " . $db->tablePrefix . "country")->queryAll();
        $querys = $db->createCommand("select * from " . $db->tablePrefix . "country")->queryOne();
        //防注入
        $querys = $db->createCommand("select * from " . $db->tablePrefix . "country where code=:code")->bindValue(':code', 'CN')->queryOne();
        $querys = $db->createCommand("select * from " . $db->tablePrefix . "country where code=:code and name=:name")->bindValues([':code' => 'CN', ':name' => 'China'])->queryOne();

        //插入
        //$db->createCommand()->insert($db->tablePrefix . "country", ['code' => 'zg', 'name' => '中国'])->execute();

        //修改
        $db->createCommand()->update($db->tablePrefix . "country", ['name' => 'zhongguo'], 'code=:code', [':code' => 'zg'])->execute();

        //删除
        $db->createCommand()->delete($db->tablePrefix . "country", 'code=:code', [':code' => 'zg'])->execute();

        print_r($querys);

    }

    public function actionCs(){
        /*
        //第一种
        $cookie = new \yii\web\Cookie();
        $cookie->name = 'xiangyu_name';
        $cookie->expire = time() + 84600;
        $cookie->httpOnly = true;
        $cookie->value = 'xiangyu';

        var_dump(\Yii::$app->response->getCookies()->add($cookie));
         */

        /*
        //第二种
        $cookie = new \yii\web\Cookie([
            'name' => 'xiangyu_name',
            'expire' => time() + 86400,
            'httpOnly' => true,
            'value' => 'xiangyu'
        ]);
        \Yii::$app->response->getCookies()->add($cookie);
         */

        //$cookies = \Yii::$app->request->cookies;
        //var_dump($cookies->getValue('xiangyu_name'));
        //var_dump($cookies->has('luffy'));
        //var_dump($cookies->getCount());

        //删除
        //$cookies = \Yii::$app->request->cookies;
        //$ck = $cookies->get('xiangyu_name');
        //var_dump(\Yii::$app->response->getCookies()->remove($ck));
        //var_dump($cookies->has('xiangyu_name'));
        //\Yii::$app->response->getCookies()->removeAll();
        //var_dump($cookies->count());

        $session = \Yii::$app->session;
        $session->set('xiangyu_name', 'xiangyu');
        $session->set('xiangyu_array', [1, 2, 3]);

        //$session->remove('xiangyu_name');
        //var_dump($session->get("xiangyu_name"));


        $session->removeAll();
        var_dump($session->get('xiangyu_name'));
        var_dump($session->get('xiangyu_array'));

    }
}

