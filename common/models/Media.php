<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%media}}".
 *
 * @property string $guid 全局唯一id
 * @property string $ownerId 所属id
 * @property int $type 媒体类型，0图片，1视频
 * @property string $path 媒体路径
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%media}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'ownerId', 'path'], 'required'],
            [['type'], 'integer'],
            [['guid', 'ownerId'], 'string', 'max' => 60],
            [['path'], 'string', 'max' => 255],
            [['guid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'ownerId' => '所属id',
            'type' => '媒体类型，0图片，1视频',
            'path' => '媒体路径',
        ];
    }
}
