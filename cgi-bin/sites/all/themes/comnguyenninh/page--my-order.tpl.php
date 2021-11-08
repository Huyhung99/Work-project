<?php
?>
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
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php if($page['left_top_header']) print html_entity_decode(render($page['left_top_header'])) ?>
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-md-3">
                    <div class="welcm-ht text-right">
                        <ul class="list-inline">
                            <li>
                                <?php print l(t('Đăng nhập'), 'user/login', array('attributes' => array('class' => 'color-white'))) ?>
                            </li>
                            <li>
                                <?php print l(t('Đăng ký'), 'user/register', array('attributes' => array('class' => 'color-white'))) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="ulockd-welcm-hmddl">
                        <?php if ($logo): ?>
                            <a class="ulockd-main-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6">
                    <?php if($page['col_1_header']) print html_entity_decode(render($page['col_1_header'])) ?>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
                    <?php if($page['col_2_header']) print html_entity_decode(render($page['col_2_header'])) ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Styles -->
    <header class="header-nav">
        <div class="main-header-nav navbar-scrolltofixed">
            <div class="container">
                <nav class="navbar navbar-default bootsnav menu-style1">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                <?php if($page['search_block']) print render($page['search_block']) ?>
                            </div>
                        </div>
                    </div>

                    <!-- End Top Search -->
                    <div class="ulockd-padd90">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="dropdown">
                                    <?php if($page['mini_cart']) print render($page['mini_cart']) ?>
                                </li>
                                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <?php print getMainMenuComNguyenNinh() ?>
                        </div><!-- /.navbar-collapse -->
                    </div>

                </nav>
            </div>
        </div>
    </header>
        <div >
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="text-center" id="page-my-order"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
        </div>
    <section class="ulockd-service-details">
        <div class="container-fluid">
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print  $messages;?>

            <?php print render($page['content']); ?>
        </div>
    </section>
    <section class="ulockd-footer">
        <div class="container">
            <div class="row">
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ?>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-lg-4">
                    <?php if($page['col_2_footer']) print html_entity_decode(render($page['col_2_footer'])) ?>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <?php if($page['col_3_footer']) print html_entity_decode(render($page['col_3_footer'])) ?>
                </div>
            </div>
        </div>
    </section>
    <section class="ulockd-l2-copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if($page['copyright_footer']) print html_entity_decode(render($page['copyright_footer'])) ?>
                </div>
            </div>
        </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>

