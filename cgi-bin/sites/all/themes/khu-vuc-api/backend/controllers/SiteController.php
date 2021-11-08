<?php
namespace backend\controllers;


use backend\models\Cauhinh;
use backend\models\DonHang;
use backend\models\GiaoDich;
use backend\models\QuanLyDonHang;
use backend\models\QuanLyGiaoDich;
use backend\models\TrangThaiDonHang;
use backend\models\Chitietdonhang;
use backend\models\UserVaiTro;
use backend\models\VaiTro;
use common\models\myAPI;
use common\models\RanVangAPI;
use common\models\User;
use Google\Cloud\Translate\V2\TranslateClient;
use SKAgarwal\GoogleApi\PlacesApi;
use sr1871\youtubeApi\components\YoutubeApi;
use Yii;
use yii\base\Exception;
use yii\base\Security;
use yii\bootstrap\Html;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\myFuncs;
use yii\web\Cookie;
use yii\web\HttpException;
use \yii\web\Response;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['login','logout', 'index', 'error', 'updatekhocang','updatevesselmbl'],
                'rules' => [
                    [
                        'actions' => ['signup', 'login', 'error', 'test-place', 'get-data-youtube'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                            'doimatkhau', 'logout', 'index', 'loadform',  'trans'
                        ],
                        'allow' => true,
//                        'matchCallback' => function($rule, $action){
//                            return Yii::$app->user->identity->username == 'adamin';
//                        }
                        'roles' => ['@']
                    ],
                ],
//                'denyCallback' => function ($rule, $action) {
//                    throw new Exception('You are not allowed to access this page', 404);
//                }
            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $userVaiTro = UserVaiTro::findOne(['id' => Yii::$app->user->id]);
        if(strpos($userVaiTro->vai_tro, 'Khách hàng')!== false)
            return $this->redirect(Url::toRoute('don-hang/my-order'));
        else
            return $this->redirect(Url::toRoute('don-hang/index'));
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user = User::findOne(['username' => $model->username]);
            $cookies = Yii::$app->response->cookies;
            $hash = Yii::$app->security->generateRandomString();
            User::updateAll(['auth_key' => $hash], ['username' => $model->username]);
