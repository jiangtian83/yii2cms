<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/18
 * Time: 下午7:17
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);

?>

<div class="layui-container">
    <div class="jt-position-relative jt-margin-bottom-20">
        <i class="fa fa-share-square-o jt-font-color-blue jt-font-size-16 jt-position-absolute" style="right: 0; top: 10px;"></i>
        <p class="jt-display-inline-block jt-col-md-12 jt-text-align-center">
            <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-width-height-60 jt-radius-percent-50 jt-border-blue" />
            <span class="jt-text-align-center jt-margin-top-15 jt-display-block">好医生</span>
        </p>
        <div class="jt-margin-top-15 jt-clear">
            <div class="layui-col-md4 layui-col-xs4 layui-col-sm4 jt-font-size-18">
                <p class="jt-text-align-center jt-font-size-24">88</p>
                <p class="jt-text-align-center">我的粉丝</p>
            </div>
            <div class="layui-col-md4 layui-col-xs4 layui-col-sm4 jt-font-size-18">
                <p class="jt-text-align-center jt-font-size-24">66</p>
                <p class="jt-text-align-center">我的关注</p>
            </div>
            <div class="layui-col-md4 layui-col-xs4 layui-col-sm4 jt-font-size-18">
                <p class="jt-text-align-center jt-font-size-24">52</p>
                <p class="jt-text-align-center">我喜欢</p>
            </div>
        </div>
    </div>

    <div class="jt-margin-left-right-30">
        <ul class="jt-font-size-18 jt-margin-bottom-30">
            <li class="jt-height-40">私信</li>
            <li class="jt-height-40">主播申请</li>
            <li class="jt-height-40">我的直播</li>
            <li class="jt-height-40">我的图片视频</li>
        </ul>
        <ul>
            <li class="jt-float-left jt-text-align-center">
                <div class="jt-width-height-100 jt-radius-percent-50 jt-background-blue jt-border-green-opacity" style="background: url('<?= $asset->baseUrl ?>/common/images/video_icon.png') no-repeat center; background-size: 60%"></div>
                <span class="jt-lineheight-40">我要直播</span>
            </li>
            <li class="jt-float-right jt-text-align-center">
                <div class="jt-width-height-100 jt-radius-percent-50 jt-background-green jt-border-green-opacity" style="background: url('<?= $asset->baseUrl ?>/common/images/plus.png') no-repeat center; background-size: 60%"></div>
                <span class="jt-lineheight-40">上传</span>
            </li>
        </ul>
    </div>
</div>
