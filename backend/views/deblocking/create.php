<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Deblocking */

$this->title = 'Create Deblocking';
$this->params['breadcrumbs'][] = ['label' => 'Deblockings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deblocking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
