<?php
  use yii\helpers\Url;
?>

<p style="text-align:right;">
<a href="<?=\yii\helpers\Url::to(['add'])?>" class = "btn btn-primary">添加</a>
</p>

<table class="table table-hover">
<tr>
  <th>国家缩写</th><th>国家名</th><th>国家代码</th><th>标记</th><th>状态</th><th>游览次数</th><th>添加时间</th><th>操作</th>
</tr>
<?php foreach($data as $v){ ?>
<tr>
    <td><?=$v->code?></td>
    <td><?=$v->name?></td>
    <td><?=$v->population?></td>
    <td><?=$v->flag?></td>
    <td><?=$v->status == 1 ? '是' : '否';?></td>
    <td><?=$v->count?></td>
    <td><?=date("Y-m-d H:i:s", $v->date)?></td>
    <td><a href="<?=Url::to(['edit', 'code' => $v->code])?>">编辑</a> | <a href="<?=Url::to(['delete', 'code' => $v->code])?>">删除</a></td>
</tr>
<?php } ?>
</table>

<div style="float:right;">
    <?=yii\widgets\LinkPager::widget([
        'pagination' => $pagination,
        'options' => [
            'class' => 'pagination',
        ]
    ]);?>
</div>
