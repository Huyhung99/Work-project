<?php
namespace common\models;
/**
 * @property \PHPExcel $objPHPExcel
 */


use backend\models\DanhMuc;
use backend\models\HoiVien;
use backend\models\LinhVucPhanLoaiHoiVien;
use backend\models\NganHangHoiVien;
use backend\models\QuanLyHoiVien;
use backend\models\QuanLySanPham;
use backend\models\SanPham;
use backend\models\TinhHinhKinhDoanh;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use yii\base\Exception;
use yii\helpers\Html;
use yii\helpers\VarDumper;

/**
 * @author Nikola Kostadinov
 * @license MIT License
 * @version 0.3
 * @link http://yiiframework.com/extension/eexcelview/
 *
 * @fork 0.33ab
 * @forkversion 1.1
 * @author A. Bennouna
 * @organization tellibus.com
 * @license MIT License
 * @link https://github.com/tellibus/tlbExcelView
 */

/* Usage :
  $this->widget('application.components.widgets.tlbExcelView', array(
    'id'                   => 'some-grid',
    'dataProvider'         => $model->search(),
    'grid_mode'            => $production, // Same usage as EExcelView v0.33
    //'template'           => "{summary}\n{items}\n{exportbuttons}\n{pager}",
    'title'                => 'Some title - ' . date('d-m-Y - H-i-s'),
    'creator'              => 'Your Name',
    'subject'              => mb_convert_encoding('Something important with a date in French: ' . utf8_encode(strftime('%e %B %Y')), 'ISO-8859-1', 'UTF-8'),
    'description'          => mb_convert_encoding('Etat de production généré à la demande par l\'administrateur (some text in French).', 'ISO-8859-1', 'UTF-8'),
    'lastModifiedBy'       => 'Some Name',
    'sheetTitle'           => 'Report on ' . date('m-d-Y H-i'),
    'keywords'             => '',
    'category'             => '',
    'landscapeDisplay'     => true, // Default: false
    'A4'                   => true, // Default: false - ie : Letter (PHPExcel default)
    'RTL'                  => false, // Default: false
    'pageFooterText'       => '&RThis is page no. &P of &N pages', // Default: '&RPage &P of &N'
    'automaticSum'         => true, // Default: false
    'decimalSeparator'     => ',', // Default: '.'
    'thousandsSeparator'   => '.', // Default: ','
    //'displayZeros'       => false,
    //'zeroPlaceholder'    => '-',
    'sumLabel'             => 'Column totals:', // Default: 'Totals'
    'borderColor'          => '00FF00', // Default: '000000'
    'bgColor'              => 'FFFF00', // Default: 'FFFFFF'
    'textColor'            => 'FF0000', // Default: '000000'
    'rowHeight'            => 45, // Default: 15
    'headerBorderColor'    => 'FF0000', // Default: '000000'
    'headerBgColor'        => 'CCCCCC', // Default: 'CCCCCC'
    'headerTextColor'      => '0000FF', // Default: '000000'
    'headerHeight'         => 10, // Default: 20
    'footerBorderColor'    => '0000FF', // Default: '000000'
    'footerBgColor'        => '00FFCC', // Default: 'FFFFCC'
    'footerTextColor'      => 'FF00FF', // Default: '0000FF'
    'footerHeight'         => 50, // Default: 20
    'columns'              => $grid // an array of your CGridColumns
)); */

class exportDanhSachSanPhamDangBan
{
    public $data;
    public $path_file;
//    public $tienTraLai;
    //Document properties
    public $creator = 'MINHHIEN SETE CO.,Ltd';
    public $title = 'Danh sách sản phẩm đang bán';
    public $subject = 'Danh sách sản phẩm';
    public $description = '';
    public $category = '';
    public $lastModifiedBy = 'MinhHienSETE CO.,Ltd';
    public $keywords = '';
    public $sheetTitle = 'Danh sach san pham dang ban';
    public $legal = 'Danh sach san pham dang ban';
    public $landscapeDisplay = false;
    public $A4 = false;
    public $RTL = false;
    public $pageFooterText = '&RPage &P of &N';

    //config
    public $autoWidth = true;
    public $exportType = 'Excel2007';
    public $disablePaging = true;
    public $filename = null; //export FileName
    public $stream = true; //stream to browser
    public $grid_mode = 'export'; //Whether to display grid ot export it to selected format. Possible values(grid, export)
    public $grid_mode_var = 'grid_mode'; //GET var for the grid mode

    //options
    public $automaticSum = false;
    public $sumLabel = 'Totals';
    public $decimalSeparator = '.';
    public $thousandsSeparator = ',';
    public $displayZeros = false;
    public $zeroPlaceholder = '-';
    public $border_style;
    public $borderColor = '000000';
    public $bgColor = 'FFFFFF';
    public $textColor = '000000';
    public $rowHeight = 15;
    public $headerBorderColor = '000000';
    public $headerBgColor = 'CCCCCC';
    public $headerTextColor = '000000';
    public $headerHeight = 20;
    public $footerBorderColor = '000000';
    public $footerBgColor = 'FFFFCC';
    public $footerTextColor = '0000FF';
    public $footerHeight = 20;
    public static $fill_solid;
    public static $papersize_A4;
    public static $orientation_landscape;
    public static $horizontal_center;
    public static $horizontal_right;
    public static $vertical_center;
    public static $horizontal_left;
    public static $style = array();
    public static $headerStyle = array();
    public static $footerStyle = array();
    public static $summableColumns = array();

    public static $objPHPExcel;
    public static $activeSheet;

