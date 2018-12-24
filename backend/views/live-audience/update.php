<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LiveAudience */

$this->title = 'Update Live Audience: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Live Audiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="live-audience-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
