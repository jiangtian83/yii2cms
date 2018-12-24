<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ExhibitionSignUp */

$this->title = 'Create Exhibition Sign Up';
$this->params['breadcrumbs'][] = ['label' => 'Exhibition Sign Ups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exhibition-sign-up-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
