<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Live */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="live-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anchorId')->textInput() ?>

    <?= $form->field($model, 'theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audienceNum')->textInput() ?>

    <?= $form->field($model, 'exhibitionCenterId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'liveApi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
