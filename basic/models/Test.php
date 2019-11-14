<?php

namespace app\models;

use yii\base\Model;

class Test extends Model{
    public $username;
    public $password;
    public $repassword;
    public $age;
    public $number;
    public $email;
    public $sex;
    public $pt;
    public $str;

    public function rules(){
        return [
            ['username', 'required', 'message' => '用户名不能为空'],
            ['password', 'required', 'message' => '密码不能为空'],
            //['password', 'compare', 'compareValue' => '123456', 'message' => '不等于123456']
            ['password', 'compare', 'compareAttribute' => 'repassword', 'message' => '两次密码不一致'],
            ['repassword', 'safe'],
            ['age', 'double', 'min' => 1.2, 'max' => 10.3, 'tooSmall' => '小于1.2', 'tooBig' => '大于10.3', 'message' => '不是数字'],
            ['number', 'integer', 'min' => 2, 'max' => 9, 'tooSmall' => '', 'tooBig' => '', 'message' => '不是整数'],
            ['email', 'email', 'message' => '邮箱格式错误'],
            ['sex', 'in', 'range' => ['male', 'female'], 'message' => '不在选择范围内'],
            ['pt', 'match', 'pattern' => '/^mrs\d{2,}$/', 'message' => '不符合格式'],
            ['str', 'string', 'min' => 10, 'max' => 20, 'tooShort' => '小于10', 'tooLong' => '大于20'],

            ['username', 'checkUsername', 'params' => ['message' => '不是等于xiang']],
        ];
    }

    public function checkUsername($attribute, $params){
        //echo $this->$attribute, '<br />';
        if($this->$attribute != 'xiang'){
            $this->addError($attribute, $params['message']);
        }
    }
}
