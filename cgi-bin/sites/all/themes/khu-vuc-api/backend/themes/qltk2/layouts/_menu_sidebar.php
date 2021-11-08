<?php
/** 12/26/2019 8:14 AM**/
/** Admin **/
/** fast24h **/
use yii\helpers\Html;
use common\models\myAPI;
?>
<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="heading">
        <h3 class="uppercase">Chức năng</h3>
    </li>
    <li>
        <?=Html::a('<i class="fa fa-bar-chart-o"></i> <span class="title">Tổng quan </span>', \yii\helpers\Url::to(['site/index']))?>
    </li>
    <?php if(\common\models\myAPI::isAccess2('KhachHang', 'Index')): ?>
        <li>
            <?=Html::a('<i class="fa fa-users"></i> <span class="title">Khách hàng </span>', \yii\helpers\Url::to(['khach-hang/index']))?>
        </li>
    <?php endif; ?>
    <li>
        <a href="javascript:;">
            <i class="fa fa-cubes"></i>
            <span class="title">Quản lý nhập hàng</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <?php if(\common\models\myAPI::isAccess2('DonHang', 'Gio-hang')): ?>
                <li>
                    <?=Html::a('<i class="fa fa-cubes"></i> Giỏ hàng', \yii\helpers\Url::to(['don-hang/gio-hang']))?>
                </li>
            <?php endif; ?>
            <?php if(\common\models\myAPI::isAccess2('DonHang', 'Cho-bao-gia')): ?>
                <li>
                    <?=Html::a('<i class="fa fa-cubes"></i> Chờ báo giá', \yii\helpers\Url::to(['don-hang/cho-bao-gia']))?>
                </li>
            <?php endif; ?>
            <?php if(\common\models\myAPI::isAccess2('DonHang', 'Index')): ?>
                <li>
                    <?=Html::a('<i class="fa fa-cubes"></i> Đơn hàng đang xử lý', \yii\helpers\Url::to(['don-hang/index']))?>
                </li>
            <?php endif; ?>
            <?php if(\common\models\myAPI::isAccess2('DonHang', 'My-order') && !myAPI::isAccess2('DonHang', 'Index')): ?>
                <li>
                    <?=Html::a('<i class="fa fa-cubes"></i> Danh sách đơn hàng', \yii\helpers\Url::to(['don-hang/my-order']))?>
                </li>
            <?php endif; ?>
            <?php if(\common\models\myAPI::isAccess2('DonHang', 'Tim-kiem-san-pham')): ?>
                <li>
                    <?=Html::a('<i class="fa fa-search"></i> Tìm kiếm sản phẩm', \yii\helpers\Url::to(['don-hang/tim-kiem-san-pham']))?>
                </li>
            <?php endif; ?>
            <li>
                <?=Html::a('<i class="fa fa-chrome"></i> Công cụ đặt hàng','#')?>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-truck"></i>
            <span class="title">Quản lý giao hàng</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?=\yii\helpers\Url::toRoute('don-hang/list-yeu-cau-giao-hang')?>" title="Yêu cầu giao hàng"><i class="fa fa-send"></i> Yêu cầu giao hàng</a>
            </li>
            <li>
                <a href="<?=\yii\helpers\Url::toRoute('don-hang/phieu-giao')?>"  title="Danh sách phiếu giao"><i class="fa fa-truck"></i> Danh sách phiếu giao</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-shopping-bag"></i>
            <span class="title">Quản lý ví tiền</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <?=Html::a('<i class="fa fa-money"></i> Nạp tiền ', '#')?>
            </li>
            <li>
                <?=Html::a('<i class="fa fa-send"></i> Rút tiền ', '#')?>
            </li>
            <li>
                <?=Html::a('<i class="fa fa-money"></i> Giao dịch ', \yii\helpers\Url::to(['giao-dich/index']))?>
            </li>
        </ul>
    </li>

    <li>
        <?=Html::a('<i class="fa fa-user"></i> <span class="title">Cá nhân</span>', '#')?>
    </li>

    <li>
        <?=Html::a('<i class="fa fa-bar-chart-o"></i> <span class="title">Thống kê </span>', \yii\helpers\Url::to(['thong-ke/index']))?>
    </li>
    <?php if(myAPI::isAccess2('Cauhinh', 'Index') ||
        myAPI::isAccess2('User', 'Index') ||
        myAPI::isAccess2('VaiTro', 'Index') ||
        myAPI::isAccess2('ChucNang', 'Index') ||
        myAPI::isAccess2('PhanQuyen', 'Index') ||
        myAPI::isAccess2('CauHinhSmtp', 'Index')):
        ?>
        <li class="classic-menu-dropdown">
            <a data-toggle="dropdown" href="javascript:;" data-hover="megamenu-dropdown" data-close-others="true">
                <i class="fa fa-cog"></i> <span class="title">Hệ thống </span> <span class="arrow "></span></a>
            <ul class="sub-menu">
                <?php if(myAPI::isAccess2('Cauhinh', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-cogs"></i> Cấu hình', Yii::$app->urlManager->createUrl(['cauhinh']))?>
                    </li>
                <?php endif; ?>
                <?php if(myAPI::isAccess2('User', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-users"></i> Thành viên', Yii::$app->urlManager->createUrl(['user']))?>
                    </li>
                <?php endif; ?>
                <?php if(myAPI::isAccess2('VaiTro', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-users"></i> Vai trò', Yii::$app->urlManager->createUrl(['vai-tro']))?>
                    </li>
                <?php endif; ?>
                <?php if(myAPI::isAccess2('ChucNang', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-bars"></i> Chức năng', Yii::$app->urlManager->createUrl(['chuc-nang']))?>
                    </li>
                <?php endif; ?>
                <?php if(myAPI::isAccess2('PhanQuyen', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-users"></i> Phân quyền', Yii::$app->urlManager->createUrl(['phan-quyen']))?>
                    </li>
                <?php endif; ?>
                <?php if(myAPI::isAccess2('CauHinhSmtp', 'Index')): ?>
                    <li>
                        <?=Html::a('<i class="fa fa-cog"></i> Cấu hình SMTP', Yii::$app->urlManager->createUrl(['cau-hinh-smtp']))?>
                    </li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>

    <li>
        <a href="javascript:;">
            <i class="fa fa-info-circle"></i>
            <span class="title">Góc thông tin</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="#">Biểu phí</a>
            </li>
            <li>
                <a href="#">Quy định</a>
            </li>
            <li>
                <a href="#">Hướng dẫn nhập hàng</a>
            </li>
        </ul>
    </li>
    <li>
        <?=Html::a('<i class="fa fa-phone-square"></i> <span class="title">Hotline: <strong>904909340</strong> </span>', '#')?>
    </li>
</ul>
