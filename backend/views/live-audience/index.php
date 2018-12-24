<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LiveAudienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Live Audiences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-audience-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Live Audience', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            // 'guid',
            [
                'attribute' => 'liveId',
                'label' => '直播间',
                'value' => function($m) {
                    return $m->live->theme;
                }
            ],
            [
                'attribute' => 'audienceId',
                'label' => '观众姓名',
                'value' => function($m) {
                    return !empty($m->audience) ? $m->audience->username : '游客';
                }
            ],
            'status',
            // 'userData',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作'
            ],
        ],
    ]); ?>
</div>
