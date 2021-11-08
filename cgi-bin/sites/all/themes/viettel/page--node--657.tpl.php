<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div class="main-wrapper">
    <header class="header">
        <!-- haeader Mid Start -->
        <div class="haeader-bottom-area bg-menu header-sticky">
            <div class="haeader-mid-area border-bm-1 d-none d-lg-block bgc-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <div class="logo-area">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                       id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <!--            --><?php //if ($page['center_header']) print  html_entity_decode(render($page['center_header']))?>
                            <div class="center-header">
                                <span class="item-center-header"><a href="#"><i class="fas fa-globe"></i> Giới thiệu Viettel </a></span>
                                <span class="item-center-header"><a href="#"><i class="fas fa-newspaper"></i> Tin tức sự kiện</a></span>
                                <span class="item-center-header"><i class="fas fa-phone-square"></i> Hotline kinh doanh:<a href="tel:0868626057">0868626057</a></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="right-blok-box text-white d-flex ">
                                <div class="shopping-cart-wrap d-none d-sm-block">
                                    <?php if ($page['form_front_search']) print render($page['form_front_search']) ?>
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="/sites/default/files/bg-menu.png" alt="Phú An"></a>
                                    </div>
                                </div>
                            </div>

                            <!--              --><?php //if ($page['right_header']) print  html_entity_decode(render($page['right_header']))?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="main-menu-area white_text">
                            <!--  Start Mainmenu Nav-->
                            <nav class="main-navigation">
                                <?php print getMainMenuMinhHienStore(); ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 col-md-6 d-block d-lg-none">
                        <div class="logo">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                   id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-7">
                        <div class="right-blok-box text-white d-flex ">
                            <div class="shopping-cart-wrap d-none d-sm-block">
                                <!--                              --><?php //if ($page['form_front_search']) print render($page['form_front_search'])?>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="/sites/default/files/bg-menu-1.png" alt="Phú An"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- haeader bottom End -->


        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fas fa-times"></i>
                </div>

                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <?php if ($page['search_mobile']) print render($page['search_mobile']) ?>
                    </div>

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <?php print getMainMenuMobileMinhHienStore() ?>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->


                    <!-- offcanvas widget area start -->
                    <!--        <div class="offcanvas-widget-area">-->
                    <!--          <div class="top-info-wrap text-left text-black">-->
                    <!--            <h5>Giở hàng của bạn</h5>-->
                    <!--            <ul class="offcanvas-account-container">-->
                    <!--              <li><a href="/cart">Giỏ hàng</a></li>-->
                    <!--              <li><a href="/checkout">Thanh toán</a></li>-->
                    <!--            </ul>-->
                    <!--          </div>-->
                    <!---->
                    <!--        </div>-->
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->

    </header>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb" class="breadcrumb-list"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <?php print $messages; ?>
    <!-- main-content-wrap start -->
    <div class="contact-form-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <!-- billing-details-wrap start -->
                    <div class="billing-details-wrap">
                        <form action="#" id="form-don-hang">
                            <h3 class="shoping-checkboxt-title">Thanh toán đơn hàng</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="single-form-row">
                                        <label>Họ tên <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="ho_ten" id="ho_ten">
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="single-form-row">
                                        <label>Số điện thoại <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="phone" id="phone" maxlength="10">
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form-row">
                                        <label>Tỉnh/ Thành phố <span class="required">*</span></label>
                                        <select  class="form-control" id="thanh_pho">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form-row">
                                        <label>Quận/ Huyện <span class="required">*</span></label>
                                        <div >
                                            <select id="quan_huyen" class="form-control">
                                                <option> - Chọn Quận Huyện - </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form-row">
                                        <label>Phường/ Xã <span class="required">*</span></label>
                                        <div >
                                            <select id="phuong_xa" class="form-control">
                                                <option> - Chọn Phường Xã - </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="single-form-row">
                                        <label>Địa chỉ chi tiết <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="dia_chi_chi_tiet" id="dia_chi_chi_tiet">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Ghi chú </span></label>
                                        <input type="text" class="form-control" name="ghi_chu" id="ghi_chu">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Mã giảm giá</span></label>
                                        <input type="text" class="form-control" name="ma_giam_gia" id="ma_giam_gia">
                                    </p>
                                </div>
                                <input type="hidden" value="<?php if ($_GET['data']) print $_GET['data']?>" id="dich_vu" name="dich-vu">
                                <input type="hidden" value="<?php if ($_GET['price']) print str_replace('.','',$_GET['price'])?>" id="price" name="price">
                            </div>
                        </form>
                    </div>
                    <!-- billing-details-wrap end -->
                </div>
                <div class="col-lg-4">
                    <div class="order-info-wrap">
                        <h3 class="text-uppercase mb-30">Đơn hàng</h3>
                        <div class="item-order">
                            <span class="title-item">Dịch vụ cố định</span><span><?=$_GET['data']?></span>
                        </div>
                        <div class="item-order">
                            <span class="title-item">Phí hòa mạng</span><span><?=$_GET['price']?> đ</span>
                        </div>
                        <div class="item-order">
                            <span class="title-item">Tổng giá phải thanh toán</span><span><?=$_GET['price']?> đ</span>
                        </div>
<!--                        --><?php //if ($page['contact_info']) print html_entity_decode(render($page['contact_info']))?>
                    </div>
                    <p class="action mt-30"><a class="btn btn-white btn-full" data-toggle="modal" data-target="#exampleModalCenter" id="check_out" href="#">Đăng kí</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 id="title-modal">Đăng kí thành công</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
    <footer>
        <div class="footer-top section-pb section-pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <?php if ($page['col_1']) print render($page['col_1']) ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <?php if ($page['col_2']) print render($page['col_2']) ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <?php if ($page['col_3']) print render($page['col_3']) ?>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <?php if ($page['col_4']) print (render($page['col_4'])) ?>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <?php if ($page['col_5']) print (render($page['col_5'])) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <?php if ($page['bottom_footer']) print render($page['bottom_footer']) ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
