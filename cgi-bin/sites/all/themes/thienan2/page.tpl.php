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
<?php print render($page['content']['metatags'])?>
<div class="page-wraper">
    <header class="site-header header-style-1  nav-wide">

        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white p-t10">
                <div class="container">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img width="171" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->



                    <!-- SITE Search -->


                    <!-- ETRA Nav -->

                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse">
                        <?php print getMainMenuThienAn2(); ?>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="page-content ">
        <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url('/sites/all/themes/thienan2/assets/images/banner/slide1_web_thienan.jpg');">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?><h1 class="title text-white text-uppercase letter-spacing-5 font-18 font-weight-300" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                            <?php print render($title_suffix); ?>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->
                    <div class="p-tb20">
                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <?php if ($breadcrumb): ?>
                                    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>

        <div class="section-full p-tb90 square_shape1 square_shape3">
            <div class="container">
                <div class="row">
                    <?php if ($page['sidebar_first']) $cls = 'col-md-8 col-sm-6'; else $cls = 'col-md-12' ?>
                    <div class="<?= $cls?>">
                        <?php print $messages; ?>
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['content']); ?>
                    </div>
                    <!-- SIDE BAR START -->
                    <?php if ($page['sidebar_first']): ?>
                        <div class="col-md-4 col-sm-6">
                            <aside  class="side-bar">
                                <?php print render($page['sidebar_first'])?>
                            </aside>
                        </div>
                    <!-- SIDE BAR END -->
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer bg-gray footer-light">

        <div class="footer-bottom overlay-wraper">
            <div class="overlay-main bg-black" style="opacity:0;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wt-footer-bot-left">
                        <?php if($page['col_1_footer']) print render($page['col_1_footer'])?>
                    </div>

                    <div class="col-md-3 text-center copyright-block p-t15">
                        <?php if($page['col_2_footer']) print render($page['col_2_footer'])?>
                    </div>

                    <div class="col-md-4 wt-footer-bot-right p-t15">
                        <?php if($page['col_3_footer']) print render($page['col_3_footer'])?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower overlay-wraper">
            <div class="overlay-main"></div>

            <div class="row">
                <div class="wt-footer-bot-left col-xs-12">
                    <?php if($page['lower_footer']) print render($page['lower_footer'])?>
                </div>
            </div>

        </div>
    </footer>



</div>




