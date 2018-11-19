<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Process */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
'modelClass' => Yii::t('common','Process'),
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Process'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="process-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
