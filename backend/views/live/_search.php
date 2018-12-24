<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LiveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="live-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'anchorId') ?>

    <?= $form->field($model, 'theme') ?>

    <?= $form->field($model, 'audienceNum') ?>

    <?= $form->field($model, 'exhibitionCenterId') ?>

    <?php // echo $form->field($model, 'liveApi') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'isActive') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

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
