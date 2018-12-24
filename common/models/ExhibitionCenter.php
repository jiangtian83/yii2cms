<?php

namespace common\models;

use Yii;
use rbac\models\User;

/**
 * This is the model class for table "{{%exhibition_center}}".
 *
 * @property string $guid 全局唯一id
 * @property string $exhibitionId 展会id
 * @property string $centerName 展馆名称
 * @property string $summary 展馆简介
 * @property int $industryId 行业id
 * @property int $roomLimit 直播间上限
 * @property int $isDeleted 是否删除
 * @property int $creator 发布人
 * @property int $editor 编辑
 * @property int $created_at 发布时间
 * @property int $updated_at 更新时间
 *
 * @property \rbac\models\User $creator0
 * @property \rbac\models\User $editor0
 * @property Exhibition $exhibition
 */
class ExhibitionCenter extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%exhibition_center}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exhibitionId', 'centerName', 'industryId'], 'required'],
            [['industryId', 'roomLimit', 'isDeleted', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid', 'exhibitionId'], 'string', 'max' => 60],
            [['centerName'], 'string', 'max' => 100],
            [['summary'], 'string', 'max' => 255],
            [['guid'], 'unique'],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['editor'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['editor' => 'id']],
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
            'centerName' => '展馆名称',
            'summary' => '展馆简介',
            'industryId' => '行业id',
            'roomLimit' => '直播间上限',
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
    public function getExhibition()
    {
        return $this->hasOne(Exhibition::className(), ['guid' => 'exhibitionId']);
    }
}
