<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main backend application asset bundle.
 */
class LayuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/layui/css/layui.css',
		'resources/css/main.css',
		'resources/css/iconfont.css',
		'plugins/awesome/css/font-awesome.min.css',
    ];

    public $js = [
		'plugins/layui/layui.js',
    ];

    public $depends = [
    ];

    /**
     * @param View $view
     * @param $jsfile
     */
    public static function addScript($view, $jsfile) {  
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'backend\assets\LayuiAsset']);  
    }

    /**
     * 定义按需加载css方法，注意加载顺序在最后
     * @param View $view
     * @param $cssfile
     */
    public static function addCss($view, $cssfile) {  
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'backend\assets\LayuiAsset']);  
    }  
}