    //buttons config
    public $exportButtonsCSS = 'summary';
    public $exportButtons = array('Excel2007');
    public $exportText = 'Export to: ';

    //callbacks
    public $onRenderHeaderCell = null;
    public $onRenderDataCell = null;
    public $onRenderFooterCell = null;

    //mime types used for streaming
    public $mimeTypes = array(
        'Excel5'	=> array(
            'Content-type'=>'application/vnd.ms-excel',
            'extension'=>'xls',
            'caption'=>'Excel(*.xls)',
        ),
        'Excel2007'	=> array(
            'Content-type'=>'application/vnd.ms-excel',
            'extension'=>'xlsx',
            'caption'=>'Excel(*.xlsx)',
        ),
        'PDF'		=>array(
            'Content-type'=>'application/pdf',
            'extension'=>'pdf',
            'caption'=>'PDF(*.pdf)',
        ),
        'HTML'		=>array(
            'Content-type'=>'text/html',
            'extension'=>'html',
            'caption'=>'HTML(*.html)',
        ),
        'CSV'		=>array(
            'Content-type'=>'application/csv',
            'extension'=>'csv',
            'caption'=>'CSV(*.csv)',
        )
    );


    /**
     * @param $activeSheet Worksheet
     */
    public function renderBody($activeSheet){
        $data = $this->data;
        $activeSheet
            ->setCellValue("A2", 'Cập nhật đến ngày '.date('m/d/Y h:i:s', time()));
        /** @var $item QuanLySanPham */
        $dong =4;
        foreach ($data as $index => $item) {

            $activeSheet
                ->setCellValue("A{$dong}", date('m/d/Y', strtotime($item->ngay_tao)))
                ->setCellValue("B{$dong}", $item->quan_huyen)
                ->setCellValue("C{$dong}", $item->dia_chi)
                ->setCellValue("D{$dong}", $item->dia_chi_cu_the)
                ->setCellValue("E{$dong}", $item->dien_thoai_chu_nha)
                ->setCellValue("F{$dong}", $item->chu_nha)
//                ->setCellValue("F{$dong}", date('m/d/Y', strtotime($item->ngay_cap_nhat)))
                ->setCellValue("G{$dong}", $item->chieu_dai.' x '.$item->chieu_rong)
                ->setCellValue("H{$dong}", $item->dien_tich)
                ->setCellValue("I{$dong}", $item->so_tang)
                ->setCellValue("J{$dong}", $item->so_can)
                ->setCellValue("K{$dong}", $item->huong)
                ->setCellValue("L{$dong}", $item->duong)
                ->setCellValue("M{$dong}", $item->gia_den == '' ? $item->gia_tu.' tỷ' : $item->gia_tu.' - '.$item->gia_den.' tỷ')
                ->setCellValue("N{$dong}", $item->nguoi_phu_trach)
                ->setCellValue("O{$dong}", $item->ghi_chu)
                ->setCellValue("P{$dong}", $item->ho_ten_nguoi_cap_nhat);
//                ->setCellValue("M{$dong}", $item->cong_thanh_toan_id != '' ? $item->congThanhToan->name : "")
//                ->setCellValue("O{$dong}", $this->tienTraLai[$index])
//                ->setCellValue("P{$dong}", date("Y-m-d H:i:s"))
//                ->setCellValue("Q{$dong}", \Yii::$app->user->identity->hoten)
//                ->setCellValue("R{$dong}", $item->user->username)
//                ->setCellValue("T{$dong}", $item->user->link_facebook)
//                ->setCellValue("U{$dong}", $item->ghi_chu);
            $dong++;
        }
        $dong--;
        formatExcel::setBorder($activeSheet, "A2:P{$dong}");
    }

    public function run()
    {
        $objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(dirname(dirname(__DIR__)).'/common/template/MAU_FILE_DANH_SACH_SAN_PHAM_DANG_BAN.xlsx');
        $activeSheet = $objPHPExcel->getActiveSheet();
        $this->renderBody($activeSheet);
        $this->filename = 'DANH_SACH_SAN_PHAM_DANG_BAN_'.time().'.xlsx';;
        $this->path_file.=$this->filename;
        $objWriter = IOFactory::createWriter($objPHPExcel, 'Xlsx'); //\PHPExcel_IOFactory::createWriter($objPHPExcel, $this->exportType);
        $objWriter->setPreCalculateFormulas(true);

        if (!$this->stream) {
            $objWriter->save($this->path_file);
        } else {
            //output to browser
            if(!$this->filename) {
                $this->filename = $this->title;
            }
            $this->cleanOutput();
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-type: '.$this->mimeTypes[$this->exportType]['Content-type']);
            header('Content-Disposition: attachment; filename="' . $this->filename . '.' . $this->mimeTypes[$this->exportType]['extension'] . '"');
            header('Cache-Control: max-age=0');
            $objWriter->save('php://output');
            exit;
        }
        return $this->filename;
    }

    /**
     * Returns the corresponding Excel column.(Abdul Rehman from yii forum)
     *
     * @param int $index
     * @return string
     */
    public function columnName($index)
    {
        --$index;
        if (($index >= 0) && ($index < 26)) {
            return chr(ord('A') + $index);
        } else if ($index > 25) {
            return ($this->columnName($index / 26)) . ($this->columnName($index%26 + 1));
        } else {
            throw new Exception("Invalid Column # " . ($index + 1));
        }
    }

    /**
     * Performs cleaning on mutliple levels.
     *
     * From le_top @ yiiframework.com
     *
     */
    private static function cleanOutput()
    {
        for ($level = ob_get_level(); $level > 0; --$level) {
            @ob_end_clean();
        }
    }
}
