<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LiveAudioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="live-audio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'liveId') ?>

    <?= $form->field($model, 'anchorId') ?>

    <?= $form->field($model, 'audienceId') ?>

    <?= $form->field($model, 'streamApi') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
