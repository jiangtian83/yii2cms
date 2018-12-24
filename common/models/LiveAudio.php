<?php

namespace common\models;

use Yii;
use common\behaviors\GuidBehavior;

/**
 * This is the model class for table "{{%live_audio}}".
 *
 * @property string $guid 全局唯一id
 * @property string $liveId 直播id
 * @property int $anchorId 主播id
 * @property int $audienceId 连麦者id
 * @property string $streamApi 语音流api
 * @property int $status 连麦状态，0接通中，1通话中，2已断开
 *
 * @property User $anchor
 * @property User $audience
 * @property Live $live
 * @property LiveAudioData[] $liveAudioDatas
 */
class LiveAudio extends \yii\db\ActiveRecord
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
        return '{{%live_audio}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['liveId', 'audienceId'], 'required'],
            [['anchorId', 'audienceId', 'status'], 'integer'],
            [['guid', 'liveId'], 'string', 'max' => 60],
            [['streamApi'], 'string', 'max' => 100],
            [['guid'], 'unique'],
            [['anchorId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['anchorId' => 'id']],
            [['audienceId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['audienceId' => 'id']],
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
            'anchorId' => '主播id',
            'audienceId' => '连麦者id',
            'streamApi' => '语音流api',
            'status' => '连麦状态，0接通中，1通话中，2已断开',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnchor()
    {
        return $this->hasOne(User::className(), ['id' => 'anchorId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAudience()
    {
        return $this->hasOne(User::className(), ['id' => 'audienceId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLive()
    {
        return $this->hasOne(Live::className(), ['guid' => 'liveId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLiveAudioDatas()
    {
        return $this->hasMany(LiveAudioData::className(), ['liveAudioId' => 'guid']);
    }
}
