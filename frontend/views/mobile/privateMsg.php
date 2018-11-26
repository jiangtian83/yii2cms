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

$asset = MobileAsset::register($this);
?>

<div class="layui-container jt-margin-top-15">
    <div class="layui-row">
        <div class="layui-col-xs2 layui-col-sm2 layui-col-md2">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-50" />
        </div>
        <div class="layui-col-xs10 layui-col-sm10 layui-col-md10">
            <ul>
                <li class="jt-col-md-12 jt-padding-bottom-10">
                    <span class="jt-font-weight-700 jt-font-size-16">好医生</span>
                    <span class="jt-font-color-gray jt-font-size-12 jt-float-right">18:08</span>
                    <p class="jt-font-color-gray">您好，我是光华制造大型制药厂的某某某...</p>
                </li>
            </ul>
            <div class="jt-line-15"></div>
        </div>
    </div>
    <div class="layui-row">
        <div class="layui-col-xs2 layui-col-sm2 layui-col-md2">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-50" />
        </div>
        <div class="layui-col-xs10 layui-col-sm10 layui-col-md10">
            <ul>
                <li class="jt-col-md-12 jt-padding-bottom-10">
                    <span class="jt-font-weight-700 jt-font-size-16">赵医生</span>
                    <p class="jt-font-color-gray">您好，我是光华制造大型制药厂的某某某...</p>
                </li>
            </ul>
            <div class="jt-line-15"></div>
        </div>
    </div>
</div>
