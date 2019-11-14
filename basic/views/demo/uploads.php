<?php
    use yii\helpers\Html;
?>

<?=Html::beginForm('', 'post', ['enctype' => 'multipart/form-data']);?>
    <?=Html::activeFileInput($uploads, 'uploadFile[]', ['class' => 'file'])?>
    <?=Html::activeFileInput($uploads, 'uploadFile[]', ['class' => 'file'])?>
    <?=Html::activeFileInput($uploads, 'uploadFile[]', ['class' => 'file'])?>
    <?=Html::submitButton('上传', ['class' => 'btn btn-primary']);?>





<?=Html::endForm();?>
