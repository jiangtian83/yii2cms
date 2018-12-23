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

<div class="layui-container jt-clear-both jt-margin-top-60">
    <div class="jt-margin-left-right-30">
        <ul class="jt-clear">
            <li class="jt-display-inline-block jt-text-align-center jt-margin-padding-0" style="width: 49%">
                <div class="jt-width-height-120 jt-radius-percent-50 jt-background-blue jt-border-green-opacity jt-font-size-36 jt-color-white jt-lineheight-120 jt-margin-auto">18:00</div>
                <span class="jt-lineheight-40">直播时间</span>
            </li>
            <li class="jt-display-inline-block jt-text-align-center jt-margin-padding-0" style="width: 49%; margin-left: 0.5%;">
                <div class="jt-width-height-120 jt-radius-percent-50 jt-background-blue jt-border-green-opacity jt-font-size-36 jt-color-white jt-lineheight-120 jt-margin-auto">188</div>
                <span class="jt-lineheight-40">累计观看</span>
            </li>
            <li class="jt-display-inline-block jt-text-align-center jt-col-md-12 jt-margin-top-30">
                <div class="jt-width-height-120 jt-radius-percent-50 jt-background-green jt-border-green-opacity jt-margin-auto" style="background: url('<?= $asset->baseUrl ?>/common/images/plus.png') no-repeat center; background-size: 60%"></div>
                <span class="jt-lineheight-40">新增粉丝</span>
            </li>
            <li>
                <div class="jt-col-md-6 jt-margin-auto jt-radius-10 jt-margin-top-30 jt-text-align-center jt-height-40 jt-lineheight-40 jt-color-white" style="background-color: #fea12a">返回首页</div>
            </li>
        </ul>
    </div>
</div>
