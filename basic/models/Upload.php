<?php

namespace app\models;

use yii\base\Model;

class Upload extends Model{
    public $uploadFile;

    public function rules(){
        return [
            ['uploadFile', 'file', 'skipOnEmpty' => false, 'extensions' => null, 'uploadRequired' => '必须上传文件'],
            //['uploadFile', 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg,png,js', 'uploadRequired' => '必须上传文件', 'maxFiles' => 4],
        ];
    }

    public function upload(){
        if($this->validate()){
            $this->uploadFile->saveAs('../runtime/' . $this->uploadFile->baseName . '.' . $this->uploadFile->extension);
            return true;
        }

        return false;
    }

    public function uploads(){
        if($this->validate()){
            foreach($this->uploadFile as $file){
                $file->saveAs('../runtime/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        }

        return false;
    }
}
