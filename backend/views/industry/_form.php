<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Industry */
/* @var $form yii\widgets\ActiveForm */

$result = \common\models\Industry::find()->select('id,industry_name')->where(['pid' => 0])->asArray()->all();
$kv = ['0' => '新增一级行业'];
$kv = array_merge($kv, \yii\helpers\ArrayHelper::map($result, 'id', 'industry_name'));
?>

<div class="industry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'industry_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->dropDownList($kv) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
