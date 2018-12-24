<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Anchor */

$this->title = 'Update Anchor: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Anchors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anchor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
