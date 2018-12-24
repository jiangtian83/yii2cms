<?php

namespace common\models;

use Yii;
use rbac\models\User;

/**
 * This is the model class for table "{{%application}}".
 *
 * @property string $guid 全局唯一id
 * @property int $userId 用户id
 * @property string $realName 真实姓名
 * @property string $orginazationName 厂家名称
 * @property string $address 地址
 * @property int $passStatus 审核通过/不通过
 * @property string $suggestions 处理意见
 * @property int $creator 处理人id
 * @property int $editor 编辑
 * @property int $created_at 申请时间
 * @property int $updated_at 处理时间
 *
 * @property User $user
 * @property User $creator0
 * @property User $editor0
 */
class Application extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%application}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'realName', 'orginazationName', 'address'], 'required'],
            [['userId', 'passStatus', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid', 'realName'], 'string', 'max' => 60],
            [['orginazationName', 'address'], 'string', 'max' => 100],
            [['suggestions'], 'string', 'max' => 255],
            [['guid'], 'unique'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
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
            'userId' => '用户id',
            'realName' => '真实姓名',
            'orginazationName' => '厂家名称',
            'address' => '地址',
            'passStatus' => '审核通过/不通过',
            'suggestions' => '处理意见',
            'creator' => '处理人id',
            'editor' => '编辑',
            'created_at' => '申请时间',
            'updated_at' => '处理时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
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
