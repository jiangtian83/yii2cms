<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionCenter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exhibition-center-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exhibitionId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'centerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industryId')->textInput() ?>

    <?= $form->field($model, 'roomLimit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
