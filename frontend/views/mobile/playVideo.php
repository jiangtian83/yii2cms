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

<div class="jt-col-md-12 jt-position-relative" style="background: #0096ea url('<?= $asset->baseUrl ?>/common/images/video_play.png') no-repeat top; -webkit-background-size: cover;background-size: cover; height: 100%;">
    <div>
        <ul class="jt-height-percent-100">
            <li class="jt-display-inline-block jt-margin-padding-0 layui-col-md6 layui-col-xs6 layui-col-sm6">
                <div class="jt-wrapper jt-text-align-left jt-lineheight-80">
                    <i class="fa fa-chevron-left jt-color-white jt-font-size-24 jt-margin-left-10 jt-display-inline"></i>
                    <span class="jt-color-white jt-font-size-18 jt-margin-left-10">眼药水厂家</span>
                </div>
            </li>
            <li class="jt-clear jt-display-inline-block jt-margin-padding-0 jt-height-80 layui-col-md6 layui-col-xs6 layui-col-sm6" style="display: table">
                <div class="jt-float-right jt-text-align-right jt-height-50 jt-lineheight-50 jt-radius-50 jt-margin-top-15 jt-margin-right-10 jt-background-black-opacity-6" style="width: 60%!important;">
                    <i class="fa fa-plus jt-color-white jt-font-size-18 jt-margin-right-10 jt-display-inline">关注</i>
                    <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-radius-percent-50 jt-width-height-40">
                </div>
                <div class="jt-clear-both"></div>
                <div class="jt-color-white jt-font-size-12 jt-text-align-right jt-margin-right-10 jt-font-size-14 jt-padding-5">66666人观看</div>
            </li>
        </ul>
    </div>

    <div class="jt-width-80 jt-height-250 jt-position-absolute jt-text-align-right" style="right: 10px; top: calc(50% - 50px)">
        <i class="fa fa-heart jt-color-red jt-font-size-48"></i>
        <i class="fa fa-share-square-o jt-font-size-48 jt-margin-top-30 jt-margin-bottom-30 jt-color-white"></i>
        <div class="jt-radius-percent-50 jt-color-white jt-text-align-center jt-background-green jt-padding-3 jt-display-inline-block jt-width-height-55 jt-border-green-opacity">
            <span class="jt-font-size-14 jt-webkit-text-size-adjust">拨打电话</span>
        </div>
    </div>

    <div class="jt-height-60 jt-background-black-opacity-3 jt-position-absolute" style="bottom: 0; left: 0; width: 100%;">
        <div class="jt-col-md-6 jt-float-left">
            <form class="layui-form" action="" style="margin-top: 11px;">
                <div class="layui-form-item">
                    <div class="layui-input-block" style="margin-left: 10px!important;">
                        <input type="text" name="title" required  lay-verify="required" placeholder="@评论或者留言" autocomplete="off" class="layui-input jt-placeholder jt-background-transparent jt-border-0 jt-font-size-16">
                    </div>
                </div>
            </form>
        </div>
        <div class="jt-col-md-6 jt-float-right">
            <div class="jt-height-40 jt-col-md-8 jt-float-right jt-background-blue jt-radius-10 jt-color-white jt-text-align-center jt-lineheight-40 jt-margin-right-10 jt-font-size-16" style="margin-top: 10px;">产品展示</div>
        </div>
    </div>
</div>

<!--视频评论-->
<div class="jt-line-15"></div>
<div class="layui-container" style="margin:15px!important;">
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

