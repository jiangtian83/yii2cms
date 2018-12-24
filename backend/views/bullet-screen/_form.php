<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BulletScreen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bullet-screen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'liveId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
