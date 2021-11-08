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
<div class="up">
    <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>

<!-- Start of header section
	============================================= -->
<header id="main-header" class="main-header-area header-style-three">
    <div class="container">
        <div class="header-main-menu position-relative">
            <div class="site-logo float-left">
                <?php if ($logo) : ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                    </a>
                <?php endif; ?>
            </div>
            <nav class="main-navigation-area clearfix ul-li">
                <ul class="menu-navigation">
                    <?php print get_main_menu() ?>
                </ul>
            </nav>
            <div class="sidebar-menu-toggle open_side_area">
                <a href="#"><i class="flaticon-open-menu"></i></a>
            </div>
        </div>
    </div>
    <!-- desktop menu -->
    <div class="wide_side_inner">
        <div class="side_overlay open_side_area"></div>
        <div class="side_inner_content">
            <div class="close_btn open_side_area"><i class="flaticon-close"></i></div>
            <div class="arch-sidebar-text headline pera-content">
                <div class="side_text_details">
                    <h3>LINK.HOUSE</h3>
                    <p>Nội thất Linkhouse là showroom nội thất và tủ bếp nhập khẩu cao cấp độc quyền đầu tiên tại Hải
                        Phòng.</p>
                </div>
                <div class="side_gallary clearfix">
                    <h3>Hình ảnh dự án</h3>
                    <div class="side_gallary_img">
                        <?php
                            $tid = 16;
                            $nid = taxonomy_select_nodes($tid,false);
                            $nodes = node_load_multiple($nid);
                        ?>
                        <?php foreach ($nodes as $node):?>
                            <?php $path = image_style_url('800_x_500',$node->field_image['und'][0]['uri'])?>
                            <img src="<?=$path?>" alt="<?=$node->field_image['und'][0]['alt']?>" title="<?=$node->field_image['und'][0]['title']?>">
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- side bar -->
    <div class="str-mobile_menu relative-position">
        <div class="str-mobile_menu_button str-open_mobile_menu">
            <i class="flaticon-open-menu"></i>
        </div>
        <div class="str-mobile_menu_wrap">
            <div class="mobile_menu_overlay str-open_mobile_menu"></div>
            <div class="str-mobile_menu_content">
                <div class="str-mobile_menu_close str-open_mobile_menu">
                    <img src="/sites/all/themes/Linkhouse/assets/img/logo/cls.png" alt="cls">
                </div>
                <div class="m-brand-logo text-center">
                    <?php if ($logo) : ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>
                <nav class="str-mobile-main-navigation  clearfix ul-li">
                    <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                        <?php print get_main_menu() ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /mobile-menu -->
</header>
<?php if ($page['main_content_frontend']) print render($page['main_content_frontend']) ?>
<section id="get-quote" class="get-quote-section position-relative">
  <div class="container">
    <div class="get-quote-content">
      <div class="section-title title-center text-center position-relative headline">
        <h2>Để lại thông tin của bạn</h2>
      </div>
      <div class="get-quote-form">
        <?php
          $node = node_load(79);
          webform_node_view($node,'full');
          print theme_webform_view($node->content);
        ?>
      </div>
    </div>
  </div>
</section>
<section id="footer-2" class="footer-section footer-style-two">
    <div class="container">
        <div class="footer-widget-area">
            <div class="row">
                <div class="col-lg-4">
                    <?php if ($page['col1_footer']) print html_entity_decode(render($page['col1_footer'])) ?>
                </div>
                <div class="col-lg-4">
                    <?php if ($page['col2_footer']) print html_entity_decode(render($page['col2_footer'])) ?>
                </div>
                <div class="col-lg-4">
                    <?php if ($page['col3_footer']) print html_entity_decode(render($page['col3_footer'])) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text copyright-text-content">
                        <span>&copy; <?= date('Y ') ?> <a href="/">LINK.HOUSE</a> - <span> Thiết kế bởi</span> <a
                                    href="//minhhien.com.vn">MinhHienSolutions</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

