<?php
$this->title = $config['WEB_SITE_TITLE'];
?>

<div class="page-index">
  <!-- Banner -->
    <?= $this->render('banner',['banner'=>$banner])?>



    <div class="about">
        <h1 class="title"><span><?=Yii::t('home','About')?></span></h1>
        <div class="container">


            <div class="des col-xs-12 col-sm-6"><?=$about['desc']?></div>
            <div class="pic col-xs-12 col-sm-6"><a href="<?=$about['video']?>" target="_blank"><img src="/img/pc.png"></a></div>
            <div class="more-btn col-xs-12 col-sm-12"><a href="<?=yiiUrl('site/about')?>" class="more"><?=Yii::t('home','More')?></a> </div>
            <div class="clear"></div>
        </div>
    </div>


    <div class="container">
        <h1 class="title"><span><?=Yii::t('home','Culture')?></span></h1>
        <div class="news">
            <ul class="f-cb news-list">
                <?php foreach($culture as $v): ?>
                    <li class=" col-xs-12 col-sm-6">
                        <a href="<?php echo yiiUrl('/site/culture-detail?id='.$v['id'])?>">
                            <p class="pic col-xs-12 col-sm-4">
                                <img src="<?= empty($v['imgUrl'])?'/img/logo.png':$v['imgUrl'];?>" alt="<?=$v['name']?>" class="bg">
                                <img src="<?= empty($v['imgUrl'])?'/img/logo.png':$v['imgUrl'];?>" alt="<?=$v['name']?>" class="picture">
                            </p>
                            <span class="con col-xs-12 col-sm-8">
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
    </div>
</div>



</div>
