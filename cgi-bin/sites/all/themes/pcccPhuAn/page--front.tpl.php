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
  <div class="haeader-mid-area border-bm-1 d-none d-lg-block ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <div class="logo-area">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5">
            <?php if ($page['center_header']) print  html_entity_decode(render($page['center_header']))?>
        </div>
          <div class="col-md-4">
              <?php if ($page['right_header']) print  html_entity_decode(render($page['right_header']))?>

          </div>
      </div>
    </div>
  </div>

  <div class="haeader-bottom-area bg-menu header-sticky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 d-none d-lg-block">
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
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="/sites/default/files/pccc-phu-an.png" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-7">
          <div class="right-blok-box text-white d-flex ">
            <div class="shopping-cart-wrap d-none d-sm-block">
              <?php if ($page['form_front_search']) print render($page['form_front_search'])?>
            </div>

            <div class="mobile-menu-btn d-block d-lg-none">
              <div class="off-canvas-btn">
                <a href="#"><img src="/sites/default/files/bg-menu.png" alt="Phú An"></a>
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

  <div class="container">
    <div class="row">

      <div class="col-lg-3">
        <div class="categories-menu-wrap mt-30">
          <div class="categories_menu">
            <div class="categories_title">
              <h5 class="categori_toggle"><?php print t('Danh mục sản phẩm') ?></h5><i class="fas fa-bars"></i>
            </div>
            <div class="categories_menu_toggle">
              <?php if ($page['left_menu']) print render($page['left_menu'])?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-9">
        <?php if($page['slider']) print render($page['slider'])?>
      </div>
    </div>
  </div>
</div>
<!-- Hero Section End -->
<?php if ($page['introduction']) print html_entity_decode(render($page['introduction']))?>
<?php if($page['main_front']) print render($page['main_front']) ;?>
<?php if($page['html_main_front']) print html_entity_decode(render($page['html_main_front'])) ;?>
<?php if($page['bottom_main_front']) print render($page['bottom_main_front']) ;?>
<?php if($page['bottom_html_main_front']) print html_entity_decode(render($page['bottom_html_main_front'])) ;?>
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
        <div class="col-lg-3 col-md-6 col-sm-6">
            <?php if($page['col_3']) print render($page['col_3']) ?>
        </div>
        <div class="col-lg-3 col-md-6">
            <?php if($page['col_4']) print (render($page['col_4'])) ?>
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
