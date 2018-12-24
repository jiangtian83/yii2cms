<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2018/12/23
 * Time: 下午2:14
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use common\behaviors\GuidBehavior;

class BaseModel extends ActiveRecord
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'creator',
                'updatedByAttribute' => 'editor'
            ],
            [
                'class' => GuidBehavior::class
            ],
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('UNIX_TIMESTAMP()')
            ]
        ]);
    }
}