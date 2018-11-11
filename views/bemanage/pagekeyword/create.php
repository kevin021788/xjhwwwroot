<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pagekeyword */

$this->title = Yii::t('common', 'Create Pagekeyword');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Pagekeyword List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagekeyword-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
