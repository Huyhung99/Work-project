<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%log}}".
 *
 * @property integer $id
 * @property string $created
 * @property string $updated
 * @property integer $user_id
 * @property string $type
 * @property integer $id_column
 * @property string $deleted
 */
class LogIS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'type', 'id_column'], 'required'],
            [['created', 'updated', 'deleted'], 'safe'],
            [['user_id', 'id_column'], 'integer'],
            [['type'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created' => 'Created',
            'updated' => 'Updated',
            'user_id' => 'User ID',
            'type' => 'Type',
            'id_column' => 'Id Column',
            'deleted' => 'Deleted',
        ];
    }
}
