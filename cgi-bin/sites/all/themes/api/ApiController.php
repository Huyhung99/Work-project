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

    //read-excel
    public function actionReadExcel(){
        // Token = md5(md5(YmdHi))
        // Nếu token <> md5(md5(YmdHi (+-3)p )) thì token sai
        $nam_hoc=$_POST['nam_hoc'];
        $lop_hoc=$_POST['lop_hoc'];
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
//                      array_push($item,$nam_hoc,$lop_hoc);
                      $item['nam']=$nam_hoc;
                      $item['lop']=$lop_hoc;
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
    public function actionReadExcelBep(){
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
                $abc='';
                $abcd=[];
//              VarDumper::dump($data, 10, true); exit;

              foreach ($data as $index => $item) {
                    if($index >=1 ){
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
    public function actionReadExcelSanPhamBep(){
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
                $str='';
                $abcd=[];
//              VarDumper::dump($data, 10, true); exit;

              foreach ($data as $index => $item) {
                    if($index >=1 ){
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
}
