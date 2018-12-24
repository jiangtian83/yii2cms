<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionSignUpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exhibition-sign-up-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'exhibitionId') ?>

    <?= $form->field($model, 'orginazationName') ?>

    <?= $form->field($model, 'contacts') ?>

    <?= $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
