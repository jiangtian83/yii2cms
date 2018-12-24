<?php

namespace common\models;

use Yii;
use rbac\models\User;

/**
 * This is the model class for table "{{%deblocking}}".
 *
 * @property string $guid 全局唯一id
 * @property int $anchorId 主播id
 * @property string $reason 申请解封理由
 * @property int $isDeblocking 是否同意解封
 * @property int $creator 处理人id
 * @property int $editor 编辑
 * @property int $created_at 发布时间
 * @property int $updated_at 更新时间
 *
 * @property User $anchor
 * @property User $creator0
 * @property User $editor0
 */
class Deblocking extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%deblocking}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anchorId', 'reason'], 'required'],
            [['anchorId', 'isDeblocking', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid'], 'string', 'max' => 60],
            [['reason'], 'string', 'max' => 255],
            [['guid'], 'unique'],
            [['anchorId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['anchorId' => 'id']],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['editor'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['editor' => 'id']],
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
            'reason' => '申请解封理由',
            'isDeblocking' => '是否同意解封',
            'creator' => '处理人id',
            'editor' => '编辑',
            'created_at' => '发布时间',
            'updated_at' => '更新时间',
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
    public function getCreator0()
    {
        return $this->hasOne(User::className(), ['id' => 'creator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEditor0()
    {
        return $this->hasOne(User::className(), ['id' => 'editor']);
    }
}
