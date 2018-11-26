<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/14
 * Time: 上午9:18
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);
?>

<div class="layui-container">
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 90px!important;">申请人：</label>
                <div class="layui-input-block jt-input-block-1">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="请输入申请人姓名" autocomplete="off" class="layui-input jt-login-input" style="width: 90%!important;">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-2 jt-display-block">申请原由：</label>
                <div class="layui-input-block jt-input-block-3 jt-padding-left-right-15">
                    <textarea name="desc" placeholder="请输入申请原由" class="layui-textarea jt-background-lightgray jt-login-input jt-height-250 jt-radius-5"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="jt-input-block-2">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" lay-submit lay-filter="login">提交申请</button>
                </div>
            </div>
        </form>
    </div>
</div>
