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

use Aliyun\Sms;
use common\models\Exhibition;
use common\models\ExhibitionCenter;
use common\models\ExhibitionSignUp;
use common\models\Fans;
use common\models\Industry;
use common\models\Live;
use common\models\LiveData;
use common\models\Msg;
use common\models\Products;
use common\models\SocialInfo;
use rbac\models\User;
use yii;
use common\Guid;
use yii\web\Controller;
use yii\web\Response;

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

    public $titleUp = false;

    /**
     * 首页
     * @return string
     */
    public function actionIndex (){
        $this->title = "首页";

        $industry = Industry::find()->where(['pid' => 0])->asArray()->limit(2)->all();
        $industries = [];

        foreach ($industry as $key => $item) {
            $subIndustry = Industry::find()->where(['pid' => $item['id']])->asArray()->all();
            if (!empty($subIndustry)) {
                $industries[$key] = array_merge([$item], $subIndustry);
            }
        }

        return $this->render("index", [
            'industries' => $industries
        ]);
    }

    /**
     * 保健品
     * @return string
     */
    public function actionList () {
        $this->showFoldIcon = false;
        $this->showBackIcon = true;

        $this->redirectToHome();

        $data = Yii::$app->request->get();

        if (empty($data) || empty($data['id'])) return $this->redirect("/mobile/index");

        $title = Industry::findOne(['id' => $data['id']]);

        if (empty($title)) $this->redirect("/mobile/index");
        $this->title = $title->industry_name;

        // 顶级行业，pid为0，其他不带pid参数
        if (isset($data['pid'])) {
            $ids = Industry::find()->where(['pid' => $data['id']])->select('id')->all();
            $ids = yii\helpers\ArrayHelper::getColumn($ids, 'id');
            $products = Products::find()->where(['isOnSale' => 1, 'isPassed' => 1, 'isDeleted' => 0])->andWhere(['in', 'industryId', $ids])->asArray()->all();
        } else {
            $products = Products::find()->where(['industryId' => $data['id'], 'isOnSale' => 1, 'isPassed' => 1, 'isDeleted' => 0])->asArray()->all();
        }

        if (empty($products)) $this->redirect("/mobile/index");

        if (isset($data['pid'])) {
            $menu = Industry::find()->where(['pid' => $data['id']])->all();
        } else {
            $son = Industry::findOne(['id' => $data['id']]);
            if (empty($son)) {
                return $this->redirect("/mobile/index");
            } else {
                $menu = Industry::find()->where(['pid' => $son->pid])->all();
            }
        }

        $current = null;
        if (empty ($menu)) $this->redirect('/mobile/index');
        else {
            $current = isset($data['pid']) ? $menu[0]->id : $data['id'];
        }

        $menu = yii\helpers\ArrayHelper::map($menu, 'id', 'industry_name');

        return $this->render("list", [
            'current' => $current,
            'menu' => $menu,
            'products' => $products
        ]);
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
    public function actionFound ($type = 'found') {
        $current = '';
        $list = [];
        switch ($type) {
            case 'follow':
                $current = 'follow';
                $this->title = "<ul><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=follow'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-cur jt-font-size-24'>关注</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=found'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>发现</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=counterparts'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>同行</span></a></li></ul>";
                // 最新10条视频
                $social = SocialInfo::find()
                    ->alias("s")
                    ->select("t_products.*,t_socialInfo.*")
                    ->where(['s.type' => 3])
                    ->join("INNER JOIN", "t_products", "t_products.id=s.ownerId")
                    ->join("INNER JOIN", "t_media m", "t_products.id=m.ownerId and source_type=1 and source_table='t_products'")
                    ->limit(5)
                    ->asArray()
                    ->all();

                // 最新10条直播
                $live = SocialInfo::find()
                    ->alias("s")
                    ->where(['s.type' => 3])
                    ->join("INNER JOIN", "t_live l", "l.guid=s.ownerId")
                    ->join("INNER JOIN", "t_live_data d", "l.guid=d.liveId")
                    ->limit(5)
                    ->asArray()
                    ->all();

                $list = ksort(yii\helpers\ArrayHelper::index(array_merge($social, $live), null, "created_at"));
                var_dump($list);exit();

                break;
            case 'found':
                $current = 'found';
                $this->title = "<ul><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=follow'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>关注</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=found'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-cur jt-font-size-24'>发现</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=counterparts'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>同行</span></a></li></ul>";
                break;
            case 'counterparts':
                $current = 'counterparts';
                $this->title = "<ul><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=follow'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>关注</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=found'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-font-size-24'>发现</span></a></li><li class='jt-display-inline-block jt-col-md-3 jt-color-white jt-cursor-pointer jt-apply-tab'><a href='/mobile/found?type=counterparts'><span class='jt-border-bottom-white-3 jt-padding-bottom-5 jt-cur jt-font-size-24'>同行</span></a></li></ul>";
        }

        $this->showFoldIcon = false;
        $this->showBackIcon = true;
        $this->titleUp = true;
        return $this->render("found", [
            'current' => $current,
            'list' => $list
        ]);
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
    public function actionExhibition () {
        $id = Yii::$app->request->get("id");
        $industry = Industry::findOne($id);
        if (empty($industry)) {
            return $this->redirect("/mobile/index");
        } else {
            $exhibition = Exhibition::find()->orderBy('period DESC')->one();
            if (empty($exhibition)) {
                return $this->redirect("/mobile/index");
            }
            $this->title = "第" . $this->numToWord($exhibition->period) . "期展会";
            $this->showFoldIcon = false;
            $this->showBackIcon = true;
            $title = $industry->industry_name . "展";
            $model = ExhibitionCenter::find()->where(['exhibitionId' => $exhibition->guid, 'industryId' => $id])->orderBy('created_at ASC')->limit(10)->all();
            if (empty($model)) {
                return $this->redirect("/mobile/index");
            }

            return $this->render("exhibition", [
                'title' => $title,
                'model' => $model
            ]);
        }
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

        // 获取用户详情
        $uid = Yii::$app->request->cookies->getValue('u');
        $user = \common\models\User::findOne($uid ? $uid : 0);
        if ($user) {
            $msg = Msg::find()->leftJoin('t_user', 't_msg.senderId=t_user.id')->where(['ownerId' => $uid, 'scene' => Msg::MSG_SCENE_PRIVATE])->select('t_user.id,t_user.nickname,t_user.head_pic,t_msg.*')->orderBy("created_at desc")->limit(8)->asArray()->all();
        } else {
            return $this->redirect('index');
        }

        return $this->render("privateMsg", [
            'msg' => $msg
        ]);
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
        $this->redirectToHome();
        $this->title = "往期展会";
        $this->showFoldIcon = false;
        $this->showBackIcon = true;

        $new = Exhibition::find()->where(['period' => Exhibition::find()->max("period"), 'isActive' => 1, 'isDeleted' => 0])->asArray()->one();
        $period = $new['period'];
        $new['period'] = $this->numToWord($period);
        $industry = Industry::findOne(['id' => $new['industryId']]);
        $new['industryName'] = $industry ? $industry['industry_name'] : '';
        $history = Exhibition::find()->where(['<>', 'period', $period])->andWhere(['isActive' => 1, 'isDeleted' => 0])->orderBy('period desc')->limit(5)->asArray()->all();
        $history_array = array_map(function($m){
            $m['period'] = $this->numToWord($m['period']);
            $industry = Industry::findOne(['id' => $m['industryId']]);
            $m['industryName'] = $industry ? $industry['industry_name'] : '';
            return $m;
        }, $history);

        return $this->render("historyExhibition", [
            'new' => $new,
            'history' => $history_array
        ]);
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

        // 获取用户详情
        $uid = Yii::$app->request->cookies->getValue('u');
        $user = \common\models\User::findOne($uid ? $uid : 0);
        $result = [];
        if ($user) {
            $result['id'] = $uid;
            $result['nickname'] = $user->nickname;
            $result['avatar'] = $user->head_pic;
        } else {
            return $this->redirect('index');
        }

        $result['fans'] = Fans::find()->where(['anchorId' => $uid, 'status' => 1])->count();
        $result['follows'] = Fans::find()->where(['fansId' => $uid, 'status' => 1])->count();
        $result['likes'] = rand(0, 999); // todo,待确认

        return $this->render("my", $result);
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

    /**
     * 把数字1-1亿换成汉字表述，如：123->一百二十三
     * @param [num] $num [数字]
     * @return [string] [string]
     */
    private function numToWord($num)
    {
        $chiNum = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九');
        $chiUni = array('', '十', '百', '千', '万', '亿', '十', '百', '千');

        $num_str = (string)$num;

        $count = strlen($num_str);
        $last_flag = true; //上一个 是否为0
        $zero_flag = true; //是否第一个
        $temp_num = null; //临时数字

        $chiStr = '';//拼接结果
        if ($count == 2) {//两位数
            $temp_num = $num_str[0];
            $chiStr = $temp_num == 1 ? $chiUni[1] : $chiNum[$temp_num] . $chiUni[1];
            $temp_num = $num_str[1];
            $chiStr .= $temp_num == 0 ? '' : $chiNum[$temp_num];
        } else if ($count > 2) {
            $index = 0;
            for ($i = $count - 1; $i >= 0; $i--) {
                $temp_num = $num_str[$i];
                if ($temp_num == 0) {
                    if (!$zero_flag && !$last_flag) {
                        $chiStr = $chiNum[$temp_num] . $chiStr;
                        $last_flag = true;
                    }
                } else {
                    $chiStr = $chiNum[$temp_num] . $chiUni[$index % 9] . $chiStr;
                    $zero_flag = false;
                    $last_flag = false;
                }
                $index++;
            }
        } else {
            $chiStr = $chiNum[$num_str[0]];
        }
        return $chiStr;
    }

    /**
     * 发送验证码
     * @return array
     */
    public function actionGetCode () {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $number = Yii::$app->request->get("number");

        if (empty($number)) {
            return ['IsSuccess' => 0, 'ErrMsg' => '电话号码为空！'];
        }

        $session = Yii::$app->session;
        $md5 = md5($number);
        $result = $session->get($md5);
        if (!empty($result) && $session[$md5]['expire_time'] > time()) {
            return ['IsSuccess' => 0, 'ErrMsg' => '5分钟内请勿重复获取验证码！', 'Data' => $result['code']];
        } else {
            try {
                Sms::$number = $number;
                Sms::$signName = "看看展会";
                Sms::$tempCode = "SMS_153993364";
                $code = Sms::sendSms();
            } catch (\HttpRequestException $exception) {
                return ['IsSuccess' => 0, 'ErrMsg' => '请求短信API失败！'];
            }

            return ['IsSuccess' => 1, 'ErrMsg' => '', 'Data' => $code];
        }
    }

    /**
     * 执行登录
     */
    public function actionLoginDo () {
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $data = Yii::$app->request->post();
        $session = Yii::$app->session;
        $code = $session->get(md5($data['number']));
        if (!empty($code) && $code['expire_time'] > time() && $data['code'] == $code['code']) {
            $user = \common\models\User::find()->where(['mobile' => $data['number']])->one();
            $expire = time() + 300;
            if ($user) {
                $user->generateAccessToken($expire);
                $user->update(false);
                // return ['IsSuccess' => 1, 'ErrMsg' => '登录成功！'];
                $session->set(md5($user->id), [
                    'expire_time' => $expire
                ]);
                $cookies = $response->cookies;

                $cookies->add(new \yii\web\Cookie([
                    'name' => 'u',
                    'value' => $user->id,
                    'expire'=> $expire
                ]));
                return $this->redirect("/mobile/index");
            } else {
                $user = new \common\models\User();
                $user->generateAuthKey();
                $user->password_hash = Yii::$app->security->generatePasswordHash($data['number']);
                $user->username = $user->nickname = strtoupper(md5($data['number']));
                $user->head_pic = "https://resources.alilinet.com/20170609/caec0ef6f07036203d555810fd81c75a.jpg";
                $user->email = $data['number'] . "@qq.com";
                $user->status = 10;
                $user->r_id = 6;
                $user->created_at = $user->last_login_date = $user->updated_at =  time();
                $ip = Yii::$app->request->getUserIP();
                if ($ip === "127.0.0.1") {$adress = 'localhost';}
                else {
                    try {
                        $adress = $this->getCity($ip);
                        $adress = $adress['country'].$adress['area'].$adress['region'].$adress['city'];
                    } catch (yii\base\Exception $e) {
                        $adress = "未知";
                    }
                }
                $user->created_address = $user->last_login_address = $adress;
                $user->mobile = $data['number'];
                $user->created_ip = $user->last_login_ip = $ip;
                $user->integral = 0;
                $user->balance = 0;
                if ($user->save()) {
                    $user->generateAccessToken($expire);
                    $user->update(false);
                    $session->set(md5($user->id), [
                        'expire_time' => $expire
                    ]);

                    $cookies = $response->cookies;

                    $cookies->add(new \yii\web\Cookie([
                        'name' => 'u',
                        'value' => $user->id,
                        'expire'=> $expire
                    ]));

                    return $this->redirect("/mobile/index");
                    // return ['IsSuccess' => 1, 'ErrMsg' => '注册成功！'];
                } else {
                    return ['IsSuccess' => 0, 'ErrMsg' => '注册失败！' . json_encode($user->getErrors(), JSON_UNESCAPED_UNICODE)];
                }
            }
        } else {
            return ['IsSuccess' => 1, 'ErrMsg' => '验证码不正确！'];
        }
    }

    /**
     * 退出登录
     * @return Response
     */
    public function actionLogout () {
        $user = Yii::$app->request->cookies->get("u");

        if (empty($user)) return $this->redirect("/mobile/index");

        Yii::$app->session->remove(md5($user));
        Yii::$app->response->cookies->remove($user);
        return $this->redirect("/mobile/index");
    }

    private function redirectToHome () {
        $user = Yii::$app->request->cookies->get("u");
        if (empty($user)) {
            return $this->redirect("/mobile/index");
        }
    }

    /**
     * 根据ip获取城市
     * @param string $ip
     * @return array|bool
     */
    private function getCity($ip = '')//获取地区
    {
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip=" . $ip;//淘宝接口需要填写ip
        $ip = json_decode(file_get_contents($url, false));
        if ((string) $ip->code == '1'){
            return false;
        }
        $data = (array) $ip->data;

        return $data;
    }

    /**
     * 参展报名
     * @return array|Response
     */
    public function actionSignUp () {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $data = Yii::$app->request->post();
        if (empty($data) || !isset($data['exhibitionId']) || !isset($data['orginazationName']) || !isset($data['contacts']) || !isset($data['telephone'])) {
            return ['IsSuccess' => 0, 'ErrMsg' => '报名厂家、联系人或联系电话不能为空！'];
        } else {
            $signup = new ExhibitionSignUp();
            $data['isDeleted'] = 0;
            $result['ExhibitionSignUp'] = $data;
            if(!$signup->load($result) || !$signup->save()) {
                return ['IsSuccess' => 0, 'ErrMsg' => '提交报名失败。' . $this->getModelError($signup)];
            } else {
                return $this->redirect("/mobile/index");
            }
        }
    }

    /**
     * @param $model yii\db\ActiveRecord
     * @return bool|mixed
     */
    private function getModelError($model) {
        $errors = $model->getErrors();    //得到所有的错误信息
        if(!is_array($errors)){
            return true;
        }

        $firstError = array_shift($errors);
        if(!is_array($firstError)) {
            return true;
        }
        return array_shift($firstError);
    }

    /**
     * 测试
     */
    public function actionTest(){
        $guid = new Guid();
        echo $guid->getGuid();
    }
}