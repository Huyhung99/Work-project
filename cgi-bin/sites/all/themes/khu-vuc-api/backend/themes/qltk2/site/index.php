<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataColumn;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'PHẦN MỀM QUẢN LÝ ĐƠN HÀNG');
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN DASHBOARD STATS -->
<div class="row">

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue-madison">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    1.349
                </div>
                <div class="desc">
                    Giỏ hàng
                </div>
            </div>
            <a class="more" href="javascript:;">
                Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red-intense">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    2.546
                </div>
                <div class="desc">
                    Đơn hàng
                </div>
            </div>
            <a class="more" href="javascript:;">
                Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple-plum">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    321
                </div>
                <div class="desc">
                    Sản phẩm tồn kho
                </div>
            </div>
            <a class="more" href="javascript:;">
                Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green-haze">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    125.000.000đ
                </div>
                <div class="desc">
                    Doanh thu tháng <?=date("m"); ?>
                </div>
            </div>
            <a class="more" href="javascript:;">
                Xem chi tiết <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>
<!-- END DASHBOARD STATS -->

<div class="clearfix"></div>

<!-- BEGIN PORTLET-->
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-bar-chart font-green-sharp hide"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Thống kê đơn hàng</span>
            <span class="caption-helper">qua các tháng...</span>
        </div>
    </div>
    <div class="portlet-body">
        <div id="site_statistics_content" class="display-none">
            <div id="site_statistics" class="chart">

            </div>
        </div>
    </div>
</div>
<!-- END PORTLET-->

<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-share font-blue-steel hide"></i>
                    <span class="caption-subject font-blue-steel bold uppercase">Hành động gần đây</span>
                </div>
                <div class="actions">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-default btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            Filter By <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                            <label><input type="checkbox"/> Finance</label>
                            <label><input type="checkbox" checked=""/> Membership</label>
                            <label><input type="checkbox"/> Customer Support</label>
                            <label><input type="checkbox" checked=""/> HR</label>
                            <label><input type="checkbox"/> System</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                    <ul class="feeds">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 4 pending tasks. <span class="label label-sm label-warning ">
														Take action <i class="fa fa-share"></i>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    Just now
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                Finance Report for year 2013 has been released.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date">
                                        20 mins
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-danger">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    24 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    30 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    24 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    2 hours
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                IPO Report for year 2013 has been released.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date">
                                        20 mins
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 4 pending tasks. <span class="label label-sm label-warning ">
														Take action <i class="fa fa-share"></i>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    Just now
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                Finance Report for year 2013 has been released.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date">
                                        20 mins
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    24 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    30 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    24 mins
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc">
                                            Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date">
                                    2 hours
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                IPO Report for year 2013 has been released.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date">
                                        20 mins
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="scroller-footer">
                    <div class="btn-arrow-link pull-right">
                        <a href="javascript:;">See All Records</a>
                        <i class="icon-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-globe font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Khách hàng mới</span>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_3" data-toggle="tab">
                            Recent Users </a>
                    </li>
                </ul>
            </div>
            <div class="portlet-body">
                <!--BEGIN TABS-->
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_3">
                        <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Robert Nilson </a>
                                            <span class="label label-sm label-success label-mini">
														Approved </span>
                                        </div>
                                        <div>
                                            29 Jan 2013 10:45AM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 10:45AM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Eric Kim </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 12:45PM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-danger">
														In progress </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 11:55PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Eric Kim </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 12:45PM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-danger">
														In progress </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 11:55PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Eric Kim </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 12:45PM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-danger">
														In progress </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 11:55PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Eric Kim </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 12:45PM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-danger">
														In progress </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 11:55PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Eric Kim </a>
                                            <span class="label label-sm label-info">
														Pending </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 12:45PM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 user-info">
                                    <img alt="" src="backend\themes\qltk2\assets\admin\layout\img\avatar.png" class="img-responsive"/>
                                    <div class="details">
                                        <div>
                                            <a href="javascript:;">
                                                Lisa Miller </a>
                                            <span class="label label-sm label-danger">
														In progress </span>
                                        </div>
                                        <div>
                                            19 Jan 2013 11:55PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<div class="clearfix">
</div>
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/backend/themes/qltk2/assets/global/plugins/bootstrap/js/bootstrap.min.js',[ 'depends' => ['backend\assets\Qltk2Asset'], 'position' => \yii\web\View::POS_END ]); ?>
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/backend/themes/qltk2/assets/global/plugins/flot/jquery.flot.min.js',[ 'depends' => ['backend\assets\Qltk2Asset'], 'position' => \yii\web\View::POS_END ]); ?>
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/backend/themes/qltk2/assets/global/plugins/flot/jquery.flot.resize.min.js',[ 'depends' => ['backend\assets\Qltk2Asset'], 'position' => \yii\web\View::POS_END ]); ?>
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/backend/themes/qltk2/assets/global/plugins/flot/jquery.flot.categories.min.js',[ 'depends' => ['backend\assets\Qltk2Asset'], 'position' => \yii\web\View::POS_END ]); ?>

<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/backend/assets/js-view/index-site.js',[ 'depends' => ['backend\assets\Qltk2Asset'], 'position' => \yii\web\View::POS_END ]); ?>
