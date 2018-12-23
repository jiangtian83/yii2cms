<?php

namespace common;
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/11/26
 * Time: 下午10:20
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */
use yii\base\BaseObject;

/**
 * Class Guid
 */
class Guid extends BaseObject
{
    var $valueBeforeMD5;
    var $valueAfterMD5;
    var $Name = 'localhost';
    var $IP = '127.0.0.1';

    private function getLocalHost()
    {
        $this->Name = isset($_ENV["COMPUTERNAME"]) ? $_ENV["COMPUTERNAME"] : $_ENV['HTTP_HOST'];
        $this->IP = $_SERVER["SERVER_ADDR"];
        return strtolower($this->Name . '/' . $this->IP);
    }

    private function nextLong()
    {
        $tmp = rand(0,1) ? '-' : '';
        return $tmp.rand(1000, 9999).rand(1000, 9999).rand(1000, 9999).rand(100, 999).rand(100, 999);
    }

    private function currentTimeMillis()
    {
        list($usec, $sec) = explode(" ", microtime());
        return $sec.substr($usec, 2, 3);
    }

    public function getGuid()
    {
        $address = $this->getLocalHost();
        $this->valueBeforeMD5 = $address . ':' . $this->currentTimeMillis() . ':' . $this->nextLong();
        $this->valueAfterMD5 = md5($this->valueBeforeMD5);

        $raw = strtoupper($this->valueAfterMD5);
        return substr($raw,0,8).'-'.substr($raw,8,4).'-'.substr($raw,12,4).'-'.substr($raw,16,4).'-'.substr($raw,20);
    }
}