<?php

namespace common\models;

use Yii;
use common\behaviors\GuidBehavior;

/**
 * This is the model class for table "{{%live_audience}}".
 *
 * @property string $guid 全局唯一id
 * @property string $liveId 直播id
 * @property int $audienceId 观众id
 * @property int $status 状态，0进入房间，1退出房间，2连麦中
 * @property array $userData 用户数据，比如ip，系统环境等
 *
 * @property User $audience
 * @property Live $live
 */
class LiveAudience extends \yii\db\ActiveRecord
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
        return '{{%live_audience}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['liveId', 'audienceId'], 'required'],
            [['audienceId', 'status'], 'integer'],
            [['userData'], 'safe'],
            [['guid', 'liveId'], 'string', 'max' => 60],
            [['guid'], 'unique'],
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
            'audienceId' => '观众id',
            'status' => '状态，0进入房间，1退出房间，2连麦中',
            'userData' => '用户数据，比如ip，系统环境等',
        ];
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
}
