<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industryId')->textInput() ?>

    <?= $form->field($model, 'isRecommend')->textInput() ?>

    <?= $form->field($model, 'isPassed')->textInput() ?>

    <?= $form->field($model, 'isOnSale')->textInput() ?>

    <?= $form->field($model, 'titleFontSize')->textInput() ?>

    <?= $form->field($model, 'titleFontColor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
