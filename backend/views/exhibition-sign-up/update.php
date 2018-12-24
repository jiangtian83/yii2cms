<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionSignUp */

$this->title = 'Update Exhibition Sign Up: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Exhibition Sign Ups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exhibition-sign-up-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
