<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Partner */

$this->title = Yii::t('common', 'Create Partner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Partner List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>