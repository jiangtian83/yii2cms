<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Industry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="industry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'industry_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
