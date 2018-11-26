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
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">真实姓名：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="请输入真实姓名" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">身份证号：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="account" required  lay-verify="required" placeholder="请输入身份证号" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">联系手机：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="请输入联系手机" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">户籍地址：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="account" required  lay-verify="required" placeholder="请输入户籍地址" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">现居地址：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="请输入现居地址" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">厂家名称：</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="account" required  lay-verify="required" placeholder="请输入厂家名称" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label jt-form-lable-1" style="width: 100px!important;">座机号码</label>
                <div class="layui-input-block jt-input-block-1" style="margin-left: 100px!important;">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="请输入座机号码" autocomplete="off" class="layui-input jt-login-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="jt-input-block-2">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" style="height: 50px!important; line-height: 50px!important; font-size: 20px!important;" lay-submit lay-filter="login">提交申请</button>
                </div>
            </div>
        </form>
    </div>
</div>
