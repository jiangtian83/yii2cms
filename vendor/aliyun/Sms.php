<?php
/*
 * 此文件用于验证短信服务API接口，供开发时参考
 * 执行验证前请确保文件为utf-8编码，并替换相应参数为您自己的信息，并取消相关调用的注释
 * 建议验证前先执行Test.php验证PHP环境
 *
 * 2017/11/30
 */

namespace Aliyun;

use yii;

class Sms
{
    public static $accessKey = "BHlpI99OgTuxQhNa";

    public static $accessKeySecret = "W61qPv6SP3oeQ05MHWpVC1kTNsC8x8";

    public static $number = '18310425848';

    public static $signName = "By Tian.J";

    public static $tempCode = "SMS_0000001";

    private static function generate_code($length = 4) {
        $session = Yii::$app->session;
        $session->open();
        $result = $session->get(static::$number);
        if (empty($result) || $result['expire_time'] > time()) {
            $code = rand(pow(10, ($length - 1)), pow(10, $length) - 1);
            $array = [
                'code' => $code,
                'expire_time' => time() + 300
            ];
            $key = static::$number;
            try {
                $session->set(md5($key), $array);
            } catch (yii\base\Exception $e) {
                return $e->getMessage();
            }
        } else {
            $code = $result['code'];
        }

        return $code;
    }

    /**
     * 发送短信
     */
    public static function sendSms()
    {

        $params = array();

        // *** 需用户填写部分 ***
        // fixme 必填：是否启用https
        $security = false;

        // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
        $accessKeyId = static::$accessKey;
        $accessKeySecret = static::$accessKeySecret;

        // fixme 必填: 短信接收号码
        $params["PhoneNumbers"] = static::$number;

        // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $params["SignName"] = static::$signName;

        // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $params["TemplateCode"] = static::$tempCode;

        // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
        $params['TemplateParam'] = Array(
            "code" => static::generate_code(6)
        );

        // fixme 可选: 设置发送短信流水号
        $params['OutId'] = "12345";

        // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
        $params['SmsUpExtendCode'] = "1234567";

        // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
        if (!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }


        // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
        $helper = new SignatureHelper();

        // 此处可能会抛出异常，注意catch
        $content = $helper->request(
            $accessKeyId,
            $accessKeySecret,
            "dysmsapi.aliyuncs.com",
            array_merge($params, array(
                "RegionId" => "cn-hangzhou",
                "Action" => "SendSms",
                "Version" => "2017-05-25",
            )),
            $security
        );

        return $content;
    }
}