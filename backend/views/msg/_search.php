<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MsgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'ownerId') ?>

    <?= $form->field($model, 'senderId') ?>

    <?= $form->field($model, 'scene') ?>

    <?= $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
