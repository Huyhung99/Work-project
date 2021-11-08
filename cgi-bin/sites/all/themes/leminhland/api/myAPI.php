<?php
/**
 * Created by PhpStorm.
 * User: hungddvimaru
 * Date: 11/11/16
 * Time: 1:19 AM
 */

namespace common\models;

use backend\models\QuanLyPhanQuyen;
use Google\Cloud\Translate\V2\TranslateClient;
use yii\bootstrap\ActiveForm;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\Url;
use Yii;
use yii\bootstrap\Html;
use yii\helpers\VarDumper;
use yii\jui\DatePicker;
use yii\swiftmailer\Mailer;
use yii\web\HttpException;

class myAPI
{
    const NDT = '¥';

    public static function createCode($str){
        $str = trim($str);
        $coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
        ,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
        ,"ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
        ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
        ,"Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ","ê","ù","à");
        $khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
        ,"a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o"
        ,"o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A"
        ,"A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O"
        ,"O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D","e","u","a");
        $str = str_replace($coDau,$khongDau,$str);
        $str = trim(preg_replace("/\\s+/", " ", $str));
        $str = preg_replace("/[^a-zA-Z0-9 \-\.]/", "", $str);
        $str = strtolower($str);
        return str_replace(" ", '-', $str);;
    }

    public static function createEngName($str){
        $str = trim($str);
        $coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
        ,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
        ,"ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
        ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
        ,"Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ","ê","ù","à");
        $khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
        ,"a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o"
        ,"o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A"
        ,"A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O"
        ,"O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D","e","u","a");
        $str = str_replace($coDau,$khongDau,$str);
        $str = trim(preg_replace("/\\s+/", " ", $str));
        $str = preg_replace("/[^a-zA-Z0-9 \-\.]/", "", $str);
        $str = strtoupper($str);
        return $str;
