<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LiveAudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="live-audio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'liveId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anchorId')->textInput() ?>

    <?= $form->field($model, 'audienceId')->textInput() ?>

    <?= $form->field($model, 'streamApi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
