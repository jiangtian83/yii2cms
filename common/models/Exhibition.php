<?php

namespace common\models;

use Yii;
use rbac\models\User;

/**
 * This is the model class for table "{{%exhibition}}".
 *
 * @property string $guid 全局唯一id
 * @property int $period 展会期数
 * @property string $name 展会名称
 * @property string $summary 展会简介
 * @property int $industryId 行业id
 * @property string $qualification 参展资格
 * @property string $place 展会地点
 * @property string $contents 图文详情
 * @property string $duration 持续期
 * @property string $sponsor 主办方
 * @property int $isActive 是否开启
 * @property int $exhibitorsNum 参展企业数
 * @property int $isDeleted 是否删除
 * @property int $creator 发布人
 * @property int $editor 编辑
 * @property int $created_at 发布时间
 * @property int $updated_at 更新时间
 *
 * @property User $creator0
 * @property User $editor0
 * @property Industry $industry
 * @property ExhibitionSignUp[] $exhibitionSignUps
 */
class Exhibition extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%exhibition}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['period', 'name', 'industryId', 'place', 'duration'], 'required'],
            [['period', 'industryId', 'isActive', 'exhibitorsNum', 'isDeleted', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid'], 'string', 'max' => 60],
            [['name', 'summary', 'qualification'], 'string', 'max' => 255],
            [['place', 'duration', 'sponsor'], 'string', 'max' => 100],
            [['contents'], 'string', 'max' => 2000],
            [['guid'], 'unique'],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['editor'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['editor' => 'id']],
            [['industryId'], 'exist', 'skipOnError' => true, 'targetClass' => Industry::className(), 'targetAttribute' => ['industryId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => '全局唯一id',
            'period' => '展会期数',
            'name' => '展会名称',
            'summary' => '展会简介',
            'industryId' => '行业id',
            'qualification' => '参展资格',
            'place' => '展会地点',
            'contents' => '图文详情',
            'duration' => '持续期',
            'sponsor' => '主办方',
            'isActive' => '是否开启',
            'exhibitorsNum' => '参展企业数',
            'isDeleted' => '是否删除',
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
    public function getIndustry()
    {
        return $this->hasOne(Industry::className(), ['id' => 'industryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExhibitionSignUps()
    {
        return $this->hasMany(ExhibitionSignUp::className(), ['exhibitionId' => 'guid']);
    }
}
