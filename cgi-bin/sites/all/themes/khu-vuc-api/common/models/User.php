<?php
namespace common\models;

use backend\models\Cauhinh;
use backend\models\Nhomnguoidung;
use backend\models\Vaitrouser;
use backend\models\XuatCanh;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\bootstrap\Html;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $biet_den_ocv_qua_dau
 * @property string $dien_thoai
 * @property string $dia_chi
 * @property string $cmnd
 * @property string $nhom
 * @property string $hoten
 * @property string $anhdaidien
 * @property integer $VIP
 * @property string $email
 * @property double $vi_dien_tu
 * @property int $hoat_dong
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property double $phi_can_nang
 * @property integer $kinh_doanh_id
 * @property string $password
 *
 * @property Vaitrouser[] $vaitrousers
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    public $files;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            TimestampBehavior::className(),
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'password_reset_token', 'email', 'anhdaidien',
                'vi_dien_tu', 'hoat_dong', 'kinh_doanh_id', 'phi_can_nang',
                'VIP', 'auth_key', 'status', 'created_at', 'updated_at', 'password', 'biet_den_ocv_qua_dau'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['username'], 'unique', 'message' => 'Tên đăng nhập đã tồn tại'],
            [['hoten', 'nhom', 'dien_thoai', 'dia_chi','cmnd', 'files'], 'safe']
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Tài khoản'),
            'password_hash' => Yii::t('app', 'Mật khẩu'),
            'status' => Yii::t('app', 'Trạng thái'),
            'hoten' => Yii::t('app', 'Họ tên'),
            'nhom' => Yii::t('app', 'Nhóm'),
            'VIP' => 'VIP',
            'vi_dien_tu' => 'Ví',
            'hoat_dong' => 'Hoạt động',
            'dia_chi' => 'Địa chỉ',
            'dien_thoai' => 'Điện thoại',
        ];
    }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * @param $arrRoles
     * @return bool
     */
    public function isAccess($arrRoles){
//        return !is_null(Vaitrouser::find()->andFilterWhere(['in', 'vaitro', $arrRoles])->andFilterWhere(['user_id' => Yii::$app->user->getId()])->one());
        return 1;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVaitrousers()
    {
        return $this->hasMany(Vaitrouser::className(), ['user_id' => 'id']);
    }
    /**
     * @param $user \yii\web\User
     * @return string
     */
    public function getVaitros($user){
        $arr = [];
        foreach ($user->vaitrousers as $vaitrouser) {
            $arr[] = $vaitrouser->vaitro;
        }
        return implode(', ',$arr);
    }

    public function beforeDelete()
    {
        Vaitrouser::deleteAll(['user_id' => $this->id]);
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function beforeSave($insert)
    {
        if($insert){
            $phiCanNang = Cauhinh::findOne(['ghi_chu' => 'phi_can_nang'])->content;
            $this->phi_can_nang = $phiCanNang;
        }
        $this->hoten = trim($this->hoten);
        $this->dien_thoai = trim($this->dien_thoai);
        $this->cmnd = trim($this->cmnd);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function afterSave($insert, $changedAttributes)
    {

        // upload anh dai dien
        $file = UploadedFile::getInstance($this, 'anhdaidien');
        $oldFileName = '';
        if(isset($changedAttributes['anhdaidien']))
            $oldFileName = $changedAttributes['anhdaidien'];
        if($insert){
            $filename = 'no-image.png';
        }
        else
            $filename = $oldFileName;
        if(!is_null($file)){
            $filename = myFuncs::createCode(time().$file->name);
            $path = dirname(dirname(__DIR__)).'/images/'.$filename;
            $file->saveAs($path);

        }
        if(!$insert && !is_null($file)){
            if($this->anhdaidien != 'no-image.png'){
                $path = dirname(dirname(__DIR__)).'/images/'.$this->anhdaidien;
                if(is_file($path))
                    unlink($path);
            }
        }
        $this->updateAttributes(['anhdaidien' => $filename]);

        $vaitro = Vaitrouser::findAll(['user_id' => $this->id]);
        foreach ($vaitro as $item) {
            $item->delete();
        }
        if(isset($_POST['Vaitrouser']))
            foreach ($_POST['Vaitrouser'] as $item) {
                $vaitronguoidung = new Vaitrouser();
                $vaitronguoidung->vaitro_id = $item;
                $vaitronguoidung->user_id = $this->id;
                if(!$vaitronguoidung->save()){
                    var_dump(Html::errorSummary($vaitronguoidung));
                    exit;
                }
            }
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }

}
