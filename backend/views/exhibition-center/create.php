<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionCenter */

$this->title = 'Create Exhibition Center';
$this->params['breadcrumbs'][] = ['label' => 'Exhibition Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exhibition-center-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
