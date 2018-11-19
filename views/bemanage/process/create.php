<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Process */

$this->title = Yii::t('common', 'Create Process');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Process'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="process-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
