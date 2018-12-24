<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // echo Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            'title',
            'summary',
            'home',
            [
                'label' => '所属行业',
                'format' => 'raw',
                'value' => function($m){
                    return $m->industry->industry_name;
                }
            ],
            'isRecommend',
            'isPassed',
            'isOnSale',
            'titleFontSize',
            'titleFontColor',
            [
                'attribute' => 'creator',
                'value' => function($m){
                    return $m->createUser->username;
                }
            ],
            // 'editor',
            'isDeleted',
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
