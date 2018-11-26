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
use yii\web\View;

$asset = MobileAsset::register($this);
?>

<div class="layui-container jt-margin-top-30">
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">直播主题：</label>
                <div class="layui-input-block" style="width: 75%!important; margin-left: 0!important; float: left;">
                    <input type="text" name="product_name" required  lay-verify="required" placeholder="产品名称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">公司名称：</label>
                <div class="layui-input-block" style="width: 75%!important; margin-left: 0!important; float: left;">
                    <input type="text" name="product_name" required  lay-verify="required" placeholder="产品名称" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">地区：</label>
                <div class="layui-input-block" style="width: 75%!important; margin-left: 0!important; float: left;">
                    <input type="text" name="product_name" required  lay-verify="required" placeholder="请输入区域" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">行业标签：</label>
                <div style="width: 75%; float: left;">
                    <label class="layui-form-label" style="width: 20%!important; padding-right: 0; padding-left: 0">药品：</label>
                    <div class="layui-input-block" style="width: 80%!important; margin-left: 0!important; float: left;">
                        <input type="checkbox" name="like[write]" title="OTC">
                        <input type="checkbox" name="like[read]" title="临床" checked>
                    </div>
                    <div class="jt-clear"></div>
                    <label class="layui-form-label" style="width: 20%!important; padding-right: 0; padding-left: 0">器械：</label>
                    <div class="layui-input-block" style="width: 80%!important; margin-left: 0!important; float: left;">
                        <input type="checkbox" name="like[write]" title="一类" checked>
                        <input type="checkbox" name="like[read]" title="二类">
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline jt-display-block">
                    <label class="layui-form-label" style="width: 25%!important; padding-right: 0; float: left;">上传文件：</label>
                    <button type="button" class="layui-btn jt-background-green jt-col-md-3" style="height: 36px; float: left; padding: 0">
                        <i class="layui-icon layui-icon-upload-circle"></i>
                    </button>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="jt-input-block-2">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" lay-submit lay-filter="login">开始直播</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $this->beginBlock("colorPicker"); ?>
    layui.use('colorpicker', function(){
        var colorpicker = layui.colorpicker;

        colorpicker.render({
        elem: '#colorPicker'
        ,predefine: true
        ,colors: ['#F00','#0F0','#00F','rgb(255, 69, 0)','rgba(255, 69, 0, 0.5)']
        });
    });

    layui.use('colorpicker', function(){
        var colorpicker = layui.colorpicker;

        colorpicker.render({
        elem: '#colorPicker2'
        ,predefine: true
        ,colors: ['#F00','#0F0','#00F','rgb(255, 69, 0)','rgba(255, 69, 0, 0.5)']
        });
    });
<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['colorPicker'], View::POS_END); ?>
