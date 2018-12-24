<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Anchor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anchor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicationId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fansNum')->textInput() ?>

    <?= $form->field($model, 'isDeblocking')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
