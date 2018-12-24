<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BulletScreen */

$this->title = 'Update Bullet Screen: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Bullet Screens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bullet-screen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
