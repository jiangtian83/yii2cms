<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property string $guid 全局唯一id
 * @property string $title 产品名称
 * @property string $summary 产品简介
 * @property string $home 生产地
 * @property string $industryId 所属行业/行业标签
 * @property int $isRecommend 是否推荐
 * @property int $isPassed 是否审核通过
 * @property int $isOnSale 上下架
 * @property int $titleFontSize 字号
 * @property string $titleFontColor 字体颜色
 * @property int $descriptionSize 简介字号
 * @property string $descriptionColor 简介颜色
 * @property int $creator 发布人
 * @property int $editor 编辑
 * @property int $isDeleted 是否删除
 * @property string $created_at 发布时间
 * @property string $updated_at 更新时间
 */
class Products extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'industryId'], 'required'],
            [['isRecommend', 'isPassed', 'isOnSale', 'titleFontSize', 'descriptionSize', 'creator', 'editor', 'isDeleted', 'created_at', 'updated_at'], 'integer'],
            [['guid', 'industryId'], 'string', 'max' => 60],
            [['title', 'summary', 'home'], 'string', 'max' => 255],
            [['titleFontColor', 'descriptionColor'], 'string', 'max' => 30],
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
            'title' => '产品名称',
            'summary' => '产品简介',
            'home' => '生产地',
            'industryId' => '所属行业/标签',
            'isRecommend' => '是否推荐',
            'isPassed' => '是否审核通过',
            'isOnSale' => '上下架',
            'titleFontSize' => '标题字号',
            'titleFontColor' => '标题颜色',
            'descriptionSize' => '简介字号',
            'descriptionColor' => '简介颜色',
            'creator' => '发布人',
            'editor' => '编辑',
            'isDeleted' => '是否删除',
            'created_at' => '发布时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getCreateUser(){
        return $this->hasOne(User::class, ['id' => 'creator']);
    }

    public function getEditUser() {
        return $this->hasOne(User::class, ['id' => 'editor']);
    }

    public function getIndustry() {
        return $this->hasOne(Industry::class, ['id' => 'industryId']);
    }
}
