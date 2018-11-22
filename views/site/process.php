<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $model['name'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-process">
    <?= $this->render('banner',['banner'=>$banner])?>
    <div class="col-xs-12 col-md-3"></div>
    <h1 class="title col-xs-12 col-md-6"><span><?= Html::encode($model['name']) ?></span></h1>
    <div class="col-xs-12 col-md-3"></div>
    <div class="clear"></div>
    <div class="category col-xs-12 col-md-2 fl">
        <ul>
            <?php
            if(isset($category))
            {
                foreach ($category as $k=>$v)
                {
                    if(empty($v)) continue;
                    echo '<li class="col-xs-6 col-md-12 text-center'.(($v['id']==Yii::$app->request->get('id',0))?' cur':'').'"><a href="'.yiiUrl([$this->context->id.'/'.$this->context->action->id,'id'=>$v['id']]).'">'.$v['name'].'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
    <div class="main col-xs-12 col-md-10 fr">
        <?=$model['content']?>
    </div>
</div>
