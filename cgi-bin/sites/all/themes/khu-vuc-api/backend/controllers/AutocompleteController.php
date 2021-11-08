<?php
/**
 * Created by PhpStorm.
 * User: HungLuongHien
 * Date: 6/3/2016
 * Time: 10:56 AM
 */

namespace backend\controllers;

use backend\models\Chucvu;
use backend\models\DanhMuc;
use backend\models\Khuvuc;
use backend\models\Kieuquanhe;
use backend\models\LopHoc;
use backend\models\Nhommau;
use backend\models\Nghenghiep;
use backend\models\Khoa;
use backend\models\Donhang;
use backend\models\TruongCongty;
use backend\models\Vunglamviec;
use backend\models\Nghiepdoan;
use backend\models\Xinghiep;
use backend\models\Donvicungcapnguon;
use backend\models\Lop;
use backend\models\Hocvien;
use backend\models\Benhvien;
use backend\models\Trinhdohocvan;
use backend\models\CongTacVien;
use common\models\User;
use yii\helpers\Json;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\HttpException;

class AutocompleteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['getnguoiguinhan', 'getchiphi'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ],
            ],
        ];
    }

    public function actionGetnguoiguinhan(){
        $name = \Yii::$app->request->get('query');

        $part = User::find()
            ->select(['hoten', 'dien_thoai', 'dia_chi'])
            ->andFilterWhere(['nhom' => 'Khách hàng'])
            ->andFilterWhere(['like', 'dien_thoai', trim($name)])->all();
        echo Json::encode($part);
    }
    public function actionGetchiphi(){
        $name = \Yii::$app->request->get('query');

        $part = DanhMuc::find()
            ->andFilterWhere(['type' => 'Chi phí'])
            ->andFilterWhere(['like', 'name', trim($name)])->all();
        echo Json::encode($part);
    }

}