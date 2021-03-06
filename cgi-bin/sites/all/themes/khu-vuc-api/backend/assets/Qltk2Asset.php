<?php
/**
 * Created by PhpStorm.
 * User: HungLuongHien
 * Date: 6/23/2016
 * Time: 12:22 PM
 */

namespace backend\assets;


use yii\web\AssetBundle;

class Qltk2Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'backend/themes/qltk2/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'backend/themes/qltk2/assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'backend/themes/qltk2/assets/global/plugins/uniform/css/uniform.default.css',
        'backend/themes/qltk2/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',

        'backend/themes/qltk2/assets/global/css/components.css',
        'backend/themes/qltk2/assets/global/css/plugins.css',
        'backend/themes/qltk2/assets/admin/layout/css/layout.css',
        'backend/themes/qltk2/assets/admin/layout/css/themes/darkblue.css',
        'backend/themes/qltk2/assets/admin/layout/css/custom.css',
        'backend/themes/qltk2/assets/global/plugins/bootstrap-toastr/toastr.min.css',
        'backend/assets/plugins/jquery-confirm-master/dist/jquery-confirm.min.css',
        'backend/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'backend/assets/plugins/jQuery-contextMenu-master/dist/jquery.contextMenu.min.css',
        'backend/assets/js-view/jquery-confirm-v3.3.0/jquery-confirm-master/dist/jquery-confirm.min.css',

    ];
    public $js = [
//        'backend/themes/qltk2/assets/global/plugins/jquery.min.js',
        'backend/themes/qltk2/assets/global/scripts/jquery-migrate-1.2.1.min.js',
//        'backend/themes/qltk2/assets/global/plugins/jquery-inputmask/inputmask/jquery.maskMoney.js',

        'backend/themes/qltk2/assets/global/plugins/jquery-ui/jquery-ui.min.js',
//        'backend/themes/qltk2/assets/global/plugins/bootstrap/js/bootstrap.js',
        'backend/themes/qltk2/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'backend/themes/qltk2/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'backend/themes/qltk2/assets/global/plugins/jquery.blockui.min.js',
        'backend/themes/qltk2/assets/global/plugins/jquery.cokie.min.js',
//        'backend/themes/qltk2/assets/global/plugins/uniform/jquery.uniform.min.js',
        'backend/themes/qltk2/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'backend/themes/qltk2/assets/global/plugins/bootstrap-toastr/toastr.min.js',
        'backend/themes/qltk2/assets/global/scripts/metronic.js',
        'backend/themes/qltk2/assets/admin/layout/scripts/layout.js',
        'backend/themes/qltk2/assets/admin/layout/scripts/quick-sidebar.js',
        'backend/assets/plugins/jQuery-contextMenu-master/dist/jquery.contextMenu.min.js',
        'backend/themes/qltk2/assets/global/plugins/jquery-inputmask/inputmask/jquery.maskMoney.js',
//        'backend/assets/js-view/Inputmask-4.x/dist/jquery.inputmask.bundle.js',
        'backend/assets/js-view/jquery.PrintArea.js',
        'backend/assets/plugins/jquery-confirm-master/dist/jquery-confirm.min.js',

        'backend/themes/qltk2/assets/global/scripts/main.js',
        'backend/themes/qltk2/assets/global/scripts/doimatkhau.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
