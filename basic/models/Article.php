<?php

namespace app\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord{
    public static function tableName(){
        return '{{%country}}';
    }

    public function rules(){
        return [
            ['code', 'required', 'message' => '国家简写不能为空'],
            ['code', 'string', 'length' => [2, 2], 'tooShort' => '只能是2位', 'tooLong' => '只能是2位'],
            ['name', 'required', 'message' => '国家名字不能为空'],
            ['name', 'string', 'min' => 2, 'max' => 20, 'tooShort' => '国家名字不能少于2位', 'tooLong' => '国家名字不能大20位'],
            ['population', 'required', 'message' => '国家代码不能为空'],
            ['population', 'number', 'message' => '只能是数字'],
            ['population', 'checkPopulation', 'params' => ['message' => '长度不能超过11位']],
            ['flag', 'integer', 'min' => 0, 'max' => 9, 'tooSmall' => '非法操作', 'tooBig' => '非法操作'],
            ['count', 'integer', 'min' => 0, 'tooSmall' => '必须是大于等于0的整数', 'message' => '请输入一个整数'],
            ['status', 'in', 'range' => ['0', '1'], 'message' => '非法操作']
        ];
    }

    public function checkPopulation($attribute, $params){
        if( strlen($this->$attribute) > 11){
            $this->addError($attribute, $params['message']);
        }
    }

    public function beforeSave($insert){
        if(parent::beforeSave($insert)){
            $time = time();
            if($this->isNewRecord){
                $this->date = $time;
            }
            //$this->update_date = $time;
            $this->date = $time;
            return true;
        }
        return false;
    }

}
