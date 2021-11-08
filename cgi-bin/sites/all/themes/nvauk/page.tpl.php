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
<div class="page-wrapper">
  <!-- Main Header-->
  <header class="main-header">
    <!--Header Top-->
    <div class="header-top">
      <?php if($page['header_top']) print render($page['header_top']); ?>
    </div>
    <!-- End Header Top -->

    <!--Header Lower-->
    <div class="header-lower">
      <div class="auto-container">
        <div class="main-box clearfix">
          <div class="pull-left logo-outer">
            <div class="logo">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>
          </div>

          <!--Nav Box-->
          <div class="nav-outer clearfix">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                <?php print getMainMenuNVAUK(); ?>
              </div>
            </nav>
            <!-- Main Menu End-->

            <div class="outer-box">
              <!-- Shoppping Car -->
              <div class="cart-btn">
                <?php print render($page['mini_cart']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <!--Right Col-->
        <div class="nav-outer pull-right">
          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
          <div class="outer-box">
            <!-- Shoppping Car -->
            <div class="cart-btn">
              <?php print render($page['mini_cart']) ?>
            </div>
          </div>

          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-collapse show collapse clearfix">
              <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </div>
          </nav><!-- Main Menu End-->
        </div>
      </div>
    </div><!-- End Sticky Menu -->


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="nav-logo">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>

        <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
      </nav>
    </div><!-- End Mobile Menu -->
  </header>
  <!--End Main Header -->

  <!--Page Title-->
  <section class="page-title">
    <div class="auto-container clearfix">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($breadcrumb): ?>
        <?php print $breadcrumb; ?>
      <?php endif; ?>
    </div>
  </section>
  <!--End Page Title-->

  <!-- Sidebar Page Container -->
  <div class="sidebar-page-container">
    <div class="auto-container">
      <div class="row clearfix">
        <?php if ($page['sidebar_first']) $col = 8; else $col = 12; ?>
        <!--Content Side-->
        <div class="content-side col-lg-<?=$col?> col-md-12 col-sm-12 order-2">
          <?php print $messages; ?>
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>

        <?php if ($page['sidebar_first']): ?>
          <!--Sidebar Side-->
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar">
              <?php print render($page['sidebar_first']); ?>
            </aside>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- End Sidebar Container -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="auto-container">
      <!--Widgets Section-->
      <div class="widgets-section">
        <div class="row">
          <!--Footer Column-->
          <div class="footer-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
            <?php if($page['col1_footer']) print render($page['col1_footer']) ?>
          </div>

          <!--Footer Column-->
          <div class="footer-column col-xl-5 col-lg-7 col-md-12 col-sm-12">
            <!--Footer Column-->
            <div class="footer-widget links-widget">
              <?php if($page['col2_footer']) print render($page['col2_footer']) ?>
            </div>
          </div>

          <!--Footer Column-->
          <div class="footer-column col-xl-3 col-lg-6 col-md-12 col-sm-12">
            <?php if($page['col3_footer']) print render($page['col3_footer']) ?>
          </div>
        </div>
      </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
      <?php if($page['footer_bottom']) print render($page['footer_bottom']); ?>
    </div>
  </footer>
  <!-- End Main Footer -->
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
