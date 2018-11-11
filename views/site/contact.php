<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $model['name'];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-contact">
    <?= $this->render('banner',['banner'=>$banner])?>
    <h1 class="title"><span><?= Html::encode($this->title) ?></span></h1>
    <div class="category col-xs-12 col-md-2">
        <ul>
            <?php
            if(isset($category))
            {
                foreach ($category as $k=>$v)
                {
                    if(empty($v)) continue;
                    echo '<li class="col-xs-12 col-md-12 text-centercontact.php'.(($v['id']==Yii::$app->request->get('id',0))?' cur':'').'"><a href="'.yiiUrl([$this->context->id.'/'.$this->context->action->id,'id'=>$v['id']]).'">'.$v['name'].'</a></li>';
                }
            }
            ?>
        </ul>
    </div>
    <div class="content col-xs-12 col-md-10">
        <?=$model['content']?>
    </div>
</div>
