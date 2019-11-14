<?php
namespace app\models;

use yii\base\Model;

class Login extends Model{
    public $username;
    public $password;
    public $verifyCode;
    public $remember;

    private $user = [
        'id' => 1,
        'username' => 'lijing',
        'password' => '19951216'
    ];

    public function rules(){
        return [
            ['username', 'required', 'message' => '用户名不能空哦'],
            ['verifyCode', 'captcha', 'captchaAction' => 'login/captcha', 'message' => '验证码不正确哦'],
            ['password', 'checkPwd', 'skipOnEmpty' => false],
            ['remember', 'safe'],
        ];
    }

    public function checkPwd($attribute, $params){
        if(empty($this->$attribute)){
            $this->addError($attribute, '密码不能为空哦');
        }
        else if(strlen($this->$attribute) < 6){
            $this->addError($attribute, '密码错误哦');
        }else if(empty($this->getErrors())){
            //密码验证，连接数据库
            if($this->user['username'] != $this->username ||$this->user['password'] != $this->password){
                $this->addError($attribute, '用户名或密码错误');
            }
        }
    }

    public function login(){
        if(!$this->validate()) return false;
        //首先生成session

        //如果有记住密码，则把信息记录到Cookie
        return true;
    }
}



?>
