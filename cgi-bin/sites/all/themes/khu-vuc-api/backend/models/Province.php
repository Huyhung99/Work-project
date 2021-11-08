<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $parent_id
 * @property int|null $type
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $code
 * @property string|null $phuong_xa
 * @property int|null $id_khu_vuc
 * @property string|null $quan_huyen
 * @property string|null $thanh_pho
 *
 * @property Province $parent
 * @property Province[] $provinces
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'type', 'status', 'created_at', 'updated_at', 'id_khu_vuc'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['code', 'phuong_xa', 'quan_huyen', 'thanh_pho'], 'string', 'max' => 100],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'code' => 'Code',
            'phuong_xa' => 'Phuong Xa',
            'id_khu_vuc' => 'Id Khu Vuc',
            'quan_huyen' => 'Quan Huyen',
            'thanh_pho' => 'Thanh Pho',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Province::className(), ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[Provinces]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces()
    {
        return $this->hasMany(Province::className(), ['parent_id' => 'id']);
    }
}
