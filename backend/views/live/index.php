<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Live', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'anchorId',
                'label' => '主播昵称',
                'value' => function($m){
                    return $m->anchor->username;
                }
            ],
            'theme',
            'audienceNum',
            [
                'attribute' => 'exhibitionCenterId',
                'label' => '展馆名称',
                'value' => function($m){
                    return $m->exhibitionCenter->centerName;
                }
            ],
            // 'liveApi',
            'type',
            'rank',
            'isActive',
            'isDeleted',
            [
                'attribute' => 'creator',
                'value' => function($m){
                    return $m->creator0->username;
                }
            ],
            // 'editor',
            [
                'label'=>'创建日期',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'value' => 'created_at'
            ],
            //'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作'
            ],
        ],
    ]); ?>
</div>