<?php

/* @var $this yii\web\View */

$this->title = $model['name'].'-'.strtr((empty($model['keyword']) ? $this->params['config']['WEB_SITE_KEYWORD'] : $model['keyword']), ',', '_').'-'.$this->params['config']['WEB_SITE_TITLE'];
$this->params['breadcrumbs'][] = ['label' => Yii::t('home','Cases'), 'url' => ['cases']];
$this->params['breadcrumbs'][] = $model['name'];
$this->params['keyword'] = $model['keyword'];
$this->params['description'] = $model['description'];
$this->context->action->id = explode('-', $this->context->action->id)[0];
?>

<div class="news-info w1180">
    <div class="col-xs-12 col-md-3"></div>
    <h1 class="title col-xs-12 col-md-6"><span><?=Yii::t('home','Cases')?></span></h1>
    <div class="col-xs-12 col-md-3"></div>
    <div class="clear"></div>
    <?php
    if($category)
    {
        ?>
        <div class="category col-xs-12 col-md-2 fl">
            <ul>
                <?php
                $catId = $model['cat_id'];
                foreach ($category as $k=>$v)
                {
                    if(empty($v)) continue;
                    ?>
                    <li class="<?=$catId==$v['id']?'cur':''?> col-xs-6 col-sm-12 text-center"><a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id,'cat_id'=>$v['id']])?>"><?=$v['name']?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>
    <div class="main col-xs-12 col-md-10 fr">
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

</div>
