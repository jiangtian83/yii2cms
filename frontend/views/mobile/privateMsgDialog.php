<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/18
 * Time: 下午4:29
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);

?>

<div class="layui-container jt-background-morelightgray" style="position: static!important; height: 100%;">
    <div class="jt-col-md-12 jt-text-align-center jt-lineheight-40"><span class="jt-color-white jt-font-size-12 jt-background-gray jt-radius-15" style="padding: 5px 15px;">18:00</span></div>
    <div class="jt-col-md-12 jt-margin-top-20">
        <div class="jt-clear">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-60 jt-float-left">
            <div class="jt-background-white jt-padding-20 jt-margin-left-10 jt-margin-top-15 jt-float-left jt-radius-msg jt-font-size-18">您好，我是好医生！</div>
        </div>
        <div class="jt-clear">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-60 jt-float-right">
            <div class="jt-background-white jt-padding-20 jt-margin-right-10 jt-margin-top-15 jt-float-right jt-radius-msg-2 jt-font-size-18">您好！</div>
        </div>
    </div>
    <div class="jt-position-absolute jt-height-80 jt-background-white jt-col-md-12" style="bottom: 0; left: 0; border: 1px solid #eee;">
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <div class="layui-input-block jt-text-align-center" style="margin: 20px 0!important;">
                    <input type="text" name="title" required  lay-verify="required" placeholder="请输入消息..." autocomplete="off" class="layui-input jt-col-md-8 jt-radius-8 jt-background-lightgray" style="display: inline-block">
                </div>
            </div>
        </form>
    </div>
</div>
