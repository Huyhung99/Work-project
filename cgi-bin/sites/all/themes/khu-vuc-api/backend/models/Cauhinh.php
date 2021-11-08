<?php

namespace backend\models;

use common\models\myActiveRecord;
use Yii;

/**
 * This is the model class for table "{{%cauhinh}}".
 *
 * @property integer $id
 * @property string $content
 * @property string $name
 * @property string $ghi_chu
 */
class Cauhinh extends myActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cauhinh}}';
    }

    /**Cauhinh
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ghi_chu', 'name'], 'safe'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content' => Yii::t('app', 'Nội dung'),
            'ghi_chu' => Yii::t('app', 'Ký hiệu'),
            'name' => Yii::t('app', 'Tên'),
        ];
    }
}
