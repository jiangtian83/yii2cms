<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use common\behaviors\GuidBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%exhibition_sign_up}}".
 *
 * @property string $guid 全局唯一id
 * @property string $exhibitionId 展会id
 * @property string $orginazationName 报名厂家
 * @property string $contacts 联系人
 * @property string $telephone 联系电话
 * @property int $isDeletd 是否删除
 *
 * @property Exhibition $exhibition
 */
class ExhibitionSignUp extends ActiveRecord
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
                    ActiveRecord::EVENT_BEFORE_INSERT => ['signUpTime'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['signUpTime'],
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
        return '{{%exhibition_sign_up}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exhibitionId', 'orginazationName', 'contacts', 'telephone'], 'required', 'message' => '{attribute}不能为空！'],
            [['isDeleted'], 'integer'],
            [['guid', 'exhibitionId', 'contacts'], 'string', 'max' => 60],
            [['orginazationName'], 'string', 'max' => 100],
            [['telephone'], 'string', 'max' => 11],
            [['guid', 'telephone'], 'unique', 'message' => '{attribute}已经存在！'],
            [['exhibitionId'], 'exist', 'skipOnError' => true, 'targetClass' => Exhibition::className(), 'targetAttribute' => ['exhibitionId' => 'guid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'exhibitionId' => '展会id',
            'orginazationName' => '报名厂家',
            'contacts' => '联系人',
            'telephone' => '联系电话',
            'isDeleted' => '是否删除',
            'signUpTime' => '报名时间'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExhibition()
    {
        return $this->hasOne(Exhibition::className(), ['guid' => 'exhibitionId']);
    }
}
