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
<div id="page" class="page">
  <header id="header" class="header">

    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix ">
      <a href="#" class="btn-toogle-sidebar"></a>
      <span class="smllogo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
      </span>
      <div class="d-sm-none">
        <?php if($page['headertopleft']) print html_entity_decode(render($page['headertopleft'])) ?>
      </div>
      <?php if($page['search_block']): ?>
        <div class="d-md-none bgc-orange">
          <div class="search-block search-block-front">
            <?php print render($page['search_block']); ?>
          </div>
        </div>
      <?php endif;?>
    </div>
    <div class="wsmobileheader-clone  d-none clearfix" id="mobile-header-top">
        <span class="smllogo">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-1">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
          <?php endif; ?>
          </span>
      <?php if($page['search_block']): ?>
        <div class="d-md-none search-block-clone">
          <?php print render($page['search_block']); ?>
        </div>
      <?php endif;?>
      <a href="#" class="btn-toogle-sidebar"></a>
    </div>

    <!-- HEADER STRIP -->
    <div class="headtoppart bg-blue clearfix">
      <div class="headerwp clearfix">

        <!-- Address -->
        <div class="headertopleft">
          <?php if($page['headertopleft']) print html_entity_decode(render($page['headertopleft'])) ?>
        </div>

        <!-- Social Links -->
        <div class="headertopright">
          <?php if($page['headertopright']) print html_entity_decode(render($page['headertopright'])) ?>
        </div>

      </div>

    </div>	<!-- END HEADER STRIP -->
    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix">
      <div class="wsmainwp clearfix">

        <!-- LOGO IMAGE -->
        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
        <div class="desktoplogo">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>

        <!-- MAIN MENU -->
        <nav class="wsmenu clearfix">
          <?php print getMainMenuPhuongNguyenGrp(); ?>
        </nav>	<!-- END MAIN MENU -->

      </div>
    </div>	<!-- END NAVIGATION MENU -->


  </header>
  <!-- END HEADER -->

  <?php if($page['main-content-front']) print render($page['main-content-front']); ?>
  <div class="container">
    <div class="block-front-news">
      <ul class="nav justify-content-center" id="tab-inner-block-front-news" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#su-kien" role="tab" aria-controls="home" aria-selected="true">SỰ KIỆN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tin-tuc" role="tab" aria-controls="profile" aria-selected="false">TIN TỨC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="messages-tab" data-toggle="tab" href="#thu-vien" role="tab" aria-controls="messages" aria-selected="false">THƯ VIỆN</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="su-kien" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-md-5">
              <?php if($page['first_activity']) print render($page['first_activity']); ?>
            </div>
            <div class="col-md-7">
              <?php if($page['fours_activity']) print render($page['fours_activity']); ?>
            </div>
          </div>
          <?php if($page['bottom_activity']) print html_entity_decode(str_replace('{{icon}}', '<i class="fas fa-chevron-right"></i>', render($page['bottom_activity']))) ; ?>
        </div>
        <div class="tab-pane" id="tin-tuc" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row">
            <div class="col-md-5">
              <?php if($page['first_news']) print render($page['first_news']); ?>
            </div>
            <div class="col-md-7">
              <?php if($page['fours_news']) print render($page['fours_news']); ?>
            </div>
          </div>
          <?php if($page['bottom_news']) print html_entity_decode(str_replace('{{icon}}', '<i class="fas fa-chevron-right"></i>', render($page['bottom_news']))) ; ?>
        </div>
        <div class="tab-pane" id="thu-vien" role="tabpanel" aria-labelledby="messages-tab">
          <div class="row">
            <div class="col-md-5">
              <?php if($page['first_libraries']) print render($page['first_libraries']); ?>
            </div>
            <div class="col-md-7">
              <?php if($page['fours_libraries']) print render($page['fours_libraries']); ?>
            </div>
          </div>
          <?php if($page['bottom_libraries']) print html_entity_decode(str_replace('{{icon}}', '<i class="fas fa-chevron-right"></i>', render($page['bottom_libraries']))) ; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if($page['bottom_main_front']) print render($page['bottom_main_front']) ?>
    <?php if ($page['training_program']) print render($page['training_program'])?>
    <div class="container-fluid">
    <div id="block-cau-chuyen-cua-chung-toi">
      <div class="container p-0-mb">
        <div id="inner-block-mystories">
          <?php if ($page['my_stories']) print render($page['my_stories'])?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if($page['left_form_dang_ky']) print render($page['left_form_dang_ky'])?>
      </div>
      <div class="col-md-6">
        <?php if($page['form_dang_ky']) print render($page['form_dang_ky'])?>
      </div>
    </div>
  </div>

  <footer id="footer-1" class="bg-image pt-30 footer division">
    <div class="container">
      <!-- FOOTER CONTENT -->
      <div class="row">
        <!-- FOOTER INFO -->
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-5">
              <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ; ?>
            </div>
            <div class="col-md-4 	d-none d-sm-block">
              <?php print getMenuOther('menu-col-1-menu'); ?>
            </div>
            <div class="col-md-3 	d-none d-sm-block">
              <?php print getMenuOther('menu-col-2-menu'); ?>
            </div>
          </div>
        </div>	<!-- END FOOTER INFO -->
        <!-- FOOTER COMPANY LINKS -->
        <div class="col-md-5">
          <?php if($page['col_2_footer']) print html_entity_decode(render($page['col_2_footer'])) ; ?>
        </div>
        <!-- FOOTER NEWSLETTER FORM -->
      </div>
      <!-- END FOOTER CONTENT -->

      <!-- FOOTER COPYRIGHT -->
      <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
    </div>	   <!-- End container -->
  </footer>	<!-- END FOOTER-2 -->
</div>


