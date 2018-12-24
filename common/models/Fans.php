<?php

namespace common\models;

use Yii;
use common\behaviors\GuidBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "{{%fans}}".
 *
 * @property string $guid 全局唯一id
 * @property int $anchorId 主播id
 * @property int $fansId 粉丝id
 * @property int $status 状态，0取消，1关注
 * @property int $created_at 关注时间
 * @property int $updated_at 取关时间
 *
 * @property User $anchor
 * @property User $fans
 */
class Fans extends \yii\db\ActiveRecord
{
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
        return '{{%fans}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anchorId', 'fansId'], 'required'],
            [['anchorId', 'fansId', 'status', 'created_at', 'updated_at'], 'integer'],
            [['guid'], 'string', 'max' => 60],
            [['guid'], 'unique'],
            [['anchorId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['anchorId' => 'id']],
            [['fansId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fansId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'anchorId' => '主播id',
            'fansId' => '粉丝id',
            'status' => '状态，0取消，1关注',
            'created_at' => '关注时间',
            'updated_at' => '取关时间',
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
    public function getFans()
    {
        return $this->hasOne(User::className(), ['id' => 'fansId']);
    }
}
