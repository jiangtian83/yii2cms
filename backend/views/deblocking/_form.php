<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Deblocking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deblocking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anchorId')->textInput() ?>

    <?= $form->field($model, 'reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isDeblocking')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
