<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Fans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anchorId')->textInput() ?>

    <?= $form->field($model, 'fansId')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
