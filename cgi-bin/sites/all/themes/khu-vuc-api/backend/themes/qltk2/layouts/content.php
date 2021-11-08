<?php
/**
 * Created by PhpStorm.
 * User: HungLuongHien
 * Date: 6/23/2016
 * Time: 1:54 PM
 */

use common\models\myAPI;
use yii\helpers\Html;
?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <?=$this->render("_menu_sidebar");?>
        </div>
        <!-- END HORIZONTAL RESPONSIVE MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                <?=$this->title?>
            </h3>
            <hr/>
            <!-- END PAGE HEADER-->
            <div id="print-block"></div>
            <div class="thongbao"></div>
            <?= $content ?>
        </div>
        <div class="page-footer">
            <div class="page-footer-inner">
                <?=date("Y") ?> &copy; Fast24h by <a href="https://minhhien.com.vn" target="_blank" title="Công ty TNHH Công nghệ và Dịch vụ Minh Hiền">MinhHien Solutions</a>.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
