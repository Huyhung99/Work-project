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

<!-- header Start -->
<header class="header-style-two">
    <div class="header-wrapper">
        <div class="header-top-area bg-gradient-color d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                        <span class="address"><i class="webexflaticon flaticon-mail"></i> apfood898@gmail.com</span>
                        <span class="phone"><i class="webexflaticon flaticon-telephone"></i> 0915.170.898</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bt_blank_nav"></div>
        <div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="navbar-brand logo f-left  mrt-md-0">
                                <img id="logo-image" class="img-center" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                        <div class="mobile-menu-right"></div>
                        <div class="header-searchbox-style-two d-none d-xl-block">
                            <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                            <div class="show-searchbox">
                                <a href="#"><i class="webex-icon-Search"></i></a>
                            </div>
                            <div class="toggle-searchbox">
                                <form action="/tim-kiem" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="form-control" placeholder="Nhập nội dung tìm kiếm" name="title">
                                        <div class="input-box">
                                            <input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="webex-icon-cross"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">Địa chỉ văn phòng</h4>
                                    <ul class="list-items">
                                        <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>Số 1 Cụm Công Nghiệp Quán Trữ, Quán Trữ, Kiến An, Hải Phòng</li>
                                        <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto:apfood898@gmail.com">apfood898@gmail.com</a></li>
                                        <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:0915170898">0915.170.898</a></li>
                                    </ul>
                                </div>
                                <div class="side-panel-element mrb-30">
                                    <h4 class="mrb-15">Hình ảnh</h4>
                                    <?=views_embed_view('block_front','block_hinh_anh_hoat_dong')?>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                               <?php print getMainMenuAnhPhatFood()?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php $link=''; $path_edit=explode('/',$_SERVER['PHP_SELF']); if($_SERVER['PHP_SELF']){$link='/'.$path_edit[1];}?>
<?php if ($page['main_content_front']) print render($page['main_content_front'])?>
<section class="pdb-110 pdt-50 pdt-sm-30 pdb-sm-40 background-size-cover" data-background="/sites/default/files/img_0313.jpg" data-overlay-dark="8">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="popup-video-block video-popup">
                      <img class="img-full d-none d-lg-block" src="/sites/default/files/quy-trinh-che-bien-thit-heo-sach_1.jpg" alt="AP Food">
                        <a href="https://www.youtube.com/watch?v=kb7qr4pnTjM" class="popup-video popup-youtube">
                            <i class="webexflaticon flaticon-play-button-2" aria-hidden="true"></i>
                            <span class="pulse-animation"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mrb-sm-110">
                    <div class="request-a-call-back-form">
                        <h3 class="mrt-0 mrb-20 solid-bottom-line">Kết nối với chúng tôi</h3>
                        <p class="mrb-30">AP FOOD chúng tôi đã luôn là thương hiệu tin tưởng tuyệt đối của các đối tác và khách hàng thân quý.</p>
                        <?php
                        webform_node_view(node_load(32),'full');
                        print theme_webform_view(node_load(32)->content);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ($page['bottom_main_content_front']) print render($page['bottom_main_content_front'])?>



<footer class="footer">
    <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <?php if ($page['footer_col_1']) print render($page['footer_col_1'])?>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">LIÊN KẾT</h5>
                        <?php print getMenuFooter()?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="widget footer-widget">
                    <h5 class="widget-title text-white mrb-30">BÀI VIẾT MỚI NHẤT</h5>
                    <?php print views_embed_view('block_front','block_1');?>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-light-gray">© 2021 Thiết kế bởi <a class="text-primary-color" target="_blank" href="//minhhien.com.vn"> MinhHien Solutions</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
    <i class="fab fa-angle-up"></i>
</div>