//            $cookies->add(new Cookie([
////                'name' => 'token',
////                'value' => $hash
////            ]));
////            $cookies->add(new Cookie([
////                'name' => 'username',
////                'value' => $user->username
////            ]));
///
            setcookie("token", $hash);
            setcookie("username", Yii::$app->security->generateRandomString());
            setcookie("userId", $user->username);

            return $this->goBack();
        } else {
            return $this->renderPartial('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        User::updateAll(['auth_key' => ''], ['id' => Yii::$app->user->id]);
        Yii::$app->user->logout();
        $cookies = Yii::$app->response->cookies;
        $cookies->remove('token');
        $cookies->remove('userId');
        $cookies->remove('username');
        unset($cookies['token']);
        unset($cookies['userId']);
        unset($cookies['username']);
        return $this->goHome();
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            if(Yii::$app->request->isAjax){
                echo myFuncs::getMessage($exception->getMessage(),'danger', "Lỗi!");
                exit;
            }
            return $this->render('error', ['exception' => $exception]);
        }
    }

    public function actionDoimatkhau(){
        $sercurity = new Security();
        $user = User::findOne(Yii::$app->user->getId());
        $user->password_hash = $_POST['matkhaucu'];

        if(!Yii::$app->user->login($user))
            throw new HttpException(500, myAPI::getMessage('danger', 'Mật khẩu cũ không đúng!'));
        else{
            $matkhaumoi = $sercurity->generatePasswordHash(trim($_POST['matkhaumoi']));
            User::updateAll(['password_hash' => $matkhaumoi], ['id' => Yii::$app->user->getId()]);
            Yii::$app->response->format = Response::FORMAT_JSON;
            return (['message' => myAPI::getMessage('success', 'Đã đổi mật khẩu thành công')]);
        }
    }

    // loadform
    public function actionLoadform(){
        $content = '';
        $title = '';
        if($_POST['type'] == 'naptienvaotaikhoan'){
            $giao_dich = new GiaoDich();
            if(!isset($_POST['donhang'])){
                $giao_dich->loai_giao_dich = GiaoDich::NAP_TIEN;
                $giao_dich->khach_hang_id = $_POST['khachhang_id'];
                $title = $_POST['type_giaodich'];
            }else{
                $donhang = QuanLyDonHang::findOne(['id' => $_POST['donhang']]);
                $giao_dich->loai_giao_dich = GiaoDich::THANH_TOAN_DON_HANG;
                $giao_dich->khach_hang_id = $donhang->user_id;
                $giao_dich->so_tien_giao_dich = $donhang->thanh_tien - $donhang->so_tien_giao_dich;
                $giao_dich->don_hang_lien_quan_id = $donhang->id;
                $title = "Thanh toán tiền đơn hàng #".$donhang->id;
            }

            $content = $this->renderAjax('../giao-dich/_form', ['giaodich' => $giao_dich]);
        }
        elseif($_POST['type'] == 'thaydoitrangthai'){
            $trangthaidonhang = new TrangThaiDonHang();
            $trangthaidonhang->don_hang_id = $_POST['donhang'];
            $donhang = QuanLyDonHang::findOne(['id' => $_POST['donhang']]);
            $arr_trangthai = [
                TrangThaiDonHang::GIO_HANG => TrangThaiDonHang::GIO_HANG,
                TrangThaiDonHang::DON_HANG_CHO => TrangThaiDonHang::DON_HANG_CHO,
                TrangThaiDonHang::DANG_MUA_HANG => TrangThaiDonHang::DANG_MUA_HANG,
                TrangThaiDonHang::DA_DAT_HANG => TrangThaiDonHang::DA_DAT_HANG,
                TrangThaiDonHang::DANG_O_KHO_TQ => TrangThaiDonHang::DANG_O_KHO_TQ,
                TrangThaiDonHang::DANG_O_VIET_NAM => TrangThaiDonHang::DANG_O_VIET_NAM,
                TrangThaiDonHang::DANG_CHUYEN_HANG => TrangThaiDonHang::DANG_CHUYEN_HANG,
                TrangThaiDonHang::DA_GIAO_HANG => TrangThaiDonHang::DA_GIAO_HANG,
                TrangThaiDonHang::DA_HUY => TrangThaiDonHang::DA_HUY,
            ];
            if($donhang->trang_thai == TrangThaiDonHang::GIO_HANG){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
            }elseif ($donhang->trang_thai == TrangThaiDonHang::DON_HANG_CHO){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DON_HANG_CHO]);
            }else if($donhang->trang_thai == TrangThaiDonHang::DANG_MUA_HANG){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DON_HANG_CHO]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_MUA_HANG]);
            }else if($donhang->trang_thai == TrangThaiDonHang::DA_DAT_HANG){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DON_HANG_CHO]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_MUA_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DA_DAT_HANG]);
            }
            else if($donhang->trang_thai == TrangThaiDonHang::DANG_O_KHO_TQ){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DON_HANG_CHO]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_MUA_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DA_DAT_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_O_KHO_TQ]);
            }else if($donhang->trang_thai == TrangThaiDonHang::DANG_O_VIET_NAM){
                unset($arr_trangthai[TrangThaiDonHang::GIO_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DON_HANG_CHO]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_MUA_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DA_DAT_HANG]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_O_KHO_TQ]);
                unset($arr_trangthai[TrangThaiDonHang::DANG_O_VIET_NAM]);
            }else if($donhang->trang_thai == TrangThaiDonHang::DANG_CHUYEN_HANG){
                $arr_trangthai = [
                    TrangThaiDonHang::DA_GIAO_HANG => TrangThaiDonHang::DA_GIAO_HANG,
                    TrangThaiDonHang::DA_HUY => TrangThaiDonHang::DA_HUY
                ];
            }else if($donhang->trang_thai == TrangThaiDonHang::DA_GIAO_HANG ||
                $donhang->trang_thai == TrangThaiDonHang::DA_HUY){
                $arr_trangthai = [];
            }


            $content = $this->renderAjax('../don-hang/form-cap-nhat-trang-thai', [
                'model' => $trangthaidonhang,
                'trangthai' => $arr_trangthai
            ]);

            $title = 'Cập nhật trạng thái đơn hàng #'.$_POST['donhang'];
        }
        elseif($_POST['type'] == 'capnhatstt'){
            $model = DonHang::findOne($_POST['donhang']);
            $content = $this->renderAjax('../don-hang/_form_update_ma_sott', [
                'model' => $model,
                'phan_loai' => $_POST['phanloai']
            ]);
            $title = 'Cập nhật '.($_POST['phanloai'] == 'mastt' ? "mã stt" : "mã vận đơn");
        }
        elseif ($_POST['type'] == 'update_khoi_luong'){
            $model = DonHang::findOne($_POST['donhang']);
            $rvAPI = new RanVangAPI();
            $heSoQuyDoi = $rvAPI->getHeSoQuyDoi();
            if($model->phi_khoi_luong == '' || $model->phi_khoi_luong == 0){
                $model->phi_khoi_luong = $model->user->phi_can_nang;
            }
            $content = $this->renderAjax('../don-hang/_form_update_khoi_luong', [
                'heSoQuyDoi' => $heSoQuyDoi,
                'model' => $model,
            ]);
            $title = 'Cập nhật khối lượng đơn hàng';
        }
        else if($_POST['type'] == 'thanh_toan_them_nhieu_don_hang'){
            $donHang = QuanLyDonHang::find()
                ->andFilterWhere(['in', 'id', $_POST['DonHang']])
                ->all();
            $content = $this->renderAjax('../don-hang/_thanh_toan_them_nhieu_don_hang', [
                'donHangs' => $donHang,
            ]);
            $title = 'Thanh toán thêm';
        }
        else if($_POST['type'] == 'tra_hang_nhieu_don_hang'){
            $donHang = QuanLyDonHang::find()
                ->andFilterWhere(['in', 'id', $_POST['DonHang']])
                ->all();
            $arr_trang_thai_donHang = [];
            /** @var QuanLyDonHang $item */
            foreach ($donHang as $item) {
                if(!in_array($item->trang_thai, [TrangThaiDonHang::YEU_CAU_GIAO_HANG, TrangThaiDonHang::DANG_O_VIET_NAM]))
                    $arr_trang_thai_donHang[] = [
                        'donHang' => $item,
                        'content' => '<span class="text-danger"><i class="fa fa-close"></i> Khách hàng chưa yêu cầu giao hàng<br/> hoặc hàng chưa về kho Việt Nam</span>',
                    ];
                else{
                    if($item->thanh_tien > ($item->so_tien_giao_dich - $item->so_tien_giao_dich_hoan_lai))
                        $arr_trang_thai_donHang[] = [
                            'donHang' => $item,
                            'content' => '<span class="text-danger"><i class="fa fa-close"></i> Khách hàng chưa thanh toán hết số tiền đơn hàng.<br/>Còn thiếu '.number_format($item->thanh_tien - ($item->so_tien_giao_dich - $item->so_tien_giao_dich_hoan_lai), 3, ',','.').'đ</span>',
                        ];
                    else{
                        $arr_trang_thai_donHang[] = [
                            'donHang' => $item,
                            'content' => Html::hiddenInput('DonHang['.$item->id.']', $item->id).myAPI::getMessage('success', '<i class="fa fa-check-circle-o"></i> Được phép giao hàng')
                        ];
                    }
                }
            }
            $content = $this->renderAjax('../don-hang/_giao_hang_nhieu_don_hang', [
                'arr_trang_thai_donHang' => $arr_trang_thai_donHang,
            ]);
            $title = 'Giao hàng';
        }
        else if($_POST['type'] == 'xac_nhan_huy_don_hang'){
            $trangThaiDonHang = new TrangThaiDonHang();
            $trangThaiDonHang->don_hang_id = $_POST['donHang'];
            $content = $this->renderAjax('../don-hang/_form_xac_nhan_huy_don_hang', [
                'donHang' => DonHang::findOne($_POST['donHang']),
                'trangThaiDonHang' => $trangThaiDonHang
            ]);
            $title = 'Xác nhận hủy đơn hàng';
        }
        else if($_POST['type'] == 'khong_chap_nhan_bao_gia'){
            $trangThaiDonHang = new TrangThaiDonHang();
            $trangThaiDonHang->don_hang_id = $_POST['donHang'];
            $trangThaiDonHang->trang_thai = TrangThaiDonHang::DON_HANG_CHO;
            $donHang = DonHang::findOne($_POST['donHang']);
            $content = $this->renderAjax('../don-hang/_form_khong_chap_nhan_bao_gia', [
                'donHang' => $donHang,
                'trangThaiDonHang' => $trangThaiDonHang
            ]);
            $title = 'Từ chối báo giá đơn hàng #'.$donHang->id;
        }
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'content' => $content,
            'title' => $title
        ];

    }

    public function actionTest(){
        $cauhinh = Cauhinh::findOne(4);
        $tien =16859353.28;
        VarDumper::dump((new DonHang())->tinhPhiMuaHang($tien), 10, true);
        VarDumper::dump(nl2br($cauhinh->content), 10, true) ;
        exit();
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new \backend\models\SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if(!isset($_POST['tnc']))
                Yii::$app->session->setFlash('thongbao', myAPI::getMessage('danger', 'Vui lòng đồng ý với các điều khoản được đưa ra'));
            else{
                $model->dongy = 1;
                $user = $model->signup();
                if (!is_null($user)) {
                    if (Yii::$app->getUser()->login($user)) {
                        if(Yii::$app->user->id == 1)
                            $this->redirect(Url::toRoute(['don-hang/index']));
                        else
                            $this->redirect(Url::toRoute(['don-hang/my-order']));
                    }
                }
            }
        }
        return $this->renderPartial('signup', [
            'signup' => $model,
        ]);
    }

    public function actionTrans(){
        $rvAPI = new RanVangAPI();
        Yii::$app->response->format = Response::FORMAT_JSON;
        $newText = $rvAPI->translate($_POST['text']);
        //case 'tmall':
        //            url = 'https://list.tmall.com/search_product.htm?q=';
        //            break;
        //        case '1688':
        //            url = 'https://s.1688.com/selloffer/offer_search.htm?_input_charset=utf-8&button_click=top&earseDirect=false&n=y&keywords=';
        //            break;
        //        default:
        //            url = 'https://s.taobao.com/search?q=';
        //            break;
        if($_POST['shop'] == 'shop-tao-bao')
            $url = 'https://s.taobao.com/search?q='.$newText;
        else if($_POST['shop'] == 'shop-1688')
            $url = 'https://s.1688.com/selloffer/offer_search.htm?_input_charset=utf-8&button_click=top&earseDirect=false&n=y&keywords='.$newText;
        else //tmall
            $url = 'https://list.tmall.com/search_product.htm?q='.$newText;
        return [
            'url' => $url
        ];
    }

    public function actionTestPlace(){
        $ggPlace = new PlacesApi('AIzaSyC1CcT3NVUR50aAnbPSdfnEJCRq2YJ8CY8');
        //ChIJR2RzDZcFdkgRqa0JR5wtTEw
        VarDumper::dump($ggPlace->placeAutocomplete('43 High St, Bushey WD23 1BD, Vương quốc Anh'), 10, true);
//        Yii::$app->response->format = Response::FORMAT_JSON;
//        return $ggPlace->placeDetails('ChIJDdfOnLp7SjERSQj1l6mIE84', [
//            'fields' => 'price_level,rating,review,user_ratings_total'
//        ]);
    }

    //get-data-youtube


}
