<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = Yii::t('common', 'Create Contact');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
