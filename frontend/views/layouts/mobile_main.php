<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/12
 * Time: 上午9:52
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use yii\helpers\Html;

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
    <header class="jt-col-md-12 jt-background-grad jt-height-80 jt-lineheight-100 jt-position-relative jt-margin-padding-0">
        <div class="jt-position-absolute jt-col-md-12 jt-margin-padding-0 jt-text-align-center jt-color-white jt-font-size-24 jt-lineheight-80">
            <?= $this->context->title ?>
        </div>
        <ul class="jt-clear jt-height-percent-100">
            <li class="jt-float-left jt-col-md-6 jt-margin-padding-0">
                <div class="jt-wrapper jt-text-align-left jt-lineheight-90">
                    <i class="fa fa-chevron-left jt-color-white jt-font-size-24 jt-margin-left-10 <?= $this->context->showBackIcon ? 'jt-display-inline' : 'jt-display-none' ?>"></i>
                </div>
            </li>
            <li class="jt-float-right jt-col-md-6 jt-margin-padding-0">
                <div class="jt-wrapper jt-text-align-right jt-lineheight-90">
                    <i class="fa fa-<?= $this->context->showSetting ? 'cog' : 'bars' ?> jt-color-white jt-font-size-36 jt-margin-right-10 <?= $this->context->showFoldIcon ? 'jt-display-inline' : 'jt-display-none' ?>"></i>
                </div>
            </li>
        </ul>
    </header>

    <?= $content ?>
    <footer class="jt-height-60 jt-col-md-12 <?= $this->context->showFooter ? 'jt-display-block' : 'jt-display-none'?>"></footer>

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
