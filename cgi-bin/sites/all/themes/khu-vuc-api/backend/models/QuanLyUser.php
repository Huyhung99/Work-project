<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%quan_ly_user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password
 * @property string $nhom
 * @property string $hoten
 * @property string $dien_thoai
 * @property string $dia_chi
 * @property string $cmnd
 * @property string $anhdaidien
 * @property integer $VIP
 * @property double $vi_dien_tu
 * @property integer $hoat_dong
 * @property string $vai_tro
 */
class QuanLyUser extends \yii\db\ActiveRecord
{
    public $vi_dien_tu_tu;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quan_ly_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'VIP', 'hoat_dong'], 'integer'],
            [['nhom', 'vai_tro'], 'string'],
            [['vi_dien_tu'], 'number'],
            [['username', 'password_hash', 'email', 'password', 'hoten', 'anhdaidien'], 'string', 'max' => 100],
            [['password_reset_token'], 'string', 'max' => 45],
            [['auth_key'], 'string', 'max' => 32],
            [['dien_thoai', 'cmnd'], 'string', 'max' => 20],
            [['dia_chi'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password' => 'Password',
            'nhom' => 'Nhom',
            'hoten' => 'Họ tên',
            'dien_thoai' => 'Dien Thoai',
            'dia_chi' => 'Dia Chi',
            'cmnd' => 'Cmnd',
            'anhdaidien' => 'Anhdaidien',
            'VIP' => 'Vip',
            'vi_dien_tu' => 'Vi Dien Tu',
            'hoat_dong' => 'Hoat Dong',
            'vai_tro' => 'Vai Tro',
        ];
    }
}
