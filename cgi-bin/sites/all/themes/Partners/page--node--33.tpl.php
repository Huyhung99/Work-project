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
<?php global $language?>
<?php if ($language->language == 'en'){
    $path_form = '/search';
    $placeholder = 'Search...';
    $title_col_2_footer = 'LINKS';
    $title_col_3_footer = 'LOCATION';

}else{
    $path_form = '/tim-kiem';
    $placeholder = 'Tìm kiếm';
    $title_col_2_footer = 'LIÊN KẾT';
    $title_col_3_footer = 'ĐỊA CHỈ';


}?>

<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-3 shape">
                <?php if ($page['lang']) print render($page['lang'])?>
            </div>
            <div class="col-lg-9 info float-right text-right d-none d-sm-block">
                <?php if ($page['right-header']) print html_entity_decode(render($page['right-header']))?>
            </div>
        </div>
    </div>
</div>

<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <form method="get" action="<?=$path_form?>">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="<?=$placeholder?>" name="title">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Partners Law'); ?>" rel="Partners Law" id="logo" class="navbar-brand">
                        <img class="img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Partners Law'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <?= getMainMenu()?>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->
</header>
<div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(/sites/default/files/pexels-sora-shimazaki-5668481.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> <?=t('Home')?></a></li>
                    <li class="active"><?=$title?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-area default-padding-top">
    <?php print $messages?>
    <div class="container">
        <div class="contact-items">
            <div class="row">
                <div class="col-lg-8 left-item">
                    <div class="content">
                        <h2>Để lại thông tin</h2>
                        <?php
                            $node = node_load(28);
                            webform_node_view($node,'full');
                            print theme_webform_view($node->content);
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 right-item">
                    <?php if($page['contact']) print html_entity_decode(render($page['contact']))?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="maps-area">
    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.704280116625!2d106.6696373147867!3d10.833927692282547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297d7a923f99%3A0x9597fe90851745ad!2sPartners%20Law!5e0!3m2!1svi!2s!4v1638170411901!5m2!1svi!2s"></iframe>
    </div>
</div>
<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <?php if ($page['col1_footer']) print html_entity_decode(render($page['col1_footer']))?>

                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 single-item offset-lg-1">
                    <div class="f-item link">
                        <h4 class="widget-title"><?=$title_col_2_footer?></h4>
                        <?php print getMenuFooter()?>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="f-item opening-hours">
                        <h4 class="widget-title"><?=$title_col_3_footer?></h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7042801166244!2d106.66963731478668!3d10.833927692282554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297d7a923f99%3A0x9597fe90851745ad!2sPartners%20Law!5e0!3m2!1svi!2s!4v1637291247281!5m2!1svi!2s" width="100%" height="262" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Fixed Shape -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; 2021. Designed by <a target="_blank" href="//minhhien.com.vn">MinhHien Solutions</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->

    <div class="fixed-shape">
        <img src="/sites/all/themes/Partners/assets/img/shape/footer-shape.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
</footer>



