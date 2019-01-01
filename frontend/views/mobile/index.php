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

<div  class="layui-container jt-margin-top-10">
    <div class="layui-row">
        <div class="layui-col-xs5 layui-col-sm5 layui-col-md5">
            <div class="jt-col-md-11 jt-radius-15 jt-shadow-1 jt-height-250 jt-border-1 jt-text-align-center">
                <a href="/mobile/exhibition?id=1">
                    <img src="<?= $asset->baseUrl ?>/common/images/index_03.png" class="jt-col-md-12 jt-radius-left-top-15 jt-margin-bottom-30" style="max-height: 190px; margin-bottom: 21px;"/>
                    <span class="jt-font-weight-700 jt-font-color-gray">药品展</span>
                </a>
            </div>
        </div>
        <div class="layui-col-xs5 layui-col-sm5 layui-col-md5">
            <div class="jt-col-md-11 jt-radius-15 jt-shadow-1 jt-height-250 jt-border-1 jt-text-align-center">
                <a href="/mobile/exhibition?id=2">
                    <img src="<?= $asset->baseUrl ?>/common/images/index_02.png" class="jt-col-md-12 jt-radius-left-top-15"  style="max-height: 190px; margin-bottom: 21px;"/>
                    <span class="jt-font-weight-700 jt-font-color-gray">器械展</span>
                </a>
            </div>
        </div>
        <div class="layui-col-xs2 layui-col-sm2 layui-col-md2">
            <div class="jt-col-md-12 jt-radius-15 jt-shadow-1 jt-height-250 jt-border-1 jt-position-relative jt-overflow-hidden">
                <a href="/mobile/history-exhibition">
                    <img src="<?= $asset->baseUrl ?>/common/images/index_01.png" class="jt-height-percent-100 jt-radius-left-top-15 jt-position-absolute jt-zindex--1"/>
                    <span class="jt-font-color-gray jt-vertical-font">往期展会</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="jt-line-15"></div>
<div class="layui-container">
    <a href="/mobile/found?type=follow">
        <div class="jt-mask jt-background-grad jt-position-absolute jt-height-percent-100 jt-md-justify-12"></div>
        <div class="jt-position-absolute jt-vertical-icon jt-text-align-center">
            <img src="<?= $asset->baseUrl ?>/common/images/video_icon.png"/>
            <span class="jt-color-white jt-font-size-30 jt-vertical-align-middle" style="margin-left: 20px;">直播</span>
        </div>
        <img src="<?= $asset->baseUrl ?>/common/images/index_04.png" class="jt-col-md-12"/>
    </a>
</div>
<div class="jt-line-15"></div>
<div class="layui-container">
    <div class="jt-column-title jt-col-md-12 jt-height-40 jt-margin-bottom-10 jt-lineheight-40 jt-font-color-gray jt-padding-left-right-10">产品推荐</div>
    <table class="jt-col-md-12">
        <thead class="jt-col-md-12">
        <tr class="jt-background-grad jt-height-40">
            <?php if (!empty($model[0])) { ?>
            <?php foreach ($model[0] as $item) { ?>
            <th class="jt-color-white jt-col-md-6 jt-text-align-center">
                <?= $item->industry_name ?>
            </th>
            <?php }} ?>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($model[1])) { ?>
        <?php foreach ($model as $item) { ?>
        <tr class="jt-height-40" style="border-left: 1px solid #000000; border-right: 1px solid #000000; border-bottom: 1px solid #000000;">
            <td class="jt-text-align-center jt-font-color-gray" style="border-right: 1px solid #000000;">
                OTC
            </td>
            <td class="jt-text-align-center jt-font-color-gray">
                一类
            </td>
        </tr>
        <?php }} ?>
        </tbody>
    </table>
</div>
