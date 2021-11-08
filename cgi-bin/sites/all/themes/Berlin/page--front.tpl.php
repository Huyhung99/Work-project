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

<div class="home2">
    <div class="full-width-header">
        <!-- Toolbar Start -->
        <div class="rs-toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-toolbar-left">
                            <div class="welcome-message">
                              <i class="fa fa-bank"></i><span><?=node_load(34)->field_mo_ta_slider['und'][0]['value'];?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Header Top Start -->
            <div class="rs-header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-12 text-center">
                            <div class="logo-area">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>"
                                       title="<?php print t('Trung tâm ngoại ngữ Berlin'); ?>" rel="home" id="logo">
                                        <img class="lozad" data-src="<?php print $logo; ?>"
                                             alt="<?php print t('Trung tâm ngoại ngữ Berlin'); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <?php if ($page['header_right']) print html_entity_decode(render($page['header_right']))?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="main-menu">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <div id="logo-sticky" class="text-center">
                                    <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                                </div> -->
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <?php print getMenuMain() ?>
                                </nav>
                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i
                                            class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->

    </div>
    <?php if ($page['main_content_front']) print render($page['main_content_front']) ?>
    <section id="contact" class="rs-banner-section3 mt-sm-0 mt-60">
        <div class="container pb-0">
            <div class="section-content">
                <div class="sec-title text-center">
                    <h2 class="mb-0 ">Đăng ký tư vấn</h2>
                </div>
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-5">

                        <img class="front-contact-img lozad" data-src="/sites/default/files/du_hoc_nghe_tai_chlb_duc_11.jpg" alt="Trung tâm ngoại ngữ Berlin">
                    </div>
                    <div class="col-md-5">
                        <div class="register-form">
                            <div class="form-title text-center">
                                <h4 class="title">Trung tâm ngoại ngữ Berlin có món quà muốn gửi tới bạn, hãy để lại đầy đủ thông tin liên hệ nhé!</h4>
                            </div>
                            <div class="form-group text-center">
                                <?php $node = node_load(22);
                                    webform_node_view($node,'full');
                                print theme_webform_view($node->content);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="rs-footer" class="bg3 rs-footer rs-footer-style8">
        <div class="container">
            <!-- Footer Address -->
            <div>
                <?php if ($page['contact_footer']) print render($page['contact_footer']) ?>
            </div>
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <?php if ($page['footer_col1']) print render($page['footer_col1']) ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h5 class="footer-title">LIÊN KẾT</h5>
                                                <?php print getMenuFooter()?>
                        <!--                    --><?php //if ($page['footer_col3']) print render($page['footer_col3'])?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <?php if ($page['footer_col4']) print render($page['footer_col4']) ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2021 <a href="/">Trung tâm Ngoại ngữ Berlin</a>. Thiết kế bởi <a href="//minhhien.com.vn" target="_blank">MinhHien&nbspSolutions</a>.</p>
                </div>
            </div>
        </div>
    </footer>
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form action="/tim-kiem">
                        <div class="form-group">
                            <input class="form-control" placeholder="Tìm kiếm" type="text" name="title">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if ($page['banner-ads']) print html_entity_decode(render($page['banner-ads']))?>
</div>



