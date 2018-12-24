<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LiveAudience */

$this->title = 'Create Live Audience';
$this->params['breadcrumbs'][] = ['label' => 'Live Audiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="live-audience-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
