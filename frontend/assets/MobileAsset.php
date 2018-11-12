<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class MobileAsset extends AssetBundle
{
    public $sourcePath = '@app/../assets';

    public $css = [
        "plugins/layui/css/layui.css",
        "plugins/layui/css/font/iconfont.eot",
        "plugins/layui/css/font/iconfont.svg",
        "plugins/layui/css/font/iconfont.ttf",
        "plugins/layui/css/font/iconfont.woff"
    ];

    public $js = [
        "plugins/layui/layui.js"
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

    public $cssOptions = ['position' => View::POS_HEAD];

    public $jsOptions = ['position' => View::POS_END];

    public $publishOptions = [
        'only' => [
            'plugins/layui/*',
            'plugins/layui/css/*',
            'plugins/layui/font/*',
            'plugins/layui/lay/modules/*',
            'plugins/layui/images/*',
            'plugins/awesome/css/*',
            'plugins/awesome/fonts/*'
        ],
        'caseSensitive' => true,
        'forceCopy' => true
    ];

    private function beforeCopy($from, $to) {

    }
}
