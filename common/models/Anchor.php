<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%anchor}}".
 *
 * @property string $guid 全局唯一id
 * @property string $applicationId 申请id
 * @property int $fansNum 粉丝数
 * @property int $isDeblocking 是否封禁
 *
 * @property Application $application
 */
class Anchor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%anchor}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['applicationId'], 'required'],
            [['fansNum', 'isDeblocking'], 'integer'],
            [['guid', 'applicationId'], 'string', 'max' => 60],
            [['guid'], 'unique'],
            [['applicationId'], 'exist', 'skipOnError' => true, 'targetClass' => Application::className(), 'targetAttribute' => ['applicationId' => 'guid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'applicationId' => '申请id',
            'fansNum' => '粉丝数',
            'isDeblocking' => '是否封禁',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplication()
    {
        return $this->hasOne(Application::className(), ['guid' => 'applicationId']);
    }
}
