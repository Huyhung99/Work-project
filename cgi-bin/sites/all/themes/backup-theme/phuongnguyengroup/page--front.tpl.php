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
  <!-- HEADER
============================================= -->
  <header id="header-2" class="header ">
    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
      <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
      <span class="smllogo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('VinFast Hải Phòng'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('VinFast Hải Phòng'); ?>" />
            </a>
        <?php endif; ?>
      </span>
    </div>
    <!-- HEADER WIDGETS -->
    <div class="hero-widget clearfix">
      <div class="container">
        <div class="row d-flex align-items-center">
          <!-- LOGO IMAGE -->
          <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
          <div class="col-md-2 col-xs-6">
            <div class="desktoplogo">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>
          </div>

          <!-- WIDGETS -->
          <div class="col-md-10 col-xs-6">
            <?php if($page['hotline_address']) print html_entity_decode(render($page['hotline_address'])) ?>
          </div>	<!-- END WIDGETS -->
        </div>
      </div>
    </div>	<!-- END HEADER WIDGETS -->
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
  </header>	<!-- END HEADER -->
  <?=$messages?>
  <?php if($page['main-content-front']) print render($page['main-content-front']); ?>
  <?php if($page['html-main-content-front']) print html_entity_decode(render($page['html-main-content-front'])); ?>
  <?php if($page['bottom-main-content-front']) print render($page['bottom-main-content-front']); ?>
  <?php if($page['bottom-html-main-content-front']) print html_entity_decode(render($page['bottom-html-main-content-front'])); ?>

  <footer id="footer-1" class="bg-image pt-30 footer division">
    <div class="container">
      <!-- FOOTER CONTENT -->
      <div class="row">
        <!-- FOOTER INFO -->
        <div class="col-md-6 col-lg-4">
          <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ; ?>
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
        <?php if($page['bottom-footer']) print html_entity_decode(render($page['bottom-footer']))  ?>
      </div>
    </div>	   <!-- End container -->
  </footer>	<!-- END FOOTER-2 -->
</div>


<!--<div id="myModal" class="modal">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h4 class="modal-title text-center fs-title">ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI TỪ VINFAST ÂU LẠC<br> 1248 Nguyễn Bỉnh Khiêm, Đông Hải 2, Q.Hải An, HP</h4>-->
<!--                <button class="button close" data-dismiss="modal"-->
<!--                        aria-hidden="true">&times;-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                --><?php //if($page['popup_form']) print render($page['popup_form']); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->