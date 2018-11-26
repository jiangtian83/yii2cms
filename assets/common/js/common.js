/**
 * Created by jt on 2018/11/14.
 */
/**
 * common variables
 */
var t = ".jt-apply-tab";
var a = ".jt-tab-item";

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
}())
