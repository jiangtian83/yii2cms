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
<div id="jt-follow" class="jt-tab-item <?php if ($current != 'follow') {echo 'jt-display-none';} ?> layui-container jt-margin-top-30">
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/1.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
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
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/4.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--发现-->
<div id="jt-found" class="jt-tab-item <?php if ($current != 'found') {echo 'jt-display-none';} ?>">
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_1.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_2.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_1.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_2.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_1.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/found_2.png" class="jt-col-md-12"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--同行-->
<div id="jt-peers" class="jt-tab-item <?php if ($current != 'counterparts') {echo 'jt-display-none';} ?> layui-container">
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item">
                <div class="jt-col-md-6">
                    <select name="city" lay-verify="required" class="jt-radius-15">
                        <option value="0">OTC</option>
                        <option value="1">临床</option>
                        <option value="2">保健品</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div class="layui-row jt-margin-bottom-10">
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-right-5">
                <img src="<?= $asset->baseUrl ?>/common/images/5.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6 jt-margin-top--10">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/5.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
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
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
        <div class="layui-col-xs6 layui-col-sm6 layui-col-md6">
            <div class="jt-col-md-12 jt-position-relative jt-padding-left-5">
                <img src="<?= $asset->baseUrl ?>/common/images/2.png" class="jt-col-md-12 jt-radius-10"/>
                <div class="jt-col-md-12 jt-text-align-center jt-position-absolute jt-height-40 jt-background-grad jt-color-white jt-lineheight-40 jt-mask jt-radius-5" style="bottom: 0; width: calc(100% - 5px)">
                    <i class="fa fa-heart-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-heart-o').addClass('fa-heart').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-heart').addClass('fa-heart-o').css('color', '#fff')">&nbsp;111</i>
                    <i class="fa fa-comments-o jt-margin-right-10" onmouseover="$(this).removeClass('fa-comments-o').addClass('fa-comments').css('color', '#ff5b5b')" onmouseout="$(this).removeClass('fa-comments').addClass('fa-comments-o').css('color', '#fff')">&nbsp;222</i>
                    <i class="fa fa-share-square-o jt-margin-right-10" onmouseover="$(this).css('color', '#ff5b5b')" onmouseout="$(this).css('color', '#fff')">&nbsp;222</i>
                </div>
            </div>
        </div>
    </div>
</div>
