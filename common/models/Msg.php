<?php

namespace common\models;

use Yii;
use common\behaviors\GuidBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "{{%msg}}".
 *
 * @property string $guid 全局唯一id
 * @property int $ownerId 消息宿主
 * @property int $senderId 消息发送人
 * @property string $scene 消息场景
 * @property string $content 消息内容
 * @property int $created_at 发送时间
 *
 * @property User $sender
 */
class Msg extends \yii\db\ActiveRecord
{
    public const MSG_SCENE_PRIVATE = '私信';
    public const MSG_SCENE_LIVE = '直播';
    public const MSG_SCENE_COMMENT = '评论';

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
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

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%msg}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'ownerId', 'senderId', 'content', 'created_at'], 'required'],
            [['senderId', 'created_at'], 'integer'],
            [['scene'], 'string'],
            [['guid', 'ownerId'], 'string', 'max' => 60],
            [['content'], 'string', 'max' => 1000],
            [['guid'], 'unique'],
            [['senderId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['senderId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'ownerId' => '消息宿主',
            'senderId' => '消息发送人',
            'scene' => '消息场景',
            'content' => '消息内容',
            'created_at' => '发送时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(User::className(), ['id' => 'senderId']);
    }
}
