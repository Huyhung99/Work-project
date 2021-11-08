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
<?php print render($page['content']['metatags']); ?>
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
<!-- Hero Section Start -->
<div class="hero-slider-area">
    <?php if ($page['slider']) print render($page['slider']) ?>
</div>
<!-- Hero Section End -->
<?php if ($page['introduction']) print html_entity_decode(render($page['introduction'])) ?>
<div class="container">
    <?php if ($page['main_front']) print render($page['main_front']); ?>
</div>
<?php //if ($page['html_main_front']) print html_entity_decode(render($page['html_main_front'])); ?>
<?php if($page['bottom_main_front']) print render($page['bottom_main_front']) ;?>
<?php //if ($page['bottom_html_main_front']) print html_entity_decode(render($page['bottom_html_main_front'])); ?>
<footer>
    <div class="footer-top section-pb section-pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-footer ">
                        <div class="contact-call-wrap text-center mb-40">
                            <a href="/" title="Viettel"><img src="/sites/default/files/logo_1.png" alt="CÔNG TY TNHH PHÒNG CHÁY CHỮA CHÁY PHÚ AN" loading="lazy"></a>
                        </div>
                        <div class="footer-addres">
                            <p>WEBSITE MUA SẮM ONLINE CHÍNH THỨC CỦA VIETTEL.</p>
                            <p> Cơ quan chủ quản: Tổng Công ty Viễn thông Viettel (Viettel Telecom) - Chi nhánh Tập đoàn Công nghiệp - Viễn thông Quân đội.</p>
                            <p>Mã số doanh nghiệp: 0100109106-011 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp lần đầu ngày 18/07/2005, sửa đổi lần thứ 15 ngày 18/12/2018.</p>
                            <p>Chịu trách nhiệm nội dung: Ông Cao Anh Sơn</p>
                        </div>
                    </div>

                    <!--                    --><?php //if ($page['col_1']) print html_entity_decode(render($page['col_1'])) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">Dịch vụ di động</h6>
                        <ul class="footer-list">
                            <li><a href="#">Gói cước data</a></li>
                            <li><a href="#">Mua sim số</a></li>
                            <li><a href="#">Chuyển sang trả sau</a></li>
                            <li><a href="#">Dịch vụ GTGT</a></li>
                            <li><a href="#">Dịch vụ quốc tế</a></li>
                            <li><a href="#">Điện thoại - Thiết bị</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Internet - Truyền hình</h6>
                        <ul class="footer-list">
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Truyền hình</a></li>
                            <li><a href="#">Combo Internet - Truyền hình</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_2']) print html_entity_decode(render($page['col_2'])) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">Ứng dụng số</h6>
                        <ul class="footer-list">
                            <li><a href="#">My Viettel</a></li>
                            <li><a href="#">5Dmax</a></li>
                            <li><a href="#">Onme</a></li>
                            <li><a href="#">Myclip</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Viettel ++</h6>
                        <ul class="footer-list">
                            <li><a href="#">Ưu đãi chương trình</a></li>
                            <li><a href="#">Thông tin hội viên</a></li>
                            <li><a href="#">Giới thiệu Viettel ++</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_3']) print render($page['col_3']) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">Hỗ trợ khách hàng</h6>
                        <ul class="footer-list">
                            <li><a href="#">Quản Lý Chất Lượng Dịch vụ</a></li>
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách bảo mật thông tin cá nhân</a></li>
                            <li><a href="#">Chính sách giải quyết khiếu nại</a></li>
                            <li><a href="#">Quy chế hoạt động TMĐT</a></li>
                            <li><a href="#">Quy trình mua bán</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách thanh toán</a></li>
                            <li><a href="#">Chính sách đổi trả</a></li>
                            <li><a href="#">Tìm kiếm cửa hàng</a></li>
                            <li><a href="#">Chat online với CSKH</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                            <li><a href="#">Video hướng dẫn</a></li>
                            <li><a href="#">Chuyển mạng giữ số</a></li>
                            <li><a href="#">Góp ý sản phẩm dịch vụ</a></li>
                            <li><a href="#">Gọi video call với tổng đài CSKH</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_4']) print (render($page['col_4'])) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">Tiện ích</h6>
                        <ul class="footer-list">
                            <li><a href="#">Chuyển đổi thuê bao trả trước trả sau</a></li>
                            <li><a href="#">Đổi sim</a></li>
                            <li><a href="#">Kiểm tra thông tin thẻ cào</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Quản lý cước</h6>
                        <ul class="footer-list">
                            <li><a href="#">Tra cứu cước</a></li>
                            <li><a href="#">Thanh toán cước</a></li>
                            <li><a href="#">Hóa đơn điện tử</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Quản lý tài khoản</h6>
                        <ul class="footer-list">
                            <li><a href="#">Thông tin thuê bao</a></li>
                            <li><a href="#">Dịch vụ đang sử dụng</a></li>
                            <li><a href="#">Khuyến mại dành cho bạn</a></li>
                        </ul>
                    </div>
                    <!--                    --><?php //if ($page['col_4']) print (render($page['col_4'])) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="copy-left-text">
                        <p class="item-bottom-footer"><i class="fas fa-map-marker-alt">&nbsp;</i>Trụ sở: Số 1 Giang Văn Minh, P Kim Mã, Q Ba Đình.</p>
                        <p class="item-bottom-footer"><i class="fa fa-phone">&nbsp;</i> Chăm sóc khách hàng: 1800 8098/198 (miễn phí)</p>
<!--                        --><?php //if ($page['bottom_footer']) print html_entity_decode(render($page['bottom_footer'])) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
