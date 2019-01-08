<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%socialInfo}}".
 *
 * @property string $guid 全局唯一id
 * @property string $ownerId 所属id
 * @property int $type 类型，0阅读次数，1点赞次数，2分享次数，3收藏/关注次数
 */
class SocialInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%socialInfo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'ownerId'], 'required'],
            [['type'], 'integer'],
            [['guid', 'ownerId', 'source_table'], 'string', 'max' => 60],
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
            'type' => '类型，0阅读次数，1点赞次数，2分享次数，3收藏/关注次数',
            'source_table' => '关联表'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function actionGetOperator () {
        return $this->hasOne(User::className(), ['id' => 'operator']);
    }
}
