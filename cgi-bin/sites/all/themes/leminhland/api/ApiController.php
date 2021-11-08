<?php


namespace backend\controllers;


use app\models\Province;
use common\models\myAPI;
use PhpOffice\PhpSpreadsheet\IOFactory;
use SKAgarwal\GoogleApi\PlacesApi;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\rest\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\web\UploadedFile;

class ApiController extends Controller
{
    public function actionGetData(){
        if($_POST['type'] == 'thanh_pho')
            $type = 1;
        else if($_POST['type'] == 'quan_huyen')
            $type = 2;
        else
            $type = 3;

        $query = Province::find()
            ->andFilterWhere(['type' => $type]);
        if($type > 1){
            $parent = Province::findOne(['id' => $_POST['parent_id']]);
            $query = $query->andFilterWhere(['parent_id' => $parent->id]);
        }

        return $query->all();
    }

    public function callAPIInsertNewStudent($row){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mamnonlaxanh.com/luu-thong-tin-hoc-sinh',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $row,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    //read-excel
    public function actionReadExcel(){
//        return [
//            'mytoken' => $_POST
//        ];
        // Token = md5(md5(YmdHi))
        // Nếu token <> md5(md5(YmdHi (+-3)p )) thì token sai
        $artimes = [];
        for($i=0;$i<=3;$i++){
            $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
        }
        if(!in_array($_POST['token_form_upload_excel_hocsinh'], $artimes))
            throw new HttpException(500, 'Token hết hạn');
        else{
            $file = UploadedFile::getInstanceByName('myfile');
//            VarDumper::dump($file->extension, 10, true); exit;
            //if($file->extension)
            $path = dirname(dirname(__DIR__)).'/file_upload/'.time().myAPI::createCode($file->name);
            if($file->saveAs($path)){ //UPLOAD LEN HOSTING
                // Đọc file Excel
                $objFile = IOFactory::identify($path);
                $objData = IOFactory::createReader($objFile);
                $objData->setReadDataOnly(true);
                $objData->setReadEmptyCells(false);
                $objPHPExcel = $objData->load($path);
                $currentSheet = $objPHPExcel->getSheet(0);
                $data = $currentSheet->toArray(null, true, true, true);
                $strResult = [];
                foreach ($data as $index => $item) {
                    if($index >=2 ){
                        // Gọi API Lưu thông tin học sinh
                        /**
                         *
                        A: 1
                        B: "Đồng Hoài "
                        C: "An"
                        D: "X"
                        E: 43030
                        F: "ĐỒNG VĂN CHIẾN"
                        G: "BÙI THỊ HẠNH"
                        H: "TÚ SƠN"
                        I: "0987.309.918"
                        J: null
                         * Cau truc $item = ['A' => 1, 'B' => 'Đồng Hoài', 'C' => 'An', .....]
                         */
                       $obj = Json::decode($this->callAPIInsertNewStudent($item) ) ;
                        $strResult[] = $obj['gioi_tinh'];
                    }
                }
                return [
                    'tableHocSinh' => $this->renderAjax('tableHocSinh',[
                        'data' => $data
                    ])
                ];
            }
        }
    }

    //send-email
    public function actionSendEmail(){
        $dataPost = file_get_contents('php://input');
//        var_dump($dataPost);
        $data = json_decode($dataPost);
//        var_dump($data);
//        exit();
        $nguon_tra_cuu = null;
        if(isset($_SERVER['HTTP_REFERER']))
            $nguon_tra_cuu = str_replace('http:', '', str_replace('https:', '', str_replace('/', '', $_SERVER['HTTP_REFERER'])));

//        $data = json_decode($data,true);
        $artimes = [];
        for($i=0;$i<=3;$i++){
            $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
        }
        $arr_email = explode('|',$data->to);
//        var_dump($arr_email);
//        exit();
        if(!in_array($data->token, $artimes))
            throw new HttpException(500, 'Token hết hạn');
        else{
            myAPI::sendMoreMailAmzon(
                $data->content,
                $data->from,
                [$arr_email],
                $data->hoTenNguoiGui,
                $data->subject
            );
        }
        return $nguon_tra_cuu;
    }

    /**
     * @param $token string
     * @param $content  string
     * @param $to array
     * @param $subject string
     * @param $hoTenNguoiGui string
     */
    public function sendEmail($token, $content, $to, $subject, $hoTenNguoiGui){

    }
}
