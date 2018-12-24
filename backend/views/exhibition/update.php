<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Exhibition */

$this->title = 'Update Exhibition: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Exhibitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exhibition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
