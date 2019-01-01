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
        <form class="layui-form" onsubmit="return false;" id="loginform">
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1">手机号</label>
                <div class="layui-input-block jt-input-block-1">
                    <input type="text" name="number" required  lay-verify="required" placeholder="请输入手机号" autocomplete="off" class="layui-input jt-login-input">
                    <span style="border: 1px solid #e1e1e1; border-radius: 8px; padding: 3px 8px;position: absolute;right: 13px; top: 5px;cursor: pointer" id="smscode">获取验证码</span>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1">验证码</label>
                <div class="layui-input-block jt-input-block-1">
                    <input type="text" name="code" required  lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="jt-input-block-2">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" id="login">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
