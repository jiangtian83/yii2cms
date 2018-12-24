<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%live}}".
 *
 * @property string $guid 全局唯一id
 * @property int $anchorId 主播id
 * @property string $theme 直播主题
 * @property int $audienceNum 观众人数
 * @property string $exhibitionCenterId 展馆id
 * @property string $liveApi 直播视频流api
 * @property int $type 直播类型，0普通直播，1展会直播
 * @property int $rank 排序
 * @property int $isActive 是否激活
 * @property int $isDeleted 是否删除
 * @property int $creator 发布人
 * @property int $editor 编辑
 * @property int $created_at 发布时间
 * @property int $updated_at 更新时间
 *
 * @property User $anchor
 * @property ExhibitionCenter $exhibitionCenter
 * @property User $creator0
 * @property User $editor0
 * @property LiveData[] $liveDatas
 */
class Live extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%live}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['guid'], 'required'],
            [['anchorId', 'audienceNum', 'type', 'rank', 'isActive', 'isDeleted', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
            [['guid', 'exhibitionCenterId', 'liveApi'], 'string', 'max' => 60],
            [['theme'], 'string', 'max' => 100],
            [['guid'], 'unique'],
            [['anchorId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['anchorId' => 'id']],
            [['exhibitionCenterId'], 'exist', 'skipOnError' => true, 'targetClass' => ExhibitionCenter::className(), 'targetAttribute' => ['exhibitionCenterId' => 'guid']],
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
            'theme' => '直播主题',
            'audienceNum' => '观众人数',
            'exhibitionCenterId' => '展馆id',
            'liveApi' => '直播视频流api',
            'type' => '直播类型，0普通直播，1展会直播',
            'rank' => '排序',
            'isActive' => '是否激活',
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
    public function getAnchor()
    {
        return $this->hasOne(User::className(), ['id' => 'anchorId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExhibitionCenter()
    {
        return $this->hasOne(ExhibitionCenter::className(), ['guid' => 'exhibitionCenterId']);
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
    public function getLiveDatas()
    {
        return $this->hasMany(LiveData::className(), ['liveId' => 'guid']);
    }
}
