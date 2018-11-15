<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cases */

$this->title = Yii::t('common', 'Create Cases');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Cases List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cases-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>