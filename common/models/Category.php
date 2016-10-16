<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $category_parentid
 * @property string $name
 * @property string $pinyin
 * @property integer $ord
 * @property integer $is_display
 * @property string $icon
 * @property string $url
 * @property string $spider_url
 * @property integer $is_recommend
 * @property integer $create_by
 * @property integer $create_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_parentid', 'ord', 'is_display', 'is_recommend', 'create_by', 'create_at'], 'integer'],
            [['name', 'icon', 'create_by', 'create_at'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['pinyin'], 'string', 'max' => 60],
            [['icon', 'spider_url'], 'string', 'max' => 160],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'ID',
            'category_parentid' => '父ID',
            'name'              => '名称',
            'pinyin'            => 'Pinyin',
            'ord'               => 'Ord',
            'is_display'        => 'Is Display',
            'icon'              => 'Icon',
            'url'               => 'Url',
            'spider_url'        => 'Spider Url',
            'is_recommend'      => 'Is Recommend',
            'create_by'         => 'Create By',
            'create_at'         => 'Create At',
        ];
    }
}
