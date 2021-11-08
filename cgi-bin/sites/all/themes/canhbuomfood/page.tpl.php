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
        <div class="haeader-mid-area border-bm-1 d-none d-lg-block ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo-area">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img class="lozad" data-src="<?php print $logo; ?>" alt="Cánh buồm Food - Hải sản tươi sống" width="135px" height="105px" >
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="search-box-wrapper">
                            <div class="search-box-inner-wrap">
                                <?php if($page['form_front_search']) print render($page['form_front_search'])?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?=getNodeFromNID(733)?>
                    </div>
                </div>
            </div>
        </div>
        <!-- haeader Mid End -->

        <!-- haeader bottom Start -->
        <div class="haeader-bottom-area bg-blue-menu header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10 d-none d-lg-block">
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
                                <a href="<?php print $front_page; ?>" title="<?php print t('Cánh buồm Food - Hải sản tươi sống'); ?>" rel="home" id="logo">
                                    <img class="lozad" data-src="https://canhbuomfood.com/sites/default/files/logo-mobile.png" alt="Cánh buồm Food - Hải sản tươi sống" width="135px" height="105px">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-7">
                        <div class="right-blok-box text-white d-flex">
                            <div class="shopping-cart-wrap">
                                <?php if ($page['mini_cart']) print render($page['mini_cart'])?>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="sites/all/themes/minhhienstore2/assets/images/icon/bg-menu.png" alt=""></a>
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
                    <i class="icon-x"></i>
                </div>

                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <?php if ($page['search_mobile']) print render($page['search_mobile'])?>
                    </div>

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <?php print getMainMenuMobileMinhHienStore()?>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->



                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="top-info-wrap text-left text-black">
                            <h5>Giỏ hàng của bạn</h5>
                            <ul class="offcanvas-account-container">
                                <li><a href="/cart">Giỏ hàng</a></li>
                                <li><a href="/checkout">Thanh toán</a></li>
                            </ul>
                        </div>

                    </div>
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
                  <?php $abc= $breadcrumb;
                  ?>
                  <?php if ($breadcrumb||$title): ?>
                    <div id="breadcrumb" class="breadcrumb-list"><?php   $breadcrumb ? print $breadcrumb : print '<div class="breadcrumb"><a href="'.$front_page.'">Trang chủ </a> » '.$title.'</div>'; ?></div>
                  <?php endif; ?>
                  <!-- breadcrumb-list end -->
                  <?php
                  $abc=explode("</a>",$abc)?>
                  <?php $dem=count($abc);
                  $abc[$dem-1]=str_replace("» ","",str_replace("</div>","",$abc[$dem-1]));
                  ?>
                </div>
            </div>
        </div>
    </div>
  <div class="container">
    <h1 class="title" id="page-title">
      <?php $title ? print $title : print $abc[$dem-1]; ?>
    </h1>
  </div>
    <!-- breadcrumb-area end -->
    <?php print $messages; ?>
    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-pb">
        <div class="container">
            <?php $col = 12;?>
            <?php if ($page['sidebar_right']): ?>
                <?php $col = 9;?>
            <?php endif;?>
            <div class="row">
                <?php if ($page['sidebar_right']): ?>
                    <div class="col-lg-3 order-lg-2 order-2">
                        <div class="blog-sidebar-wrap">
                            <div class="blog-sidebar-widget-area">
                                <?php print render($page['sidebar_right'])?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <div class="col-lg-<?=$col?> order-lg-1 order-1">
                  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                  <?php print render($page['content']); ?>
                    <?php print render($page['san_pham_khac']); ?>
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
            <?php if($page['col_1']) print html_entity_decode(render($page['col_1'])) ?>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php if($page['col_2']) print html_entity_decode(render($page['col_2'])) ?>
          </div>
          <div class="col-lg-4 col-md-6">
            <?php if($page['col_4']) print (render($page['col_4'])) ?>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <?php if($page['col_3']) print render($page['col_3']) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12">
            <div class="copy-left-text">
              <?php if($page['bottom_footer']) print html_entity_decode(render($page['bottom_footer'])) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


</div>
