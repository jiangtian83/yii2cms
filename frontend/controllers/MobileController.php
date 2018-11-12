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

    public function actionIndex(){
        return $this->render("index");
    }
}