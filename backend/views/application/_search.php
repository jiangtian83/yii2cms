<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'realName') ?>

    <?= $form->field($model, 'orginazationName') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'passStatus') ?>

    <?php // echo $form->field($model, 'suggestions') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'editor') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
