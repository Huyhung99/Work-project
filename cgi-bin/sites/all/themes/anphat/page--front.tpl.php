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

<div class="wrapper">
  <header class="header-nav menu_style_home_one style2 home3 navbar-scrolltofixed stricky main-menu">
    <!-- Ace Responsive Menu -->
    <nav>
      <!-- Menu Toggle btn-->
      <div class="menu-toggle">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img class="nav_logo_img img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <button type="button" id="menu-btn">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <a href="<?php print $front_page; ?>" class="navbar_brand float-left dn-smd">
        <img class="logo1 img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        <img class="logo2 img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        <span><?=$title?></span>
      </a>
      <!-- Responsive Menu Structure-->
      <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
      <?php print getMainMenuBDSAnPhat(); ?>
    </nav>
  </header>

  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="main_logo_home2 text-center">
          <img class="nav_logo_img img-fluid mt20" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          <span class="mt20"><?=$title?></span>
        </div>
        <ul class="menu_bar_home2">
          <li class="list-inline-item"><a href="#menu"><span></span></a></li>
        </ul>
      </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <?php print getMainMenuBDSAnPhatMobile(); ?>
    </nav>
  </div>

  <?php if($page['main_content_frontend']) print render($page['main_content_frontend']) ?>

  <!-- Our Footer -->
    <section class="footer_one home3">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg col-xl">
                    <div class="footer_about_widget home3">
                        <?php if($page['col1_footer']) print render($page['col1_footer']) ?>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg col-xl">
                    <div class="footer_qlink_widget home3">
                        <?php if($page['col2_footer']) print render($page['col2_footer']) ?>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg col-xl">
                    <div class="footer_contact_widget home3">
                        <?php if($page['col3_footer']) print render($page['col3_footer']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Footer Bottom Area -->
  <section class="footer_middle_area home3">
    <div class="container-fluid">
      <div class="text-center">
        <?php if($page['copyright_widget']) print render($page['copyright_widget']) ?>
      </div>
    </div>
  </section>

  <a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
</div>
