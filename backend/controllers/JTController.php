<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/27
 * Time: 下午10:09
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace backend\controllers;


use yii\web\Controller;

class JTController extends Controller
{
    public function actionMiao() {
        return $this->render('miao');
    }
}