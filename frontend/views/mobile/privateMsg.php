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
    <?php foreach ($msg as $item) { ?>
    <div class="layui-row">
        <div class="layui-col-xs2 layui-col-sm2 layui-col-md2">
            <img src="<?= $item['head_pic'] ?>" class="jt-radius-percent-50 jt-width-height-50" />
        </div>
        <div class="layui-col-xs10 layui-col-sm10 layui-col-md10">
            <ul>
                <li class="jt-col-md-12 jt-padding-bottom-10">
                    <span class="jt-font-weight-700 jt-font-size-16"><?= $item['nickname'] ?></span>
                    <span class="jt-font-color-gray jt-font-size-12 jt-float-right"><?= date("H:i", $item['created_at']) ?></span>
                    <p class="jt-font-color-gray"><?= mb_substr($item['content'], 0, 38) ?></p>
                </li>
            </ul>
            <div class="jt-line-15"></div>
        </div>
    </div>
    <?php } ?>
</div>
