<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Exhibition */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Exhibitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exhibition-view">

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
            'period',
            'name',
            'summary',
            'industryId',
            'qualification',
            'place',
            'contents',
            'duration',
            'sponsor',
            'isActive',
            'exhibitorsNum',
            'creator',
            'editor',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
