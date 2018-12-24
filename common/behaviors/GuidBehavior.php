<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/12/23
 * Time: 下午9:17
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace common\behaviors;


use common\Guid;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

class GuidBehavior extends AttributeBehavior
{
    public $attributes = [
          ActiveRecord::EVENT_BEFORE_INSERT => ['guid']
    ];

    /**
     * 获取guid
     * @param \yii\base\Event $event
     * @return mixed|string
     */
    public function getValue($event)
    {
        if ($this->value === null) {
            $guid = new Guid();
            return $guid->getGuid();
        }

        return parent::getValue($event);
    }
}