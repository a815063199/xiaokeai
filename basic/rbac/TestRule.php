<?php

namespace app\rbac;

class TestRule extends \yii\rbac\Rule{

    public $name = 'testRule';

    //你可以修改文章，但是文章是自己发布的
    //demo-update 的修改权限
    //添加Rule，限制只有自己的文章才可以修改
    //执行$auth->checkAccess 时会用到这个方法来判断
    public function execute($user_id, $item, $params){
        return (isset($params['article']) ? $params['article']['user_id'] == $user_id : false);
    }
}




?>
