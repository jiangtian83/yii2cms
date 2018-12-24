<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'guid') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'summary') ?>

    <?= $form->field($model, 'home') ?>

    <?= $form->field($model, 'industryId') ?>

    <?php // echo $form->field($model, 'isRecommend') ?>

    <?php // echo $form->field($model, 'isPassed') ?>

    <?php // echo $form->field($model, 'isOnSale') ?>

    <?php // echo $form->field($model, 'titleFontSize') ?>

    <?php // echo $form->field($model, 'titleFontColor') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <?php // echo $form->field($model, 'editor') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
