<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pagekeyword */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
'modelClass' => Yii::t('common','Pagekeyword'),
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Pagekeyword List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="pagekeyword-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
