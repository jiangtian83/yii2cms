<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%live_audio_data}}".
 *
 * @property string $guid 全局唯一id
 * @property string $liveAudioId 语音互动id
 * @property string $dataPath 语音流数据存储路径
 * @property int $generateTime 生成时间
 *
 * @property LiveAudio $liveAudio
 */
class LiveAudioData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%live_audio_data}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'liveAudioId'], 'required'],
            [['generateTime'], 'integer'],
            [['guid', 'liveAudioId'], 'string', 'max' => 60],
            [['dataPath'], 'string', 'max' => 100],
            [['guid'], 'unique'],
            [['liveAudioId'], 'exist', 'skipOnError' => true, 'targetClass' => LiveAudio::className(), 'targetAttribute' => ['liveAudioId' => 'guid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'liveAudioId' => '语音互动id',
            'dataPath' => '语音流数据存储路径',
            'generateTime' => '生成时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLiveAudio()
    {
        return $this->hasOne(LiveAudio::className(), ['guid' => 'liveAudioId']);
    }
}
