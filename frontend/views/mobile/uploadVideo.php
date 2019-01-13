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
        <form class="layui-form" onsubmit="return false;">
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">产品名称：</label>
                <div class="layui-input-block" style="width: 35%!important; margin-left: 0!important; float: left;">
                    <input type="text" name="title" required  lay-verify="required" placeholder="产品名称" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-input-block" style="width: 20%!important; margin-left: 2%!important; float: left;">
                    <select name="titleFontSize" lay-verify="required" id="fontsize">
                        <option value="14">字体</option>
                        <option value="12">小号</option>
                        <option value="14">中号</option>
                        <option value="16">大号</option>
                        <option value="18">特大号</option>
                    </select>
                </div>
                <div class="layui-input-block" style="width: 16%!important; margin-left: 2%!important; float: left;">
                    <input type="hidden" name="titleFontColor" value="#00aaff"/>
                    <div id="colorPicker" class="jt-col-md-12" style="height: 38px; line-height: 38px; margin: 0">颜色</div>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">产品介绍：</label>
                <div class="layui-input-block" style="width: 35%!important; margin-left: 0!important; float: left;">
                    <textarea type="text" name="summary" required  lay-verify="required" placeholder="请输入产品介绍，限30个字" autocomplete="off" class="layui-input jt-height-80 jt-place" style="padding: 5px 10px;"></textarea>
                </div>
                <div class="layui-input-block" style="width: 20%!important; margin-left: 2%!important; float: left;">
                    <select name="descriptionSize" lay-verify="required" id="fontsize2">
                        <option value="14">字体</option>
                        <option value="12">小号</option>
                        <option value="14">中号</option>
                        <option value="16">大号</option>
                        <option value="18">特大号</option>
                    </select>
                </div>
                <div class="layui-input-block" style="width: 16%!important; margin-left: 2%!important; float: left;">
                    <input type="hidden" name="descriptionColor" value="#00aaff"/>
                    <div id="colorPicker2" class="jt-col-md-12" style="height: 38px; line-height: 38px; margin: 0">颜色</div>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">地区：</label>
                <div class="layui-input-block" style="width: 35%!important; margin-left: 0!important; float: left;">
                    <input type="text" name="home" required  lay-verify="required" placeholder="请输入区域" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label" style="width: 25%!important; padding-right: 0">行业标签：</label>
                <div style="width: 75%; float: left;">
                    <?php foreach ($industries as $item) { ?>
                    <label class="layui-form-label" style="width: 20%!important; padding-right: 0; padding-left: 0"><?= $item['industry_name'] ?>：</label>
                    <div class="layui-input-block" style="width: 80%!important; margin-left: 0!important; float: left;">
                        <?php foreach ($item['child'] as $k => $i) { ?>
                        <input type="checkbox" name="industryId[]" value="<?= $i['id'] ?>" title="<?= $i['industry_name'] ?>" <?= $k == 0 ? 'checked' : '' ?>>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--<div class="layui-form-item">
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
            </div>-->
            <div class="layui-form-item">
                <div class="layui-inline jt-display-block">
                    <label class="layui-form-label" style="width: 25%!important; padding-right: 0; float: left;">上传文件：</label>
                    <div style="width: 45%; float: left; padding-left: 2%;" class="layui-form-radio-adjust">
                        <input type="radio" name="media" lay-filter="media" value="1" title="图片" checked>
                        <input type="radio" name="media" lay-filter="media" value="2" title="视频">
                    </div>
                    <button type="button" class="layui-btn jt-background-green" id="upload" style="height: 36px; width: 14%;  float: left; padding: 0">
                        <i class="layui-icon layui-icon-upload-circle"></i>
                    </button>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="jt-input-block-2">
                    <button class="layui-btn jt-background-blue jt-col-md-12 jt-radius-5" lay-submit lay-filter="publish" id="publish">提交发布</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $this->beginBlock("colorPicker"); ?>
    var colorDone = function(res){
        console.log(res);
        var data = $(this).get(0);
        var elem = data['elem'];
        $(elem).prev().val(res);
    }

    layui.use('colorpicker', function(){
        var colorpicker = layui.colorpicker;

        colorpicker.render({
            elem: '#colorPicker'
            ,predefine: true
            ,colors: ['#F00','#0F0','#00F','rgb(255, 69, 0)','rgba(255, 69, 0, 0.5)']
            ,size: 'sm'
            ,done: colorDone
        });
    });

    layui.use('colorpicker', function(){
        var colorpicker = layui.colorpicker;

        colorpicker.render({
            elem: '#colorPicker2'
            ,predefine: true
            ,colors: ['#F00','#0F0','#00F','rgb(255, 69, 0)','rgba(255, 69, 0, 0.5)']
            ,size: 'sm'
            ,done: colorDone
        });
    });

    layui.use('form', function(){
        var form = layui.form;

        form.on("submit(publish)", function(data){
            console.log(data.field);
            $.post(
                '/mobile/upload-video'
                ,data.field
                ,function(data){
                    if (data.IsSuccess) {
                        layer.msg("上传成功！");
                    } else {
                        layer.msg("上传失败！");
                    }
                }
            );
            return false;
        })

        form.render();
    })

    layui.use(['upload', 'form'], function(){
        var upload = layui.upload;
        var form = layui.form;
        var type = 1;

        //执行实例
        var uploadInst = upload.render({
            elem: '#upload' //绑定元素
            ,url: '/mobile/upload-api/' //上传接口
            ,accept: "images|video|audio"
            ,exts: 'png|jpeg|jpg|gif|bmp|mp4|mp3'
            ,size: 10240
            ,auto: false
            ,bindAction: "#publish"
            ,done: function(res){
                //上传完毕回调
                console.log(res);
                if (res.IsSuccess) {
                    layer.msg("上传成功！");
                } else {
                    layer.msg("上传失败！");
                }
            }
            ,error: function(res){
                //请求异常回调
                console.log(res);
                layer.msg("上传错误！");
            }
        });
    });
<?php $this->endBlock(); ?>
<?php $this->registerJs($this->blocks['colorPicker'], View::POS_END); ?>
