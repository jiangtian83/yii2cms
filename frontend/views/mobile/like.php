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
<!--关注-->
<div id="jt-follow" class="jt-tab-item layui-container jt-margin-top-30">
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-trash-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')"></i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-trash-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/3.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-trash-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')"></i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/4.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-trash-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')"></i>
                </div>
            </div>
        </div>
    </div>
</div>
