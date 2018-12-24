<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ExhibitionSignUpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exhibition Sign Ups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exhibition-sign-up-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exhibition Sign Up', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            // 'guid',
            'exhibitionId',
            'orginazationName',
            'contacts',
            'telephone',
            //'isDeleted',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作'
            ],
        ],
    ]); ?>
</div>
