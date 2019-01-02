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
        <form class="layui-form" action="/mobile/get-products-by-industry" method="get" id="selectIndustry">
            <div class="layui-form-item">
                <div class="jt-col-md-6">
                    <select name="city" lay-verify="required" class="jt-radius-15" onchange="selectIndustry()">
                        <?php foreach ($menu as $key => $item) { ?>
                            <option value="<?= $key ?>" <?php if ($key == $current) {echo 'selected';} ?>><?= $item ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
<?php foreach ($products as $item) { ?>
<div class="layui-container">
    <div class="layui-row jt-font-color-gray">
        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
            <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-col-md-12 jt-radius-10">
        </div>
        <div class="layui-col-xs9 layui-col-sm9 layui-col-md9">
            <div class="jt-col-md-12 jt-float-bug">
                <div class="layui-col-xs9 layui-col-sm9 layui-col-md9">
                    <div class="jt-padding-left-right-20">
                        <p><b><?= $item['title'] ?></b></p>
                        <p><?= mb_substr($item['summary'], 0, 38) ?>......</p>
                    </div>
                </div>
                <div class="layui-col-xs3 layui-col-sm3 layui-col-md3 jt-text-align-right">
                    <span class="jt-radius-percent-50 jt-display-inline-block jt-width-height-50 jt-background-blue jt-lineheight-40 jt-text-align-center jt-border-green jt-margin-padding-0"><img src="<?= $asset->baseUrl?>/common/images/video_icon.png" class="jt-col-md-6"></span>
                </div>
            </div>
        </div>
        <div class="jt-col-md-12 jt-text-align-right jt-position-absolute jt-md-justify-12" style="bottom: 0">
            <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#888')">&nbsp;<?= rand(0, 999)?></i>
            <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#888')">&nbsp;<?= rand(0, 999) ?></i>
            <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#888')">&nbsp;<?= rand(0, 999) ?></i>
            <div class="jt-radius-5 jt-color-white jt-text-align-center jt-background-green jt-padding-3 jt-display-inline-block">
                <a href="tel:18310425848"><span class="jt-font-size-10 jt-webkit-text-size-adjust">拨打电话</span></a>
            </div>
        </div>
    </div>
</div>
<div class="jt-line-15"></div>
<?php } ?>
