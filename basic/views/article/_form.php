<?php
    use yii\helpers\Html;
?>
<style>
.error{color:red;}
</style>
<?=Html::beginForm('', 'post', ['class' => 'form-horizontal']);?>
<div class="form-group">
  <?=Html::label('国家缩写: ', 'code', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeInput('text', $model, 'code', ['class' => 'form-control'])?>
    <?=Html::error($model, 'code', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::label('国家名称: ', 'name', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeTextArea($model, 'name', ['class' => 'form-control'])?>
    <?=Html::error($model, 'name', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::label('国家代码: ', 'population', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeTextArea($model, 'population', ['class' => 'form-control'])?>
    <?=Html::error($model, 'population', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::label('标识: ', 'flag', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeRadioList($model, 'flag', [0 => '普通', 1 => '热门', 2 => '置顶'], ['class' => 'form-control'])?>
    <?=Html::error($model, 'flag', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::label('游览次数: ', 'count', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeInput('text', $model, 'count', ['class' => 'form-contrl'])?>
    <?=Html::error($model, 'count', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::label('状态: ', 'status', ['class' => 'control-label col-sm-2'])?>
  <div class="col-sm-10">
    <?=Html::activeDropDownList($model, 'status', [0 => '否', 1 => '是'], ['class' => 'form-control'])?>
    <?=Html::error($model, 'status', ['class' => 'error']);?>
  </div>
</div>

<div class="form-group">
  <?=Html::submitButton("提交", ['class' => 'btn btn-primary col-sm-offset-2']);?>
  <a href="<?=\yii\helpers\Url::to(['index'])?>" class="btn btn-default">返回</a>
</div>






<?=Html::endForm();?>
