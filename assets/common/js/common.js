/**
 * Created by jt on 2018/11/14.
 */
/**
 * common variables
 */
var t = ".jt-apply-tab";
var a = ".jt-tab-item";
var timer = null;

/**
 * 应用聚焦/当前则加下border-白色3px，否则移除
 * 用class jt-apply-tab识别
 * 必须是以下结构
 * <ul>
 *     <li class="jt-apply-tab">
 *         <span class="jt-cur"></span>
 *     </li>
 * </ul>
 *
 * tab item结构
 * <div class="jt-tab-item">item1</div>
 * <div class="jt-tab-item">item2</div>
 * <div class="jt-tab-item">item3</div>
 */
;(function() {
    $(t).click(function (e) {
        console.log(e);
        console.log($(this).index());
        var index = $(this).index();
        $(this).find("span").addClass("jt-cur").end().siblings().find("span").removeClass("jt-cur");
        $(a).eq(index).removeClass("jt-display-none").siblings(a).addClass("jt-display-none");
    });
    $("#smscode").click(getCode);
    $("#login").click(function (e) {
        $.post(
            '/mobile/login-do',
            $('#loginform').serialize(),
            function (data) {
                console.log(data);
                if (data.IsSuccess) {
                    layer.alert(data.ErrMsg);
                }
            }
        );
    });
    $("#bmsubmit").click(function(){
        var data = $("#bm").serialize();
        console.log(data);
        $.post(
            "/mobile/sign-up",
            data,
            function (data) {
                console.log(data);
                layer.alert(data.ErrMsg);
            }
        );
    });
}())
;function menu() {
    $(".drop-menu").slideToggle(100);
}
;function getCode() {
    var o = this;
    var input = $(o).prev("input");
    var number = input.val();
    var total = 60;
    if (!number) {
        layer.tips("电话号码为空！", input, {
            'tips' : [1, '#000']
        });
        return ;
    } else {
        $(o).unbind("click");
    }
    var url = '/mobile/get-code?number=' + number;

    $.get(
        url,
        function (data) {
            console.log(data);
            if (!data.IsSuccess) {
                layer.alert(data.ErrMsg);
            } else {
                var timer = setInterval(function () {
                    if (total === 0) {
                        $(o).text("获取验证码").css("color", '#000000');
                        $(o).bind("click", getCode);
                        clearInterval(timer)
                    } else {
                        $(o).text(total-- + "s").css("color", '#e1e1e1');
                    }
                }, 1000);
            }
        }
    );
}
;function login(o) {
    $.get(
        '/mobile/login',
        function (data) {
            console.log(data);
        }
    );
}
;function selectIndustry() {
    console.log(8888);
    var form = document.getElementById("selectIndustry");
    form.submit();
}