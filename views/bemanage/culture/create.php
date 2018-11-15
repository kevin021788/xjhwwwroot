<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Culture */

$this->title = Yii::t('common', 'Create Culture');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Culture List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="culture-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>