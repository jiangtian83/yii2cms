<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionCenterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exhibition-center-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'exhibitionId') ?>

    <?= $form->field($model, 'centerName') ?>

    <?= $form->field($model, 'summary') ?>

    <?= $form->field($model, 'industryId') ?>

    <?php // echo $form->field($model, 'roomLimit') ?>

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
