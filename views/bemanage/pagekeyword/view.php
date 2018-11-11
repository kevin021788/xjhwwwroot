<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Pagekeyword */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common','Pagekeyword'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpagekeyword-view">

    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>false,
        'hover'=>true,
        'mode'=>Yii::$app->request->get('edit')=='t' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel'=>[
            'heading'=>$this->title,
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
             'id',
//            'cat_id',
            'name',
            'sort',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
        ],
        'deleteOptions'=>[
            'url'=>['delete', 'id' => $model->id],
            'data'=>[
                'confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
                'method'=>'post',
            ],
        ],
        'enableEditMode'=>false,
    ]) ?>

</div>

