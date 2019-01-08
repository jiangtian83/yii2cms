<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%live_data}}".
 *
 * @property string $guid 全局唯一id
 * @property string $liveId 直播id
 * @property string $dataPath 视频流数据存储路径
 * @property string $face 直播封面路径
 * @property int $generateTime 生成时间
 *
 * @property Live $live
 */
class LiveData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%live_data}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'liveId'], 'required'],
            [['generateTime'], 'integer'],
            [['guid', 'liveId'], 'string', 'max' => 60],
            [['dataPath', 'face'], 'string', 'max' => 100],
            [['guid'], 'unique'],
            [['liveId'], 'exist', 'skipOnError' => true, 'targetClass' => Live::className(), 'targetAttribute' => ['liveId' => 'guid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'liveId' => '直播id',
            'dataPath' => '视频流数据存储路径',
            'face' => '直播封面路径',
            'generateTime' => '生成时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLive()
    {
        return $this->hasOne(Live::className(), ['guid' => 'liveId']);
    }
}
