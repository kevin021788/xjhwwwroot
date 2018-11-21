<?php

/* @var $this yii\web\View */

$this->title = $model['name'].'-'.strtr((empty($model['keyword']) ? $this->params['config']['WEB_SITE_KEYWORD'] : $model['keyword']), ',', '_').'-'.$this->params['config']['WEB_SITE_TITLE'];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['Partner']];
$this->params['breadcrumbs'][] = $model['name'];
$this->params['keyword'] = $model['keyword'];
$this->params['description'] = $model['description'];
?>

<div class="news-info w1180">
    <?= $this->render('banner',['banner'=>$banner])?>

    <h1 class="title"><span><?=Yii::t('home','Partner')?></span></h1>
    <?php
    if($category)
    {
        ?>
        <div class="category">
            <ul>
                <?php
                $catId = $model['cat_id'];
                foreach ($category as $k=>$v)
                {
                    if(empty($v)) continue;
                    ?>
                    <li class="<?=$catId==$v['id']?'cur':''?> col-xs-6 col-sm-2 text-center"><a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id,'cat_id'=>$v['id']])?>"><?=$v['name']?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>
    <div class="news-info-title">
        <h2><?=$model['name']?></h2>
        <div class="box f-cb">
            <a href="javascript:;" class="data fl"><?= empty($model['created_at'])?'':date('Y-m-d', $model['created_at'])?></a>
        </div>
    </div>
    <div class="news-info-con">
        <?=PKeyword($model['content'])?>

    </div>

</div>
