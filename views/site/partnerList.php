<?php
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$this->title = Yii::t('home','Partner List').'-'.strtr((empty($model['keyword']) ? $this->params['config']['WEB_SITE_KEYWORD'] : $model['keyword']), ',', '_').'-'.$this->params['config']['WEB_SITE_TITLE'];
$this->params['breadcrumbs'][] = $this->title;
$ct = yiiParams('ct');
?>
<div class="news w1180">
<?= $this->render('banner',['banner'=>$banner])?>
    <div class="col-xs-12 col-md-3"></div>
    <h1 class="title col-xs-12 col-md-6"><span><?=Yii::t('home','Partner')?></span></h1>
    <div class="col-xs-12 col-md-3"></div>
    <div class="clear"></div>
    <?php
    if($category)
    {
        ?>
        <div class="category col-xs-12 col-md-2 fl">
            <ul>
                <?php
                $catId = Yii::$app->request->get('cat_id', '');
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
    <div class="main product-type-ajax col-xs-12 col-md-10 fr">
        <ul class="f-cb">
            <?php foreach($list as $k=>$v):
                $b = $k%4;
                ?>
                <li class="<?=$ct[$b]?> col-xs-12 col-sm-3">
                    <p class="pic">
                        <a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id.'-detail','id'=>$v['id']])?>">
                            <img src="<?= empty($v['imgUrl'])?'/img/logo.jpg':$v['imgUrl'];?>" alt="<?=$v['name']?>">
                        </a>
                    </p>
                    <a href="javascript:;" class="shopping" data-link="" data-img=""><span><?=Yii::t('home','View Detail')?></span></a>
                    <div class="con">
                        <a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id.'-detail','id'=>$v['id']])?>">
                            <h2><?=$v['name']?></h2>
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="page">
        <?php echo LinkPager::widget(['pagination'=>$pages]);?>
    </div>
</div>
<div class="clear"></div>
