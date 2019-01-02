<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/18
 * Time: 下午5:07
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

use frontend\assets\MobileAsset;

$asset = MobileAsset::register($this);

?>

<div class="layui-container">
    <div class="jt-column-title jt-col-md-12 jt-height-40 jt-margin-bottom-0 jt-lineheight-40 jt-font-color-gray jt-margin-top-10">
        <span class="jt-padding-15">第<?= $new['period'] ?>期展会预告</span>
    </div>
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会类目：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="column" required  lay-verify="required" placeholder="<?= $new['industryName'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会时间：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="date" required  lay-verify="required" placeholder="<?= $new['duration'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会地点：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="address" required  lay-verify="required" placeholder="<?= $new['place'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">参展资格：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="qualification" required  lay-verify="required" placeholder="<?= $new['qualification'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">报名方式：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="method" required  lay-verify="required" placeholder="" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
        </form>
            <div class="layui-container">
                <form class="layui-form" id="bm">
                    <div class="layui-form-item jt-margin-bottom-10">
                        <label class="layui-form-label jt-form-lable-3">报名厂家：</label>
                        <div class="layui-input-block jt-input-block-4">
                            <input type="hidden" name="exhibitionId" value="<?= $new['guid'] ?>">
                            <input type="text" name="orginazationName" required  lay-verify="required" placeholder="请输入厂家名称" autocomplete="off" class="layui-input jt-login-input-no-border jt-background-lightgray jt-radius-5">

                        </div>
                    </div>
                    <div class="layui-form-item jt-margin-bottom-10">
                        <label class="layui-form-label jt-form-lable-3">联系人：</label>
                        <div class="layui-input-block jt-input-block-4">
                            <input type="text" name="contacts" required  lay-verify="required" placeholder="请输入联系人姓名" autocomplete="off" class="layui-input jt-login-input-no-border jt-background-lightgray jt-radius-5">

                        </div>
                    </div>
                    <div class="layui-form-item jt-margin-bottom-10">
                        <label class="layui-form-label jt-form-lable-3">联系方式：</label>
                        <div class="layui-input-block jt-input-block-4">
                            <input type="text" name="telephone" required  lay-verify="required" placeholder="请输入联系方式" autocomplete="off" class="layui-input jt-login-input-no-border jt-background-lightgray jt-radius-5">

                        </div>
                    </div>
                </form>
            </div>
            <div class="layui-form-item jt-margin-top-30">
                <div class="jt-input-block-2 jt-text-align-center">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" lay-submit lay-filter="login" id="bmsubmit">提交</button>
                </div>
            </div>
    </div>
</div>

<div class="jt-line-10"></div>

<div class="layui-container">
    <?php foreach ($history as $item) { ?>
    <div class="jt-column-title jt-col-md-12 jt-height-40 jt-margin-bottom-0 jt-lineheight-40 jt-font-color-gray jt-margin-top-10">
        <span class="jt-padding-15">第<?= $item['period'] ?>期展会</span>
    </div>
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会类目：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="nickname" required  lay-verify="required" placeholder="<?= $item['industryName'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会时间：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="account" required  lay-verify="required" placeholder="<?= $item['duration'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">展会地点：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="account" required  lay-verify="required" placeholder="<?= $item['place'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
            <div class="layui-form-item jt-margin-bottom-0">
                <label class="layui-form-label jt-form-lable-3">参展资格：</label>
                <div class="layui-input-block jt-input-block-4">
                    <input type="text" name="account" required  lay-verify="required" placeholder="<?= $item['qualification'] ?>" autocomplete="off" class="layui-input jt-login-input-no-border" readonly>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
</div>
