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
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-fluid"/>
                </a>
            <?php endif; ?>
            <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
        </div>


        <!-- HEADER STRIP -->

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">

                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo"><?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-fluid"/>
                        </a>
                    <?php endif; ?></div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php print getMainMenuPhuongNguyenGrp(); ?>
                </nav>    <!-- END MAIN MENU -->

            </div>
        </div>    <!-- END NAVIGATION MENU -->


    </header>    <!-- END HEADER -->
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
                                    <li class="breadcrumb-item"><?php print $breadcrumb; ?></li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>
    <?php print $messages ?>
    <!--        end body-->
    <div class="rn-contact-top-area pb-60 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb--30 text-center">
                        <h2 class="title">Thông tin liên hệ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <span class="icon-deltail"><i class="fas fa-headphones-alt"></i></span>
                        </div>
                        <div class="inner"><h4 class="title">Số điện thoại</h4>
                            <p><a href="tel:0944703139">0944.703.139</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <span class="icon-detail"><i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="inner"><h4 class="title">Email</h4>
                            <p><a href="mailto:admin@gmail.com">bich@luuphanngocbich.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rn-address">
                        <div class="icon">
                            <span class="icon-detail"><i class="fab fa-facebook"></i></span>
                        </div>
                        <div class="inner"><h4 class="title">Fanpage</h4>
                            <p><a href="https://www.facebook.com/luuphanngocbich">Lưu Phan Ngọc Bích</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rn-contact-page pb-60 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form_contact">
                        <?php if ($page['form_contact']) print render($page['form_contact'])?>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if ($page['image_contact']) print render($page['image_contact'])?>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer-1" class="bg-image footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <!-- FOOTER COPYRIGHT -->
            <div class="bottom-footer">
                <?php if ($page['bottom-footer']) print render($page['bottom-footer']) ?>
            </div>
        </div>       <!-- End container -->
    </footer>    <!-- END FOOTER-2 -->
</div>
<!--service-->
