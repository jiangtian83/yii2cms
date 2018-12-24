<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BulletScreenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bullet Screens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bullet-screen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bullet Screen', ['create'], ['class' => 'btn btn-success']) ?>
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
                'label' => '直播主题',
                'value' => function($m){
                    return $m->live->theme;
                }
            ],
            'content',
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
            ],        ],
    ]); ?>
</div>
