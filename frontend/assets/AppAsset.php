<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = "";
    public $css = [];

    public $js = [
        'js/bootstrap.js'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
