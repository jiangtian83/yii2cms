<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LiveAudience */

$this->title = $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Live Audiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-audience-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->guid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->guid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'guid',
            'liveId',
            'audienceId',
            'status',
            'userData',
        ],
    ]) ?>

</div>
