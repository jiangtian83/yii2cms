<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Anchor */

$this->title = 'Create Anchor';
$this->params['breadcrumbs'][] = ['label' => 'Anchors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anchor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
