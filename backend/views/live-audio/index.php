<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LiveAudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Live Audios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-audio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Live Audio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            // 'guid',
            'liveId',
            'anchorId',
            'audienceId',
            [
                'attribute' => 'liveId',
                'label' => '直播间',
                'value' => function($m) {
                    return $m->live->theme;
                }
            ],
            [
                'attribute' => 'anchorId',
                'label' => '主播id',
                'value' => function($m) {
                    return !empty($m->anchor) ? $m->anchor->username : '游客';
                }
            ],
            [
                'attribute' => 'audienceId',
                'label' => '连麦者姓名',
                'value' => function($m) {
                    return !empty($m->audience) ? $m->audience->username : '游客';
                }
            ],
            'streamApi',
            //'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作'
            ],
        ],
    ]); ?>
</div>
