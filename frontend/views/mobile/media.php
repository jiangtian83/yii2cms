<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/18
 * Time: 下午8:14
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);

?>

<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md3 layui-col-xs3 layui-col-sm3 jt-position-relative jt-float-left">
            <div class="jt-width-height-80 jt-opacity-6 jt-background-grad jt-position-absolute jt-text-align-center jt-lineheight-80">
                <span class="jt-color-white">点击播放</span>
            </div>
            <img src="<?= $asset->baseUrl ?>/common/images/5.png" class="jt-width-height-80">
        </div>
        <div class="layui-col-md9 layui-col-xs9 layui-col-sm9 jt-float-right">
            <ul class="jt-margin-left-right-10">
                <li>
                    日期：9月23日
                </li>
                <li>
                    主题：光华制造大型药厂
                </li>
                <li class="jt-font-color-gray jt-font-size-12">
                    100人观看
                </li>
                <li class="jt-height-20">
                    <div class="jt-col-md-12 jt-margin-top-5">
                        <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#888')">&nbsp;111</i>
                        <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#888')">&nbsp;222</i>
                        <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#888')">&nbsp;222</i>
                        <span class="jt-float-right jt-font-color-blue jt-lineheight-16">删除</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="jt-line-15"></div>

<div class="layui-container">
<div class="layui-row">
    <div class="layui-col-md3 layui-col-xs3 layui-col-sm3 jt-position-relative jt-float-left">
        <div class="jt-width-height-80 jt-opacity-6 jt-background-grad jt-position-absolute jt-text-align-center jt-lineheight-80">
            <span class="jt-color-white">点击播放</span>
        </div>
        <img src="<?= $asset->baseUrl ?>/common/images/5.png" class="jt-width-height-80">
    </div>
    <div class="layui-col-md9 layui-col-xs9 layui-col-sm9 jt-float-right">
        <ul class="jt-margin-left-right-10">
            <li>
                日期：9月23日
            </li>
            <li>
                主题：光华制造大型药厂
            </li>
            <li class="jt-font-color-gray jt-font-size-12">
                100人观看
            </li>
            <li class="jt-height-20">
                <div class="jt-col-md-12 jt-margin-top-5">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#888')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#888')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#888')">&nbsp;222</i>
                    <span class="jt-float-right jt-font-color-blue jt-lineheight-16">删除</span>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
