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
<div class="wrapper">
  <header>
    <div class="header2-area">
      <div class="header-top-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="header-top-left">
                <ul>
                  <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+84904337899"> (+84)904 337 899 </a></li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@rozaluta.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="header-top-right">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom-area" id="sticker">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <div class="logo-area">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <div class="main-menu-area">
                <nav>
                  <?php print getMainMenuRozaluta(); ?>
                </nav>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <ul class="header-cart-area">
                <li class="header-search">
                  <?php if($page['header_search']) print render($page['header_search']);?>
                </li>
                <li>
                  <?php if($page['mini_cart_wrap']) print render($page['mini_cart_wrap']) ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <?php print getMainMenuRozaluta(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area End -->
  </header>
  <div class="pagination-area" id="header-my-order">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="text-center" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
  </div>
  <div class="food-menu4-area section-space">
    <div class="container-fluid menu-list-wrapper">
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <?php print $messages; ?>
      <!-- Large modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tim-don-hang">Tìm đơn hàng</button>
      <?php print render($page['content']); ?>

      <div class="modal fade" tabindex="-1" role="dialog" id="modal-tim-don-hang">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tìm kiếm đơn hàng</h4>
            </div>
            <div class="modal-body">
              <?php if($page['modal_tim_don_hang']) print render($page['modal_tim_don_hang']); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </div>
  </div>

  <footer>
    <div class="footer-area-top section-space">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if($page['col_1_footer']) print render($page['col_1_footer']) ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if($page['col_2_footer']) print render($page['col_2_footer']) ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if($page['col_3_footer']) print render($page['col_3_footer']) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <p>&copy; <?=date("Y")?> Rozaluta All Rights Reserved. &nbsp; Designed by<a target="_blank" href="http://minhhien.com.vn"> MinhHien Solutions</a></p>
      </div>
    </div>
  </footer>
</div>
