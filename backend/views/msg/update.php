<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Msg */

$this->title = 'Update Msg: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Msgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="msg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
