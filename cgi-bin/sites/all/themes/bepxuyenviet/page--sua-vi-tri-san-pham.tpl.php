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
  <header>
    <div class="header-top-area ptb-10 d-none d-md-block">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="header-top-left">
            <ul>
              <li><a href="/gioi-thieu.html">Giới thiệu</a></li>
              <li><a href="/san-pham.html">Sản phẩm</a></li>
              <li><a href="/khong-gian-bep-tieu-bieu.html">Không gian bếp tiêu biểu</a></li>
              <li><a href="/thong-tin-hop-tac-dai-ly.html">Thông tin hợp tác đại lý</a></li>
            </ul>
          </div>
          <div class="header-top-right">
            <ul>
              <li>
                <?php if ($page['mini_cart']) print render($page['mini_cart'])?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom-area pt-10 pb-10">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-4 col-md-2">
            <div class="logo pr-60">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-10 d-none d-block-ipad">
            <div class="align-items-center d-flex height-full">
              <?php if ($page['header_top']) print html_entity_decode(render($page['header_top']))?>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-8 col-md-9">
            <div class="align-items-center d-flex height-full">
              <div class="search-icon d-none d-sm-none d-md-none d-lg-block">
                <div class="form_tim_kiem">
                  <div class="menu-search-box">
                    <form action="/tim-kiem" method="get">
                      <input type="text" name="title" placeholder="Tìm kiếm ..."/>
                      <input name="field_product_category_tid" class="d-none" value="All">
                      <button><span class="lnr lnr-magnifier"></span></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="canh_logo">
                <div class="gio_hang_smal">
                  <div class="shop-cart">
                    <a href="/cart"><span class="lnr lnr-cart"></span><span class="title_gio_hang">Giỏ hàng</span></a>
                  </div>
                </div>
                <div class="">
                  <div class="header-bottom-icon">
                    <span class="lnr lnr-phone"></span>
                  </div>
                  <div class="header-bottom-text">
                    <h3>TƯ VẤN 24/7</h3>
                    <p><a href="tel:0904335269">0904.335.269</a> - <a href="tel:0904006488">0904.006.488 </a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- header-end -->
    <!-- mainmenu-area-start -->
    <div class="mainmenu-area bg-color-1 display-none-mb" id="main_h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-none d-md-block">
                    <div class="mainmenu d-none d-md-block">
                        <nav>
                            <?=getMainMenuMinhHienStore();?>
                        </nav>
                    </div>
                </div>
                <!--        <div class="col-md-3">-->
                <!--          <div class=" align-items-center d-flex height-full">-->
                <!--          </div>-->
                <!--        </div>-->
            </div>
        </div>
    </div>
    <div class="mobile-menu-area d-flex d-md-none" id="main_mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu">
                            <?=getMainMenuMinhHienStoremmobile();?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php print $messages; ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($breadcrumb||$title): ?>
                        <div id="breadcrumb" class="breadcrumb-list"><?php $breadcrumb ? print str_replace(' » ',' > ',$breadcrumb) : print '<div class="breadcrumb"><a href="'.$front_page.'">Trang chủ </a> » '.$title.'</div>'; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- breadcrumb-area start -->
    <div class="page-title-wrapper">
        <div class="container">
            <?php if ($title):?>
                <h1 class="title-page-sub"><?=$title?></h1>
            <?php endif;?>
        </div>
    </div>
    <div class="bedroom-all-product-area pb-30 pt-30">
        <div class="container">

        </div>
    </div>
    <!-- main-content-wrap end -->
    <div class="footer-area ptb-80">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mar_b-30">
          <?php if($page['col_1']) print html_entity_decode(render($page['col_1'])) ?>
          <?php if($page['col_4']) print html_entity_decode(render($page['col_4'])) ?>
          <div class="d-md-none d-md-block d-lg-none mt-30">
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30">
                <?php if($page['col_2']) print html_entity_decode(render($page['col_2'])) ?>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30">
                <?php if($page['col_3']) print html_entity_decode(render($page['col_3'])) ?>
              </div>
            </div>
          </div>
          <?php if($page['col_1_bootom']) print html_entity_decode(render($page['col_1_bootom'])) ?>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30 d-none d-lg-block"><?php if($page['col_2']) print html_entity_decode(render($page['col_2'])) ?></div>
        <div class="col-xl-4 col-lg-6 col-md-6 mar_b-30 d-none d-lg-block"><?php if($page['col_3']) print html_entity_decode(render($page['col_3'])) ?></div>
      </div>
    </div>
  </div>
    <!-- footer-area-end -->
    <!-- .copyright-area-start -->
    <div class="copyright-area">
        <?php if($page['bottom_footer']) print html_entity_decode(render($page['bottom_footer'])) ?>
    </div>
</div>
