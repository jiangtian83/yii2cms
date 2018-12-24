<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionCenter */

$this->title = 'Update Exhibition Center: ' . $model->guid;
$this->params['breadcrumbs'][] = ['label' => 'Exhibition Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->guid, 'url' => ['view', 'id' => $model->guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exhibition-center-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
