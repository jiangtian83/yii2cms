<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BulletScreen */

$this->title = 'Create Bullet Screen';
$this->params['breadcrumbs'][] = ['label' => 'Bullet Screens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bullet-screen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
