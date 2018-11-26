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

<div class="layui-container">
    <div class="layui-row jt-font-color-gray">
        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-col-md-12 jt-radius-10">
        </div>
        <div class="layui-col-xs9 layui-col-sm9 layui-col-md9">
            <div class="jt-col-md-12 jt-float-bug">
                <div class="layui-col-xs9 layui-col-sm9 layui-col-md9">
                    <div class="jt-padding-left-right-20">
                        <p><b>产品名称</b></p>
                        <p>产品介绍，本产品主要功效......</p>
                    </div>
                </div>
                <div class="layui-col-xs3 layui-col-sm3 layui-col-md3 jt-text-align-right">
                    <span class="jt-radius-percent-50 jt-display-inline-block jt-width-height-50 jt-background-blue jt-lineheight-40 jt-text-align-center jt-border-green jt-margin-padding-0"><img src="<?= $asset->baseUrl?>/common/images/video_icon.png" class="jt-col-md-6"></span>
                </div>
            </div>
        </div>
        <div class="jt-col-md-12 jt-text-align-right jt-position-absolute jt-md-justify-12" style="bottom: 0">
            <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#888')">&nbsp;111</i>
            <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#888')">&nbsp;222</i>
            <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#888')">&nbsp;222</i>
            <div class="jt-radius-5 jt-color-white jt-text-align-center jt-background-green jt-padding-3 jt-display-inline-block">
                <span class="jt-font-size-10 jt-webkit-text-size-adjust">拨打电话</span>
            </div>
        </div>
    </div>
</div>
<div class="jt-line-15"></div>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-xs2 layui-col-sm2 layui-col-md2">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-50" />
        </div>
        <div class="layui-col-xs10 layui-col-sm10 layui-col-md10">
            <ul>
                <li class="jt-col-md-12 jt-padding-bottom-10">
                    <span class="jt-font-weight-700 jt-font-color-blue">好医生：</span>
                    <p>产品不错，很合意。</p>
                </li>
                <li class="jt-col-md-12 jt-background-morelightgray jt-padding-10">
                    <span class="jt-font-weight-700 jt-font-color-blue jt-font-color-green">豆医生：</span>
                    <span>确实很好！</span>
                </li>
                <li class="jt-font-color-gray jt-font-size-12 jt-clear jt-margin-top-10">
                    <span class="jt-float-left">
                        10-5 10:28
                    </span>
                    <span class="jt-float-right">
                        <i class="fa fa-comment-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#000')">&nbsp;回复</i>
                    </span>
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
                    <span class="jt-font-weight-700 jt-font-color-blue">赵医生</span>
                    <p>产品不错，很合意。</p>
                </li>
                <li class="jt-font-color-gray jt-font-size-12 jt-margin-top-10 jt-clear">
                    <span class="jt-float-left">
                        10-5 10:28
                    </span>
                    <span class="jt-float-right">
                        <i class="fa fa-comment-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#000')">&nbsp;回复</i>
                    </span>
                </li>
            </ul>
            <div class="jt-line-15"></div>
        </div>
    </div>
</div>
