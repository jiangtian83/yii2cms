<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MsgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Msgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="msg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '序号'
            ],

            [
                'attribute' => 'ownerId',
                'label' => '消息接收对象',
                'value' => function($m){
                    // 评论场景先预留着
                    switch ($m->scene) {
                        case \common\models\Msg::MSG_SCENE_PRIVATE:
                            $u = \common\models\User::find()->where(['id' => $m->ownerId])->one();
                            return $u->nickname;
                            break;
                        case \common\models\Msg::MSG_SCENE_LIVE:
                            $u = \common\models\Live::find()->where(['guid' => $m->ownerId])->one();
                            return $u->theme;
                            break;
                        default:
                            break;
                    }
                }
            ],
            [
                'attribute' => 'senderId',
                'label' => '发送人',
                'value' => function($m){
                    return $m->sender->nickname;
                }
            ],
            'scene',
            'content',
            [
                'label'=>'发送时间',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'value' => 'created_at'
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'header' => '操作'
            ]
        ],
    ]); ?>
</div>
