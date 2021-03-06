<?php


namespace backend\controllers;


use app\models\Province;
use common\models\myAPI;
use common\models\exportDanhSachTau;
use PhpOffice\PhpSpreadsheet\IOFactory;
use SKAgarwal\GoogleApi\PlacesApi;
use yii\helpers\Json;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\rest\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use Yii;

class ApiController extends Controller
{
    /** get-data */
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

    public function callAPIBep($row){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://mamnonlaxanh.com/thao-tao-them-lop-hoc-new',
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

    public function callAPIQuanLySanPham($row){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://bepxuyenviet.minhhien.com.vn/sua-vi-tri-san-pham',
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

    public function callAPIQuanLyhoivien($row){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://hiephoivantai.minhhien.com.vn/hoi-vien-api',
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
        // Token = md5(md5(YmdHi))
        // N???u token <> md5(md5(YmdHi (+-3)p )) th?? token sai
      $nam_hoc=$_POST['nam_hoc'];
      $lop_hoc=$_POST['lop_hoc'];
      $artimes = [];
        for($i=0;$i<=3;$i++){
            $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
        }
        if(!in_array($_POST['token_form_upload_excel_hocsinh'], $artimes))
            throw new HttpException(500, 'Token h???t h???n');
        else{
            $file = UploadedFile::getInstanceByName('myfile');
//            VarDumper::dump($file->extension, 10, true); exit;
            //if($file->extension)
            $path = dirname(dirname(__DIR__)).'/file_upload/'.time().myAPI::createCode($file->name);
            if($file->saveAs($path)){ //UPLOAD LEN HOSTING
                // ?????c file Excel
                $objFile = IOFactory::identify($path);
                $objData = IOFactory::createReader($objFile);
                $objData->setReadDataOnly(true);
                $objData->setReadEmptyCells(false);
                $objPHPExcel = $objData->load($path);
                $currentSheet = $objPHPExcel->getSheet(0);
                $data = $currentSheet->toArray(null, true, true, true);
                $strResult = [];
//              VarDumper::dump($data, 10, true);
              foreach ($data as $index => $item) {
                    if($index >2 ){
                      // G???i API L??u th??ng tin h???c sinh
                        /**
                         *
                        A: 1
                        B: "?????ng Ho??i "
                        C: "An"
                        D: "X"
                        E: 43030
                        F: "?????NG V??N CHI???N"
                        G: "B??I TH??? H???NH"
                        H: "T?? S??N"
                        I: "0987.309.918"
                        J: null
                         * Cau truc $item = ['A' => 1, 'B' => '?????ng Ho??i', 'C' => 'An', .....]
                         */
//                      array_push($item,$nam_hoc,$lop_hoc);
                      $item['nam']=$nam_hoc;
                      $item['lop']=$lop_hoc;
                      $item['stt']=$index;
                      $obj = Json::decode($this->callAPIInsertNewStudent($item)) ;
                      $strResult[] = $obj['gioi_tinh'];
                      $strResult_1=$obj['thongbaoloi'];
                    }
                }
              return [
                    'tableHocSinh' => $this->renderAjax('tableHocSinh',[
                      'data' => $strResult
                    ]),
                    'thongbao'=>$strResult_1
                ];
            }
        }
    }
    /** read-excel-bep */
    public function actionReadExcelBep(){
        // Token = md5(md5(YmdHi))
        // N???u token <> md5(md5(YmdHi (+-3)p )) th?? token sai
      $artimes = [];
        for($i=0;$i<=3;$i++){
            $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
        }
        if(!in_array($_POST['token_form_upload_excel_hocsinh'], $artimes))
            throw new HttpException(500, 'Token h???t h???n');
        else{
            $file = UploadedFile::getInstanceByName('myfile');
//            VarDumper::dump($file->extension, 10, true); exit;
            //if($file->extension)
            $path = dirname(dirname(__DIR__)).'/file_upload/'.time().myAPI::createCode($file->name);
            if($file->saveAs($path)){ //UPLOAD LEN HOSTING
                // ?????c file Excel
                $objFile = IOFactory::identify($path);
                $objData = IOFactory::createReader($objFile);
                $objData->setReadDataOnly(true);
                $objData->setReadEmptyCells(false);
                $objPHPExcel = $objData->load($path);
                $currentSheet = $objPHPExcel->getSheet(0);
                $data = $currentSheet->toArray(null, true, true, true);
                $strResult = [];
                $abc='';
                $abcd=[];
//              VarDumper::dump($data, 10, true); exit;

              foreach ($data as $index => $item) {
                    if($index >=1 ){
                        // G???i API L??u th??ng tin h???c sinh
                        /**
                         *
                        A: 1
                        B: "?????ng Ho??i "
                        C: "An"
                        D: "X"
                        E: 43030
                        F: "?????NG V??N CHI???N"
                        G: "B??I TH??? H???NH"
                        H: "T?? S??N"
                        I: "0987.309.918"
                        J: null
                         * Cau truc $item = ['A' => 1, 'B' => '?????ng Ho??i', 'C' => 'An', .....]
                         */
//                      $strResult[$index]=$item;
                      $abc=$abc.'{{}}'.$item['A'];
                    }
                }
                $strResult['ten']=$abc;
                $obj = Json::decode($this->callAPIBep($strResult)) ;
                $abcd=$obj['thongbao'];
                return [
                  'tablebep' => $abcd,
                ];
            }
        }
    }

    /** read-excel-san-pham-bep */
    public function actionReadExcelSanPhamBep(){
        // Token = md5(md5(YmdHi))
        // N???u token <> md5(md5(YmdHi (+-3)p )) th?? token sai
      $artimes = [];
        for($i=0;$i<=3;$i++){
            $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
        }
        if(!in_array($_POST['token_form_upload_excel_hocsinh'], $artimes))
            throw new HttpException(500, 'Token h???t h???n');
        else{
            $file = UploadedFile::getInstanceByName('myfile');
//            VarDumper::dump($file->extension, 10, true); exit;
            //if($file->extension)
            $path = dirname(dirname(__DIR__)).'/file_upload/'.time().myAPI::createCode($file->name);
            if($file->saveAs($path)){ //UPLOAD LEN HOSTING
                // ?????c file Excel
                $objFile = IOFactory::identify($path);
                $objData = IOFactory::createReader($objFile);
                $objData->setReadDataOnly(true);
                $objData->setReadEmptyCells(false);
                $objPHPExcel = $objData->load($path);
                $currentSheet = $objPHPExcel->getSheet(0);
                $data = $currentSheet->toArray(null, true, true, true);
                $strResult = [];
                $str='';
                $abcd=[];
//              VarDumper::dump($data, 10, true); exit;

              foreach ($data as $index => $item) {
                    if($index >=1 ){
                        // G???i API L??u th??ng tin h???c sinh
                        /**
                         *
                        A: 1
                        B: "?????ng Ho??i "
                        C: "An"
                        D: "X"
                        E: 43030
                        F: "?????NG V??N CHI???N"
                        G: "B??I TH??? H???NH"
                        H: "T?? S??N"
                        I: "0987.309.918"
                        J: null
                         * Cau truc $item = ['A' => 1, 'B' => '?????ng Ho??i', 'C' => 'An', .....]
                         */
//                      $strResult[$index]=$item;
                        $str=$str.'{{}}'.$item['A'].'({})'.$item['B'].'({})'.$item['C'];

                    }
                }
//              VarDumper::dump($str, 10, true);

                $strResult['data']=$str;
                $obj = Json::decode($this->callAPIQuanLySanPham($strResult));
                $abcd['data_olds']=$obj['data_olds'];
                $abcd['data_news']=$obj['data_news'];
                $abcd['code_name_olds']=$obj['code_name_olds'];
                $abcd['data_storage']=$obj['data_storage'];
                $table = $obj['str'];
                return [
                  'tablebep' => $abcd,
                  'table' => $table
                ];
            }
        }
    }

    /** read-excel-hoi-vien */
    public function actionReadExcelHoiVien(){
    // Token = md5(md5(YmdHi))
    // N???u token <> md5(md5(YmdHi (+-3)p )) th?? token sai
    $artimes = [];
    for($i=0;$i<=3;$i++){
      $artimes[] = md5(md5(date("YmdHi",strtotime("-{$i} minutes", strtotime('now')))));
    }
    if(!in_array($_POST['token_form_upload_excel_hocsinh'], $artimes))
      throw new HttpException(500, 'Token h???t h???n');
    else{
      $file = UploadedFile::getInstanceByName('myfile');
      //            VarDumper::dump($file->extension, 10, true); exit;
      //if($file->extension)
      $path = dirname(dirname(__DIR__)).'/file_upload/'.time().myAPI::createCode($file->name);
      if($file->saveAs($path)){ //UPLOAD LEN HOSTING
        // ?????c file Excel
        $objFile = IOFactory::identify($path);
        $objData = IOFactory::createReader($objFile);
        $objData->setReadDataOnly(true);
        $objData->setReadEmptyCells(false);
        $objPHPExcel = $objData->load($path);
        $currentSheet = $objPHPExcel->getSheet(0);
        $data = $currentSheet->toArray(null, true, true, true);
        $strResult = [];
        $str='';
        $abcd=[];
        //              VarDumper::dump($data, 10, true); exit;
        foreach ($data as $index => $item) {
          if($index >=2 ){
            // G???i API L??u th??ng tin h???c sinh
            /**
             *
            A: 1
            B: "?????ng Ho??i "
            C: "An"
            D: "X"
            E: 43030
            F: "?????NG V??N CHI???N"
            G: "B??I TH??? H???NH"
            H: "T?? S??N"
            I: "0987.309.918"
            J: null
             * Cau truc $item = ['A' => 1, 'B' => '?????ng Ho??i', 'C' => 'An', .....]
             */
            //                      $strResult[$index]=$item;
            $item['kieu_node']=$_POST['kieu_node'];
            if($item['kieu_node']=='tau')
            {
              $item['node']=$_POST['node'];
            }
            $obj = Json::decode($this->callAPIQuanLyhoivien($item));

            $strResult[]=$obj['thong_bao'];
          }
        }
        $kieu=$obj['kieu_node'];
        return [
          'table'=>$this->renderAjax('table_hoi_vien',[
            'data' => $strResult,
            'kieu' => $kieu,
            'ten_hoi_vien'=>$_POST['node']
          ]),
        ];
      }
    }
  }

    /** export-excel-hoi-vien */
    public function actionExportExcelHoiVien(){
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '-1');
        $data = $_POST;

        $export = new exportDanhSachTau();
        $export->data = $data;
        $export->stream = false;
        $export->path_file = dirname(dirname(__DIR__)).'/files_excel/';
        $file_name = $export->run();
        $file =  str_replace('index.php','', Url::home(true)).'files_excel/'.$file_name;

        Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'title' => 'T???i file k???t qu???',
            'link_file' => Html::a('<i class="fa fa-cloud-download"></i> Nh???n v??o ????y ????? t???i file v???!', $file, ['class' => 'text-primary', 'target' => '_blank'])
        ];
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
            throw new HttpException(500, 'Token h???t h???n');
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
