<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class DemoController extends Controller{
    public function actions(){
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 4,
                'minLength' => 4,
                'width' => 80,
                'height' => 40
            ],
        ];
    }

    public function actionCode(){
        $model = new \app\models\Code;
        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())){
            if($model->validate()){
                echo '验证成功';
            }else{
                var_dump($model->getErrors());
            }
        }

        return $this->render('code', ['model' => $model]);
    }

    public function actionCodeTwo(){
        if(Yii::$app->request->isPost){
            $code = Yii::$app->request->post('code');

            $cpValidate = new \yii\captcha\CaptchaValidator();
            $cpValidate->captchaAction = 'demo/captcha';

            $cpAction = $cpValidate->createCaptchaAction();
            $scode = $cpAction->getVerifyCode();
            if($code == $scode){
                echo '验证成功';
            }else{
                echo $code , ' != ', $scode;
            }


        }

        return $this->render('codetwo');
    }

    public function actionCache(){
        $cache = \Yii::$app->cache;

        //var_dump($cache->add('name', 'xiangyu'));
        //var_dump($cache->get('name'));

        //$cache->madd(['age' => 99, 'sex' => 'man']);

        //var_dump($cache->mget(['name', 'age', 'sex']));

        var_dump($cache->exists('name'));
        $cache->delete('age');
        var_dump($cache->exists('age'));

        //$cache->flush();

    }

    public function actionUpload(){
        $upload = new \app\models\Upload();
        if(\Yii::$app->request->isPost){
            $upload->uploadFile = \yii\web\UploadedFile::getInstance($upload, 'uploadFile');
            if($upload->upload()){
                echo '上传成功';
            }else{
                var_dump($upload->getErrors());
            }
        }

        return $this->render('upload', ['upload' => $upload]);
    }

    public function actionUploads(){
        $uploads = new \app\models\Upload();
        if(\Yii::$app->request->isPost){
            $uploads->uploadFile = \yii\web\UploadedFile::getInstances($uploads, 'uploadFile');
            if($uploads->uploads()){
                echo '上传多个文件成功';
            }else{
                var_dump($uploads->getErrors());
            }
        }

        return $this->render('uploads', ['uploads' => $uploads]);
    }

    public function actionRbac(){
        $auth = \Yii::$app->authManager;
        //var_dump($auth);
/*
 * 一个用户（user）可以有多个角色（role）
 * 一个角色（role）可以有多个权限节点（permission）
 * 规则（rule）是独立的
 * 一个权限节点（permission）只可能绑定一个规则（rule）
 *
 * */

/*
 * 权限操作影响 auth_item 表
        //权限添加
        $perm = $auth->createPermission('demo-rbac');
        $perm->description = 'demo rbac';
        var_dump($auth->add($perm));

        $perm = $auth->createPermission('demo-add');
        $perm->description = 'demo add';
        var_dump($auth->add($perm));

        $perm = $auth->createPermission('demo-update');
        $perm->description = 'demo update';
        var_dump($auth->add($perm));

        //$onePerm = $auth->getPermission('demo-rbac');
        //var_dump($onePerm);
        //var_dump($auth->getPermissions());
*/

/*
        //权限更新
        $permName = 'demo-rbac';
        $onePerm = $auth->getPermission($permName);
        $onePerm->description = 'update demo rbac';
        var_dump($auth->update($permName, $onePerm));
*/

/*
        //权限删除
        $deletePerm = $auth->getPermission('demo-rbac');
        $auth->remove($deletePerm);
        $auth->removeAllPermissions();
*/

/*
 * 角色操作影响 auth_item_child 表
        //角色增加
        //$oneRole = $auth->createRole('super');
        //$oneRole->description = 'new Role';
        //var_dump($auth->add($oneRole));

        //$normalRole = $auth->createRole('normal');
        //$auth->add($normalRole);
*/


/*
        //角色查询 
        $oneRole = $auth->getRole('super');

        var_dump($oneRole);

        var_dump($auth->getRoles());
*/

/*
        //角色更新 
        $oneRole = $auth->getRole('super');
        $oneRole->description = 'update Role';
        $auth->update('super', $oneRole);
*/

/*
        //角色删除
        $oneRole = $auth->getRole('super');
        $auth->remove($oneRole);
        $auth->removeAllRoles();
*/

/*
        //给super角色添加rbac权限、add权限
        $rbacPerm = $auth->getPermission('demo-rbac');
        $addPerm = $auth->getPermission('demo-add');
        $superRole = $auth->getRole('super');

        $auth->addChild($superRole, $rbacPerm);
        $auth->addChild($superRole, $addPerm);

        //给角色添加update权限
        $updatePerm = $auth->getPermission('demo-update');
        $auth->addChild($superRole, $updatePerm);
*/

/*
        //查询super角色的所有权限
        var_dump($auth->getPermissionsByRole('super'));
        $rbacPerm = $auth->getPermission('demo-rbac');
        $updatePerm = $auth->getPermission('demo-update');
        $superRole = $auth->getRole('super');
        var_dump($auth->hasChild($superRole, $rbacPerm));
        var_dump($auth->hasChild($superRole, $updatePerm));
 */

/*
        //移除super角色的rbac权限
        $auth->removeChild($superRole, $rbacPerm);
        $auth->removeChildren($superRole);
*/

/*
        //用户操作影响 auth_assignment 表
        //用户, id为1
        $superRole = $auth->getRole('super');
        $normalRole = $auth->getRole('normal');


        $auth->assign($superRole, 1);
        $auth->assign($normalRole, 1);
*/


/*
        //移除用户1的super角色
        //$auth->revoke($superRole, 1);


        //移除用户1全部的角色
        //$auth->revokeAll(1);
*/

        //根据userid查询所有的权限
        //var_dump($auth->getPermissionsByUser(1));


        //查询用户是否具有某个权限
        //var_dump($auth->checkAccess(1, 'demo-rbac'));
        //var_dump($auth->checkAccess(1, 'demo-update'));


        //rule操作影响 auth_item_rule 表
        //添加rule
        //$testRule = new \app\rbac\TestRule();
        //$auth->add($testRule);

        $oneRule = $auth->getRule('testRule');
/*
        //var_dump($oneRule);
        //var_dump($auth->getRules());
        $updatePerm = $auth->getPermission('demo-update');
        $updatePerm->ruleName = 'testRule';
        $auth->update('demo-update', $updatePerm);

        //检查用户1是否有对这个文章操作的权限，具体判断方法定义在testRule中，testRule是一个类（\app\rbac\TestRule.php）
        //findArticle 作为参数传递给testRule类方法execute中。
        $findArticle = ['article' => ['user_id' => 1]];
        var_dump($auth->checkAccess(1, 'demo-update', $findArticle));
*/

        //删除规则，由于外键级联删除的影响，会导致 auth_item 表中相关的rule_name列值也置为null
        //$auth->remove($oneRule);

        $auth->removeAllRules();
    }
}























?>
