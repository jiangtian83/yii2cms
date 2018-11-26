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

<div id="jt-follow" class="jt-tab-item layui-container">
    <div class="jt-column-title jt-col-md-12 jt-height-40 jt-margin-bottom-10 jt-lineheight-40 jt-font-color-gray jt-margin-top-10">
        <span class="jt-padding-15"><?= $title ?></span>
    </div>
    <div class="jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-col-md-12 jt-radius-10"/>
                <span class="jt-position-absolute jt-display-block jt-text-align-center jt-zindex-1 jt-top-left-half jt-color-white jt-font-size-16">一类器械</span>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    一号馆
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-col-md-12 jt-radius-10"/>
                <span class="jt-position-absolute jt-display-block jt-text-align-center jt-zindex-1 jt-top-left-half jt-color-white jt-font-size-16">二类器械</span>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    二号馆
                </div>
            </div>
        </div>
        <div class="jt-clear"></div>
    </div>
    <div class="jt-margin-bottom-10 jt-clear">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/3.png" class="jt-col-md-12 jt-radius-10"/>
                <span class="jt-position-absolute jt-display-block jt-text-align-center jt-zindex-1 jt-top-left-half jt-color-white jt-font-size-16">三类器械</span>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    三号馆
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/4.png" class="jt-col-md-12 jt-radius-10"/>
                <span class="jt-position-absolute jt-display-block jt-text-align-center jt-zindex-1 jt-top-left-half jt-color-white jt-font-size-16">四类器械</span>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    四号馆
                </div>
            </div>
        </div>
    </div>
</div>

