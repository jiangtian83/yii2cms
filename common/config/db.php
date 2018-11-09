<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/9
 * Time: 下午11:51
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

if (YII_ENV == 'dev') {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=exhibition',
        'username' => 'root',
        'password' => 'U8)(*&ab3',
        'charset' => 'utf8',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=gather',
        'username' => 'gather',
        'password' => 'gather(!2',
        'charset' => 'utf8',
    ];
}