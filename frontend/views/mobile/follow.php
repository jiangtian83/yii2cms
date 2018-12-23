<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/18
 * Time: 下午7:58
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);

?>

<div class="layui-container jt-clear-both">
    <ul class="jt-col-md-12 jt-clear">
        <li class="jt-col-md-4 jt-float-left jt-margin-padding-0 jt-text-align-center jt-margin-top-15" style="outline: none">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-width-height-60 jt-radius-percent-50">
            <p class="jt-text-align-center">好医生</p>
        </li>
        <li class="jt-col-md-4 jt-float-left jt-margin-padding-0 jt-text-align-center jt-margin-top-15" style="outline: none">
            <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-width-height-60 jt-radius-percent-50">
            <p class="jt-text-align-center">好医生</p>
        </li>
        <li class="jt-col-md-4 jt-float-left jt-margin-padding-0 jt-text-align-center jt-margin-top-15" style="outline: none">
            <img src="<?= $asset->baseUrl ?>/common/images/3.png" class="jt-width-height-60 jt-radius-percent-50">
            <p class="jt-text-align-center">好医生</p>
        </li>
        <li class="jt-col-md-4 jt-float-left jt-margin-padding-0 jt-text-align-center jt-margin-top-15" style="outline: none">
            <img src="<?= $asset->baseUrl ?>/common/images/4.png" class="jt-width-height-60 jt-radius-percent-50">
            <p class="jt-text-align-center">好医生</p>
        </li>
        <li class="jt-col-md-4 jt-float-left jt-margin-padding-0 jt-text-align-center jt-margin-top-15" style="outline: none">
            <img src="<?= $asset->baseUrl ?>/common/images/5.png" class="jt-width-height-60 jt-radius-percent-50">
            <p class="jt-text-align-center">好医生</p>
        </li>
    </ul>
</div>
