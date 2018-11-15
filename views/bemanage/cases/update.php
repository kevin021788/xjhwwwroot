<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cases */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
'modelClass' => Yii::t('common','Cases'),
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Cases List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="cases-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
