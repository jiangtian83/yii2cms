<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LiveAudio */

$this->title = 'Create Live Audio';
$this->params['breadcrumbs'][] = ['label' => 'Live Audios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-audio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
