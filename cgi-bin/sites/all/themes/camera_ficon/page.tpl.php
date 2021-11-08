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
<!--header start-->
<header id="masthead" class="header cmt-header-style-01">
    <!-- top_bar -->
    <div class="top_bar cmt-bgcolor-darkgrey cmt-textcolor-white clearfix">
        <div class="container">
            <?php if($page['top_bar']) print html_entity_decode(render($page['top_bar'])) ?>
        </div>
    </div>
    <!-- top_bar end-->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu cmt-bgcolor-white">
        <div class="site-header-menu-inner stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="home-link">
                                    <img id="logo-img" class="img-center" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            </div>
                            <!-- site-branding end -->
                            <div class="d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze"> <span class="menubar-box"> <span class="menubar-inner"></span> </span> </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <?php print getMainMenuCamera(); ?>
                                </nav>
                                <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                    <div class="header_search"> <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                        <div class="header_search_content">
                                            <?php if($page['search_block']) print render($page['search_block']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>
<!-- Slider Main start -->
<?php print $messages; ?>

<div class="breadcrumbss">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <?php if ($breadcrumb): ?>
                                <li><?php print $breadcrumb; ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title">
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="inner-wrapper blog-sec blog-details">
    <div class="container">
        <div class="row">
            <?php $col = 12?>
            <?php if ($page['sidebar_first']): ?>
                <?php $col = 9?>
            <?php endif;?>
            <div class="col-lg-<?=$col?> col-md-<?=$col?>">
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
            <?php if ($page['sidebar_first']): ?>
            <div class="col-lg-3 col-md-3">
                <div class="widget-area primary-sidebar">
                    <?php print render($page['sidebar_first']); ?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>


<footer class="footer" id="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <?php if($page['col1_footer']) print html_entity_decode(render($page['col1_footer'])); ?>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <?php if($page['col2_footer']) print html_entity_decode(render($page['col2_footer'])); ?>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <?php if($page['col3_footer']) print html_entity_decode(render($page['col3_footer'])); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <?php if($page['col4_footer']) print html_entity_decode(render($page['col4_footer'])); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <?php if($page['copyright']) print html_entity_decode(render($page['copyright'])); ?>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
