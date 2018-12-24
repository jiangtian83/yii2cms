<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionSignUp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exhibition-sign-up-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exhibitionId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orginazationName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
