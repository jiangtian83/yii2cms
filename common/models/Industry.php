<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%industry}}".
 *
 * @property int $id
 * @property string $industry_name 行业名称
 * @property int $pid 父级行业
 * @property int $creator 创建者
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class Industry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%industry}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'creator', 'created_at', 'updated_at'], 'integer'],
            [['industry_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'industry_name' => '行业名称',
            'pid' => '父级行业',
            'creator' => '创建者',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
