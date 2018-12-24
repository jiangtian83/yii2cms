<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionCenter */

$this->title = $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Exhibition Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exhibition-center-view">

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
            'exhibitionId',
            'centerName',
            'summary',
            'industryId',
            'roomLimit',
            'creator',
            'editor',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
