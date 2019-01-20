<?php

namespace common\models;

use Yii;
use common\behaviors\GuidBehavior;

/**
 * This is the model class for table "{{%media}}".
 *
 * @property string $guid 全局唯一id
 * @property string $ownerId 所属id
 * @property int $type 媒体类型，0图片，1视频
 * @property string $path 媒体路径
 * @property string $source_table 来源表
 */
class Media extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            [
                'class' => GuidBehavior::class
            ]
        ]);
    }

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
            [['path'], 'required'],
            [['type'], 'integer'],
            [['guid', 'ownerId', 'source_table'], 'string', 'max' => 60],
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
            'source_table' => '来源表'
        ];
    }
}
