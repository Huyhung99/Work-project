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
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header id="header-2" class="header ">
  <!-- MOBILE HEADER -->
  <div class="wsmobileheader clearfix">
    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    <span class="smllogo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
      </span>
    <a href="tel:0912986539" class="callusbtn"><i class="fas fa-phone"></i></a>
  </div>
  <!-- HEADER WIDGETS -->
  <!-- END HEADER WIDGETS -->
  <!-- NAVIGATION MENU -->
  <div class="headtoppart bg-blue clearfix">
    <div class="headerwp clearfix">

      <!-- Address -->
      <div class="headertopleft">
        <?php if($page['head_left']) print html_entity_decode(render($page['head_left'])) ?>
      </div>

      <!-- Social Links -->
      <div class="headertopright">
        <?php if($page['head_right']) print html_entity_decode(render($page['head_right'])) ?>
      </div>

    </div>

  </div>

  <div class="wsmainfull menu clearfix">
    <div class="wsmainwp clearfix">
      <nav class="wsmenu clearfix">
        <?php print getMainMenuPhuongNguyenGrp(); ?>
      </nav>
    </div>
  </div>	<!-- END NAVIGATION MENU -->
</header>	<!-- END HEADER -->
<div id="breadcrumb" class="division">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class=" breadcrumb-holder">

          <!-- Title -->
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="title h4-sm steelblue-color" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <!-- Breadcrumb Nav -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <?php if ($breadcrumb): ?>
                <li class="breadcrumb-item"><?php print str_replace(' »','<i class="fas fa-angle-double-right"></i>',str_replace('Trang chủ','<i class="fas fa-angle-double-right"></i> Trang chủ',$breadcrumb)); ?></li>
              <?php endif; ?>
            </ol>
          </nav>
        </div>
      </div>
    </div>  <!-- End row -->
  </div>	<!-- End container -->
</div>	<!-- END BREADCRUMB -->
<div class="main-container container-fluid">

  <!-- /#page-header -->

  <div>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
  <?php print render($page['table_bang_lop_hoc']);?>
</div>

<div class="footer">
  <footer id="footer-1" class="bg-image mt-40 pt-30 footer division">
    <div class="container">
      <!-- FOOTER CONTENT -->
      <div class="row">
        <!-- FOOTER INFO -->
        <div class="col-md-6 col-lg-4">
          <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])); ?>
        </div>	<!-- END FOOTER INFO -->

        <!-- FOOTER PRODUCTS LINKS -->
        <div class="col-md-6 col-lg-4">
          <?php if($page['col_2_footer']) print html_entity_decode(render($page['col_2_footer'])); ?>
        </div>

        <!-- FOOTER COMPANY LINKS -->
        <div class="col-md-6 col-lg-4">
          <?php if($page['col_3_footer']) print html_entity_decode(render($page['col_3_footer'])); ?>
        </div>

        <!-- FOOTER NEWSLETTER FORM -->

      </div>	  <!-- END FOOTER CONTENT -->

      <!-- FOOTER COPYRIGHT -->
      <div class="bottom-footer">
        <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
      </div>
    </div>	   <!-- End container -->
  </footer>
</div>
