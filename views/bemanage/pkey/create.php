<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pkey */

$this->title = Yii::t('common', 'Create Pkey');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Pkey List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkey-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>