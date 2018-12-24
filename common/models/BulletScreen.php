<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%bullet_screen}}".
 *
 * @property string $guid 全局唯一id
 * @property string $liveId 直播id
 * @property string $content 发布内容
 * @property int $creator 发布人
 * @property int $editor 编辑
 * @property int $created_at 发布时间
 * @property int $updated_at 更新时间
 *
 * @property User $creator0
 * @property User $editor0
 * @property Live $live
 */
class BulletScreen extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%bullet_screen}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['liveId'], 'required'],
            [['creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid', 'liveId'], 'string', 'max' => 60],
            [['content'], 'string', 'max' => 255],
            [['guid'], 'unique'],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['editor'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['editor' => 'id']],
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
            'content' => '发布内容',
            'creator' => '发布人',
            'editor' => '编辑',
            'created_at' => '发布时间',
            'updated_at' => '更新时间',
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLive()
    {
        return $this->hasOne(Live::className(), ['guid' => 'liveId']);
    }
}
