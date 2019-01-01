<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Msg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="msg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ownerId')->textInput() ?>

    <?= $form->field($model, 'senderId')->textInput() ?>

    <?= $form->field($model, 'scene')->dropDownList([ '私信' => '私信', '直播' => '直播', '评论' => '评论', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
