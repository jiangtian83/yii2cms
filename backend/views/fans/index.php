<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fans', ['create'], ['class' => 'btn btn-success']) ?>
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
                'value' => function($m){
                    return $m->anchor->username;
                }
            ],
            [
                'attribute' => 'fansId',
                'value' => function($m){
                    return $m->fans->username;
                }
            ],
            'status',
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
