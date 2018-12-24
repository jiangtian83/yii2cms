<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            // 'guid',
            [
                'attribute' => 'userId',
                'value' => function($m){
                    return $m->user->username;
                }
            ],
            'realName',
            'orginazationName',
            'address',
            'passStatus',
            'suggestions',
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
