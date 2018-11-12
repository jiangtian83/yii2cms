<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/12
 * Time: 上午9:52
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;
use yii\helpers\Html;

MobileAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <div  class="layui-container">
        <blockquote class="layui-elem-quote">注意：下述演示中的颜色只是做一个区分作用，并非栅格内置。</blockquote>
        <div class="layui-row">
            <div class="layui-col-xs6">
                <div class="grid-demo grid-demo-bg1">6/12</div>
            </div>
            <div class="layui-col-xs6">
                <div class="grid-demo">6/12</div>
            </div>
        </div>
    </div>
    <header>

    </header>


    <?php $this->beginBlock('test') ?>
        $(function($) {
        $('#mybutton').click(function() {
        alert('OK');
        });
        });
    <?php $this->endBlock() ?>
    <?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
