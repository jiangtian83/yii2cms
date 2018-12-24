<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LiveAudience */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="live-audience-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'liveId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audienceId')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'userData')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
