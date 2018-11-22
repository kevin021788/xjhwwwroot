<?php

/* @var $this \yii\web\View */
/* @var $content string */

use kartik\alert\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$config = Yii::$app->cache->get('config_'.\app\components\message\Language::getLanguageNum());
if(empty($config))
{
    $config = getWebConfig();
    Yii::$app->cache->set('config_' . \app\components\message\Language::getLanguageNum(),$config);
}
if(isset($this->params['keyword']) && !empty($this->params['keyword']))
{
    $keyword = $this->params['keyword'];
}
else
{
    $keyword = $config['WEB_SITE_KEYWORD'];
}
if(isset($this->params['description']) && !empty($this->params['description']))
{
    $description = $this->params['description'];
}
else
{
    $description = $config['WEB_SITE_DESCRIPTION'];
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keywords" content="<?=Html::encode($keyword)?>">
    <meta name="description" content="<?=Html::encode($description)?>">
    <link href="/css/web.css" rel="stylesheet">
    <script src="/js/common.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">


    <div class="container">
        <div class="welcome h40">
            <div class="title white h40 col-xs-12 col-md-6"><?=Yii::t('home','WelCome')?> <?= $config['WEB_SITE_TITLE'] ?><?=Yii::t('home','Official website')?></div>
            <div class="add-home col-xs-12 col-md-5">
                <ul>
                    <li class="white h40 col-md-5"><a href="javascript:void(0)" onclick="SetHome(this,window.location)"><?=Yii::t('home','Set Home')?></a></li>
                    <li class="white h40 col-md-1">|</li>
                    <li class="white h40 col-md-5"><a href="javascript:void(0)" onclick="shoucang(document.title,window.location)"><?=Yii::t('home','Add Favorite')?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/img/logo.jpg">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left nav'],
        'encodeLabels' => false,
        'items' => [
            ['label' => Yii::t('home','Home'), 'url' => ['/site/index']],
            ['label' => Yii::t('home','About Us'), 'url' => ['/site/about']],
            ['label' => Yii::t('home','Service'), 'url' => ['/site/service']],
            ['label' => Yii::t('home','Cases'), 'url' => ['/site/cases']],
            ['label' => Yii::t('home','Culture'), 'url' => ['/site/culture']],
            ['label' => Yii::t('home','Partner'), 'url' => ['/site/partner']],
            ['label' => Yii::t('home','Process'), 'url' => ['/site/process']],
            ['label' => Yii::t('home','Contact Us'), 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="page-top"></div>

        <?//= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-1">
            <div class="col-xs-12 col-md-3 footer-logo">
                <div class="img"></div>
            </div>
            <div class="col-xs-12 col-md-3 footer-nav">
                <ul class="culture col-xs-12 col-md-6">
                    <li class="title white"><?=Yii::t('home','Culture')?></li>
                    <?php
                    $cultureCate = \app\models\Category::getCategory('culture');
                    if(isset($cultureCate))
                    {
                        foreach ($cultureCate as $k=>$v)
                        {
                            echo "<li class='col-xs-6 col-md-12 white'><a href='".yiiUrl(['/site/culture','cat_id'=>$k])."'>{$v}</a></li>
                    ";
                        }
                    }
                    ?>

                </ul>
                <ul class="cases col-xs-12 col-md-6">
                    <li class="title white"><?=Yii::t('home','Cases')?></li>
                    <?php
                    $casesCate = \app\models\Category::getCategory('cases');
                    if(isset($casesCate))
                    {
                        foreach ($casesCate as $k=>$v)
                        {
                            echo "<li class='col-xs-6 col-md-12 white'><a href='".yiiUrl(['/site/cases','cat_id'=>$k])."'>{$v}</a></li>
                    ";
                        }
                    }
                    ?>

                </ul>
            </div>
            <div class="col-xs-12 col-md-3 footer-code">
                <ul class="follow col-xs-12 col-md-6">
                    <li class="title white"><?=Yii::t('home','Follow Us')?></li>

                    <li><img src="/img/ewmcode.jpg"></li>
                    <li class=" white"><?=Yii::t('home','WeiXin Mp')?></li>

                </ul>
            </div>
            <div class="col-xs-12 col-md-3 footer-copyright">
                <ul class="contact col-xs-12 col-md-12">
                    <li class="title white"><?=Yii::t('home','Contact Us')?></li>

                    <li class="tel col-xs-12 col-md-12 white text-left"><?=Yii::t('home','Service Tel')?><span><?=Html::encode($config['WEB_SITE_TEL'])?></span></li>
                    <li class="address col-xs-12 col-md-12 white text-left"><?=Yii::t('home','Address')?><?=Html::encode($config['WEB_SITE_ADDRESS'])?></li>
                    <li class="des col-xs-12 col-md-12 white text-left"><?=Html::encode($config['WEB_SITE_TEL'])?></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="footer-2">
        <div class="container white text-center">
            <div class="footer-site-nav col-xs-12 col-md-4">
                <ul>
                    <li class="col-xs-6 col-md-3 white"><?=Yii::t('home','Web SiteMap')?></li>
                    <li class="col-xs-6 col-md-3 white"><?=Yii::t('home','Legal statement')?></li>
                    <li class="col-xs-6 col-md-3 white"><?=Yii::t('home','Friendship link')?></li>
                    <li class="col-xs-6 col-md-3 white"><?=Yii::t('home','Contact Us')?></li>
                </ul>
            </div>
            <?= Html::encode($config['WEB_SITE_COPYRIGHT'])?>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
