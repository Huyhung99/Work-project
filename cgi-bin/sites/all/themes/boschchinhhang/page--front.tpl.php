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
<div class="wrapper home-default-wrapper">
  <header class="header-area header-default sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
          <div class="header-logo-area">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>"
                 title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img class="logo-main" src="<?php print $logo; ?>"
                     alt="<?php print t('Home'); ?>"/>
                <img class="logo-light" src="<?php print $logo; ?>"
                     alt="<?php print t('Home'); ?>"/>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-7 col-sm-9 col-md-9 col-lg-10">
          <div class="header-align">
            <div class="header-navigation-area">
              <?php print getMainMenubosch(); ?>
            </div>
            <div class="header-action-area">
              <?php if ($page['mini_cart']) {
                print render($page['mini_cart']);
              } ?>
              <button class="btn-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php print $messages; ?>
  <main class="main-content">
    <?php if ($page['main_front']) {
      print render($page['main_front']);
    } ?>
    <?php if ($page['html_main_front']) {
      print html_entity_decode(render($page['html_main_front']));
    } ?>
    <?php if ($page['bottom_main_front']) {
      print render($page['bottom_main_front']);
    } ?>
    <?php if ($page['bottom_html_main_front']) {
      print html_entity_decode(render($page['bottom_html_main_front']));
    } ?>
    <section class="newsletter-area mt-30">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 m-auto aos-init aos-animate"
               data-aos="fade-up" data-aos-duration="1000">
            <div class="section-title text-center">
              <h2 class="title">Đăng kí để nhận thông tin và ưu đãi</h2>
              <p>Cập nhật tin tức và các sản phẩm mới nhất, ưu đãi đặc quyền của
                chúng tôi</p>
            </div>
            <?php webform_node_view(node_load(827), 'full');
            print theme_webform_view(node_load(827)->content); ?>
          </div>
        </div>
      </div>
    </section>
    <?php if ($page['bottom_tin_tuc']) {
      print render($page['bottom_tin_tuc']);
    } ?>
  </main>
      <footer class="footer-area">
        <div class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <?php if ($page['col_1']) {
                  print html_entity_decode(render($page['col_1']));
                } ?>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="ml-50 ml-mb-0 widget-item widget-menu-item">
                  <h4 class="widget-title">Liên kết</h4>
                  <nav class="widget-menu-wrap">
                    <?php print muc_menu_footer(); ?>
                  </nav>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="widget-item">
                  <?php if ($page['col_3']) {
                    print html_entity_decode(render($page['col_3']));
                  } ?>
                </div>
                  <a target="_blank"></a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget-item">
                  <h4 class="widget-title">Bản đồ</h4>
                  <?php if ($page['col_4']) {
                    print html_entity_decode(render($page['col_4']));
                  } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="footer-bottom-content">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="widget-copyright text-center">
                    <?php if ($page['bottom_footer']) {
                      print html_entity_decode(render($page['bottom_footer']));
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <!--== End Quick View Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="logo-area">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
              </a>
            <?php endif; ?>
          </div>
          <div class="close-action">
            <button class="btn-close"><i class="fa fa-close"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== Start Side Menu ==-->
  <!--== End Side Menu ==-->
</div>
