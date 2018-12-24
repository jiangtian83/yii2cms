<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Industries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industry-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Industry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            //'id',
            'industry_name',
            [
                'label' => '父级行业',
                'format' => 'raw',
                'value' => function($m){
                    if ($m->pid === 0) {
                        return '一级行业';
                    } else {
                        $model = \common\models\Industry::findOne(['id' => $m->pid]);
                        return is_null($model) ? '一级行业' : $model->industry_name;
                    }
                }
            ],
            [
                'label' => '添加人',
                'format' => 'raw',
                'value' => function($m){
                    return $m->user->username;
                }
            ],
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
