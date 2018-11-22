<?php
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$this->title = Yii::t('home','Culture List').'-'.strtr((empty($model['keyword']) ? $this->params['config']['WEB_SITE_KEYWORD'] : $model['keyword']), ',', '_').'-'.$this->params['config']['WEB_SITE_TITLE'];
$banner = \app\models\Banner::getBanner('culture');
?>
<div class="culture w1180">
    <?= $this->render('banner',['banner'=>$banner])?>
    <div class="col-xs-12 col-md-3"></div>
    <h1 class="title col-xs-12 col-md-6"><span><?=Yii::t('home','Culture')?></span></h1>
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
                    <li class="<?=$catId==$v['id']?'cur':''?> col-xs-6 col-md-12 text-center"><a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id,'cat_id'=>$v['id']])?>"><?=$v['name']?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>
    <div class="main col-xs-12 col-md-10 fr">
        <ul class="f-cb culture-list">
            <?php foreach($list as $v): ?>
                <li class=" col-xs-12 col-sm-12">
                    <a href="<?=yiiUrl([$this->context->id.'/'.$this->context->action->id.'-detail','id'=>$v['id']])?>">
                        <p class="pic col-xs-12 col-sm-3">
                            <img src="<?= empty($v['imgUrl'])?'/img/logo.jpg':$v['imgUrl'];?>" alt="<?=$v['name']?>" class="bg">
                            <img src="<?= empty($v['imgUrl'])?'/img/logo.jpg':$v['imgUrl'];?>" alt="<?=$v['name']?>" class="picture">
                        </p>
                        <span class="con col-xs-12 col-sm-9">
    							<h3><?=empty($v['created_at'])?'':date('m-d',$v['created_at']) ?></h3>
    							<h2><?=$v['name']?></h2>
    							<div class="font">
                                    <?=$v['desc']?></div>
    						</span>
                    </a>
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
