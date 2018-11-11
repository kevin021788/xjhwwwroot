<?php
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;
use yii\helpers\Url;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Pkey */
/* @var $form yii\widgets\ActiveForm */

$previmage = [];
$baseurl = Yii::$app->request->BaseUrl;
?>

<div class="pkey-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL, 'options'=>['enctype'=>'multipart/form-data']]);
    $mo = \app\models\Config::findOne(['name'=>'WEB_SITE_ALLOW_UPLOAD_TYPE','language'=>\app\components\message\Language::getLanguageNum()]);
    $allow_type = explode(',', $mo->value);
    echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,

        'attributes' => [

            'name'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=> Yii::t('common','Please input name ...'), 'maxlength'=>255]],




            'url'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=> Yii::t('common','Please input Url ...'), 'maxlength'=>255]],



        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? (Yii::t('common','Create')) : (Yii::t('common','Update')), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','style'=>'align:center']);
    ActiveForm::end(); ?>

</div>