//        return str_replace(" ", '', $str);;
    }

    public static function duyetNhom($object,$parentid = 0,$space = '--', $trees = NULL){
        if(!$trees) $trees = array();
        $nhoms = $object::find()->where(['parent_id' => $parentid])->all();
        /** @var  $nhom  Daily*/
        foreach ($nhoms as $nhom) {
            $trees[] = array('id'=>$nhom->id,'title'=>$space.$nhom->name);
            $trees = myAPI::duyetNhom($object,$nhom->id,"|..".$space,$trees);
        }

        return $trees;
    }

    public static function dsNhom($object){
        $danhmuccons =$object::find()->where('parent_id is null')->all();
        $trees = array();
        /** @var  $danhmuccon Daily */
        foreach ($danhmuccons as $danhmuccon) {
            $trees[] = array('id'=>$danhmuccon->id, 'title'=>$danhmuccon->name);
            $trees = myAPI::duyetNhom($object,$danhmuccon->id,'|--',$trees);
        }
        return $trees;
    }

    public static function dataTree($object,$parentid = NULL,$trees){
        $trees =[];
        $danhmuccons = $object::find()->where(['parent_id'=>$parentid])->all();
        foreach ($danhmuccons as $danhmuccon) {
            $nodes =[];
            $nodes = myAPI::dataTree($object,$danhmuccon->id,$nodes);
            $trees[] = ['id'=>$danhmuccon->id,'title'=>$danhmuccon->name,'nodes'=>$nodes];
        }
        return $trees;
    }

    public static function getNam($namBatDau,$namKetThuc){
        $namBatDau = (int)$namBatDau;
        $namKetThuc = (int)$namKetThuc;
        for($i=$namBatDau;$i <= $namKetThuc;$i++)
        {
            $data[$i] = $i;
        }
        return $data;
    }

    public static function getCapDo($str = 'quan | huyen | phuong | xa | thitran'){
        $data = [
            'quan' => 'Quận',
            'huyen' => 'Huyện',
            'phuong' => 'Phường',
            'xa' => 'Xã',
            'thitran' => 'Thị trấn'
        ];
        return $data[$str];
    }

    public static function getTab($cap = 'quan | huyen | xa | phuong | thitran' ){
        $data = [
            'quan' => 0,
            'huyen' => 0,
            'phuong' => 5,
            'xa' => 5,
            'thitran' => 5
        ];

        $str = '';
        for($i = 0; $i<=$data[$cap]; $i++)
            $str.='&emsp;';

        return $str;
    }

    public static function getMessage($att = "success|danger|warning|info", $content){
        return "<div class='note note-{$att}'>{$content}</div>";
    }

    public static function createMessage($att = 'success | danger | warning | info', $content){
        return [
            'messagePlan' => $content,
            'messageHtml' => self::getMessage($att, $content)
        ];
    }

    /**
     * @param $value
     * @param ActiveRecord $model
     * @param string $attributeTitle
     * @param array $attributeType
     * @return Expression
     */
    public static function getIdOtherModel($value, $model, $attributeTitle = 'name', $attributeType = ['name' => '', 'value' => '']){
        if(trim($value)=="")
            return new Expression('NULL');

        $data = $model->find()->where("code = :name", [':name' => self::createCode(trim($value))])->one();

        if(count($data) == 0){
            $model->{$attributeTitle} = trim($value);
            if($attributeType['name'] != '')
                $model->{$attributeType['name']} = trim($attributeType['value']);

            $model->save();
            return $model->id;
        }
        return $data->id;
    }

    public static function getHeadModal($noidung){
        return '<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">'.$noidung.'</h4>';
    }

    public static function activeDateField($form, $model, $field, $label, $yearRange = '1950:2050'){
        return $form->field($model,$field)->widget(\yii\jui\DatePicker::className(),[
            'language' => 'vi',
            'clientOptions' => [
                'dateFormat' => 'dd/mm/yy',
                'changeMonth' => true,
                'yearRange' => $yearRange,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control']
        ])->label($label);
    }

    /**
     * @param $form ActiveForm
     * @param $model ActiveRecord
     * @param $field
     * @param $label
     * @param string $yearRange
     * @param array $options
     * @return mixed
     */
    public static function activeDateField2($form, $model, $field, $label, $yearRange = '2015:2018', $options = ['class' => 'form-control']){
        return $form->field($model,$field)->widget(\yii\jui\DatePicker::className(),[
            'language' => 'vi',
            'clientOptions' => [
                'dateFormat' => 'dd/mm/yy',
                'changeMonth' => true,
                'yearRange' => $yearRange,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control']
        ])->label($label);
    }

    public static function dateField($name, $value, $class='form-control', $yearRange = '1950:2050'){
        return DatePicker::widget([
            'language' => 'vi',
            'name' => $name,
            'value' => $value,
            'clientOptions' => [
                'dateFormat' => 'dd/mm/yy',
                'changeMonth' => true,
                'yearRange' => $yearRange,
                'changeYear' => true,
            ],
            'options' => ['class' => $class]
        ]);
    }
    public static function dateField2($name, $value, $yearRange = '2015:2018',$options= ['class' => 'form-control']){
        return DatePicker::widget([
            'language' => 'vi',
            'name' => $name,
            'value' => $value,
            'dateFormat' => 'dd/MM/yyyy',
            'clientOptions' => [
                'changeMonth' => true,
                'yearRange' => $yearRange,
                'changeYear' => true,
            ],
            'options' => $options
        ]);
    }

    public static function activeDateFieldNoLabel($model, $attribute, $yearRange = '2015: 2100', $options = ['class' => 'form-control']){
        return DatePicker::widget([
              'language' => 'vi',
              'model' => $model,
              'attribute' => $attribute,
            'clientOptions' => [
                'dateFormat' => 'dd/mm/yy',
                'changeMonth' => true,
                'yearRange' => $yearRange,
                'changeYear' => true,
            ],
            'options' => $options
        ]);
    }

    public static function convertDateSaveIntoDb($date){
        if($date == "")
            return null;

        $splash = '/';
        if(strpos($date, '-') !== false)
            $splash = '-';
        else if(strpos($date, '.') !== false)
            $splash = '.';

        $date = trim($date);
        if($date == "")
            return new Expression('NULL');
        $arr = explode(trim($splash), $date);
        if(count($arr) == 3)
            return implode('-', array_reverse($arr));
        else if(count($arr) == 2)
            return date("Y")."-{$arr[1]}-{$arr[0]}";
        else
            return date("Y")."-".date("m")."-".$arr[0];
    }

    public static function getBtnCloseModal(){
        return Html::button('Đóng lại',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]);
    }

    public static function getBtnFooter( $label, $options = []){
        return Html::button($label, $options);
    }

    public static function getVaitro(){
        return [
            'quantrivien' => '<span class="text-danger"><i class="fa fa-flag"></i> Quản trị viên</span>',
            'quanly' => '<span class="text-warning"><i class="fa fa-flag"></i> Quản lý</span>',
            'nhanvien' => '<span class="text-success"><i class="fa fa-flag"></i> Nhân viên</span>',
        ];
    }

    public static function getAFieldOfAModelFromName($model, $field, $name){
        $code = self::createCode(trim($name));
        $data = $model->find()->where(['code' => $code])->one();
        if(is_null($data))
            return '';
        return $data->{$field};
    }

    public static function getFilterFromTo($searchModel, $fieldFrom, $field_to, $options_from = [], $options_to = []){
        return Html::activeTextInput($searchModel, $fieldFrom, array_merge($options_from, ['class' => 'form-control', 'placeholder' => 'Từ...'])).
        Html::activeTextInput($searchModel, $field_to, array_merge($options_to, ['class' => 'form-control', 'placeholder' => 'Đến...']));
    }
    public static function getFilterFromToInline($searchModel, $fieldFrom, $field_to, $options = ['class' => 'form-control']){
        return '<div class="row"><div class="col-md-6">'.Html::activeTextInput($searchModel, $fieldFrom, array_merge($options, ['placeholder' => 'Ngày từ...'])).'</div><div class="col-md-6">'.Html::activeTextInput($searchModel, $field_to, array_merge($options, ['placeholder' => 'Đến ...'])).'</div></div>';
    }

    public static function getBtnSearch(){
        return '<button type="button" class="btn blue btn-search"><i class="fa fa-search"></i> Tìm kiếm</button>';
    }

    public static function getDMY($YMD){
        if($YMD != "")
            return date("d/m/Y", strtotime($YMD));
        return '';
    }

    /**
     * @return string
     */
    public static function getBtnDownload(){
        return Html::button('<i class="fa fa-cloud-download"></i> Tải xuống',['class'=>'btn btn-primary btn-download-ketquatimkiem pull-right']);
    }

    public static function getBtnDeleteAjaxCRUD($text = '', $url, $clsBtn = ''){
        return Html::a('<i class="fa fa-trash"></i> '.$text, $url, ['title' => 'Xóa', 'role' => 'modal-remote', 'data-request-method' => 'post', 'data-toggle' => 'tooltip',
        'data-confirm-title' => 'Thông báo', 'data-confirm-message' => 'Bạn có chắc chắn muốn xóa không ?', 'class' => $clsBtn]);
    }

    public static function getDsThang(){
        $arr = [];
        for ($i= 1; $i<=12; $i++)
            $arr[$i] = "Tháng {$i}";
        return $arr;
    }

    public static function createUpdateBtnInGrid($path, $title = 'Sửa dữ liệu'){
        return Html::a('<i class="fa fa-edit"></i>', $path, ['title' => $title, 'data-pjax' => 0, 'role' => 'modal-remote', 'data-toggle' => 'tooltip', 'data-original-tile' => $title]);
    }

    public static function createDeleteBtnInGrid($path, $title = 'Xóa dữ liệu'){
        return Html::a('<i class="fa fa-trash"></i>', $path,['title' => $title, 'data-pjax' => 0, 'role' => 'modal-remote', 'data-request-method' => 'post', 'data-toggle' => 'tooltip', 'data-confirm-title' => 'Thông báo', 'data-confirm-message' => 'Bạn có chắc chắn muốn xóa dữ liệu này?', 'data-original-title' => 'Xóa', 'class' => 'text-danger']);
    }

    /**
     * @param string $model
     * @param int $id
     * {$model}-{$id}
     * @param array $optionsTD
     * @return string
     */
    public static function getBtnDeletInRow($model, $id, $optionsTD = ['class' => 'text-center']){
        return Html::tag('td', Html::a('<i class="fa fa-trash"></i>', '#', ['class' => 'text-danger btn-xoa-dong-tren-bang', 'id' => "{$model}-{$id}"]), $optionsTD);
    }
    public static function getBtnDeletInRowNewRow($options = ['class'=>"text-center"]){
        return Html::tag('td', Html::a('<i class="fa fa-trash"></i>', '#', ['class' => 'text-danger btn-xoa-dong-tren-bang dong-moi-trenbang']), $options);
    }

    /**
     * @param string $id
     * tauthuynoidia-soluongthuyenvien => views/tauthuynoidia/row/_row_soluongthuyenvien
     * @param integer $colspan
     * @param integer $colspan
     * @param integer $colspan
     * @param integer $colspan
     * @return string
     */
    public static function getRowBoSung($id = "{model}-{row_file}", $colspan){
        return Html::tag('tr', Html::tag('td', Html::button('<i class="fa fa-plus"></i> Bổ sung',[
            'class' => 'btn btn-sm btn-primary btn-them-dong-moi',
            'id' => $id
        ]), ['colspan' => $colspan]));
    }

    /**
     * @param $post string
     * @param $model ActiveRecord
     */
    public static function saveAnExistTable($post, $model, $attributes = []){
        if(isset($_POST[$post])){
            foreach ($_POST[$post] as $id => $item) {
                $kqkd = $model->findOne($id);
                $kqkd->attributes = $item;
                foreach ($attributes as $attribute => $value) {
                    $kqkd->{$attribute} = $value;
                }
                if(!$kqkd->save()){
                    var_dump(Html::errorSummary($kqkd));
                    exit;
                }
            }
        }
    }

    /**
     * @param $post array
     * @param $newOBJ string
     * @param $firstField string
     * @param $model ActiveRecord
     * @param $others array
     */
    public static function saveOtherTable($newOBJ, $firstField, $objectName, $others = []){
        $model = new $objectName();
        $arr_fields = $model->attributes;
        if(isset($_POST[$newOBJ][$firstField])){
            foreach ($_POST[$newOBJ][$firstField] as $index => $item) {
                /** @var  $newModel ActiveRecord*/
                $newModel = new $objectName();
                foreach ($arr_fields as $field => $value) {
                    if(isset($_POST[$newOBJ][$field][$index]))
                        $newModel->{$field} = $_POST[$newOBJ][$field][$index];
                }
                foreach ($others as $field => $value) {
                    $newModel->{$field} = $value;
                }
                if(!$newModel->save()) {var_dump(Html::errorSummary($newModel)); exit();};
            }
        }
    }

    /**
     * @param $arrRoles
     * @return bool
     */
    public static function isAccess($arrRoles){
        if(Yii::$app->user->isGuest)
            return false;
        return (new User())->isAccess($arrRoles);
    }

    public static function sendMail($to, $subject, $message, $username, $password, $fromName, $pathFiles = []){
        $mailer = new Mailer();
        $mailer->setTransport([
//            smtp gmail
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => $username,
            'password' => $password,
            'port' => '587',
            'encryption' => 'tls',
//            'timeout' => 50000000
        ]);

        $mail = $mailer->compose()
            ->setFrom([$username => $fromName])
            ->setTo($to);

        foreach ($pathFiles as $pathFile) {
            $mail->attach($pathFile);
        }

        return $mail
            ->setHtmlBody($message)
            ->setSubject($subject)
            ->setCharset('UTF-8')
            ->send();
    }
    public static function sendMoreMailAmzon($content, $form, $to, $subject, $hoTenNguoiGui){
        $transport = (new \Swift_SmtpTransport('email-smtp.us-east-1.amazonaws.com', 465))
            ->setEncryption('SSL')
            ->setUsername('AKIA427VAE7TC62BGSWE')
            ->setPassword('BASwB36UH30XSEDT5NpJO3vmRXM/w2812oFML8+xd5Am')
        ;
        $mailer = new \Swift_Mailer($transport);
        $message = (new \Swift_Message($subject))
            ->setContentType( 'text/html')
            ->setFrom([$form => $hoTenNguoiGui])
            ->setBody($content)
        ;
        foreach ($to as $item) {
            $message->setTo($item);
        };
        $result = $mailer->send($message);
    }

    public static function getYMDFromDMY($date, $splash = '-'){
        if($date == '')
            return '';
        $arr = explode($splash, $date);
        return implode('-', array_reverse($arr));
    }

    public static function getCodesMBLDaChon(){
        $arr = [];
        if(\Yii::$app->session->get('ma'))
            $arr = \Yii::$app->session->get('ma');
        if(count($arr) > 0)
            return 'Học viên đã chọn: '.implode(', ',$arr);
        return '';
    }

    public static function isAccess2($controller, $action){
        if(!isset(Yii::$app->user->id))
            return false;
        if(Yii::$app->user->id == 1){
                return true;
        }else{
            $action = ucfirst($action);
            $controller_action = "{$controller};{$action}";
            $user_id = Yii::$app->user->id;
            return !is_null(QuanLyPhanQuyen::findOne(['controller_action' => $controller_action, 'user_id' => $user_id]));
        }

    }

    public static function getIdOtherModel2($value, $model, $attrs, $field_comparse){

        if(count($attrs) == 0)
            return null;

        $data = $model::findOne(["{$field_comparse}"=> self::createCode($value)]);
        if(is_null($data)){
            foreach ($attrs as $attr => $value)
                $model->{$attr} = trim($value);
            if($model->save())
                return $model->id;
            else
                throw new HttpException(500, \yii\helpers\Html::errorSummary($model));
        }else{
            foreach ($attrs as $attr => $value)
                $data->{$attr} = trim($value);
            $data->save();
            return $data->id;
        }
    }

    public static function createQRCODE($madonhang){

    }

    /**
     * @param $str | 0.000.000,000
     * @return double
     */
    public static function getNumberFromStr($str){
        if($str == '')
            return 0;
        $str = str_replace(".", '', $str);
        $str = str_replace(',','.',$str);
        return doubleval($str);
    }

    public static function sendMailGun($content, $from, $to, $subject){
        \Yii::$app->mailer->compose('contact/html', ['contactForm' => $content])
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)
            ->send();
    }

    public static function checkUsername_invalid($value){
        if (preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $value))
            return true;
        else
            return false;
    }


}
