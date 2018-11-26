<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/12
 * Time: 上午9:48
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace frontend\controllers;


use yii\web\Controller;

class MobileController extends Controller
{
    public $layout = "mobile_main";

    public $showFooter = false;

    /**
     * 页面顶部标题
     * @var string
     */
    public $title = "";

    /**
     * 菜单折叠图标显示/隐藏
     * @var bool
     */
    public $showFoldIcon = true;

    /**
     * 返回图标显示/隐藏
     * @var bool
     */
    public $showBackIcon = false;

    /**
     * 显示设置图标
     * @var bool
     */
    public $showSetting = false;

    /**
     * 首页
     * @return string
     */
    public function actionIndex (){
        $this->title = "首页";
        return $this->render("index");
    }

    /**
     * 保健品
     * @return string
     */
    public function actionList () {
        $this->title = "药品";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("list");
    }

    /**
     * 编辑个人信息
     * @return string
     */
    public function actionEditPersonalInfo () {
        $this->title = "编辑个人资料";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("personalInfo");
    }

    /**
     * 登录
     * @return string
     */
    public function actionLogin () {
        $this->title = "登录";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("login");
    }

    /**
     * 发现/关注/同行
     * @return string
     */
    public function actionFound () {
        $this->title = "<ul><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><span class='jt-border-bottom-white-3 jt-padding-bottom-5'>关注</span></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-cur'>发现</span></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><span class='jt-border-bottom-white-3 jt-padding-bottom-5'>同行</span></li></ul>";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("found");
    }

    /**
     * 解封申请
     * @return string
     */
    public function actionUnsealApplication () {
        $this->title = "解封申请";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("unsealApplication");
    }

    /**
     * 评论
     * @return string
     */
    public function actionComments () {
        $this->title = "评论";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("comments");
    }

    /**
     * 器械
     * @return string
     */
    public function actionInstruments () {
        $this->title = "器械";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("instruments");
    }

    /**
     * 药品器械展
     * @return string
     */
    public function actionExhibition ($type = 0) {
        $this->title = "第一期展会";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        $title = $type == 0 ? "器械展" : "药品展";
        return $this->render("exhibition", [
            'title' => $title
        ]);
    }

    /**
     * 上传图片/封面/视频
     * @return string
     */
    public function actionUploadVideo () {
        $this->title = "上传视频";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("uploadVideo");
    }

    /**
     * 视频播放&评论
     * @return string
     */
    public function actionPlayVideo () {
        $this->layout = "mobile_noheader";
        return $this->render("playVideo");
    }

    /**
     * 私信列表
     * @return string
     */
    public function actionPrivateMsg () {
        $this->title = "私信";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("privateMsg");
    }

    /**
     * 私信对话
     * @return string
     */
    public function actionPrivateMsgDialog () {
        $this->title = "好医生";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("privateMsgDialog");
    }

    /**
     * 历史展会
     * @return string
     */
    public function actionHistoryExhibition () {
        $this->title = "往期展会";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("historyExhibition");
    }

    /**
     * 我的
     * @return string
     */
    public function actionMy () {
        $this->title = "我的";
        $this->showFoldIcon = true;
        $this->showSetting = true;
        $this->showBackIcon = true;
        return $this->render("my");
    }

    /**
     * 我的粉丝
     * @return string
     */
    public function actionFans () {
        $this->title = "我的粉丝";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("fans");
    }

    /**
     * 我的关注
     * @return string
     */
    public function actionFollow () {
        $this->title = "我的关注";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("follow");
    }

    /**
     * 我的图片视频
     * @return string
     */
    public function actionMedia () {
        $this->title = "我的图片视频";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("media");
    }

    /**
     * 我的直播
     * @return string
     */
    public function actionLive () {
        $this->title = "我的直播";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("live");
    }

    /**
     * 我喜欢
     * @return string
     */
    public function actionLike () {
        $this->title = "我喜欢";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("like");
    }

    /**
     * 我要直播
     * @return string
     */
    public function actionBeginLive () {
        $this->title = "我要直播";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("beginLive");
    }

    /**
     * 现场直播界面
     * @return string
     */
    public function actionLiving () {
        $this->layout = "mobile_noheader";
        return $this->render("living");
    }

    /**
     * 一号馆器械，一号馆药品
     * @param string $room
     * @return string
     */
    public function actionLiveList ($room = "一号馆一类器械") {
        $this->title = $room;
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("liveList");
    }

    /**
     * 眼药水厂家产品区，产品展示
     * @return string
     */
    public function actionProducts () {
        $this->title = "眼药水厂家产品区";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("products");
    }

    /**
     * 我的
     * @return string
     */
    public function actionClose () {
        $this->title = "主播关闭";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("close");
    }

    public function actionAnchorApplication () {
        $this->title = "主播申请";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        return $this->render("anchorApplication");
    }
}