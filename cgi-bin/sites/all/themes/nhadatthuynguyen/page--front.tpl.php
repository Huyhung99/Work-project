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
<!-- Header Area Start -->
<header class="header-area fixed header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-md-9 hidden-xs">
                <?php if ($page['header_top']) print html_entity_decode(render($page['header_top']))?>
                <!-- Mainmenu Start -->
                <div class="main-menu hidden-xs pull-right">
                    <nav>
                        <?php print getMainMenuFLC()?>
                    </nav>
                </div>
                <!-- Mainmenu End -->
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <?php print getMainMenuFLC()?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Area end -->
</header>
<!-- Header Area End -->
<?php if ($page['main_content_frontend']) print render($page['main_content_frontend'])?>

<!-- About Us Area Start -->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-wrapper mt-90">
                    <div class="video-overlay">
                        <img src="/sites/default/files/image-youtube.jpg" alt="Nhà đất Thủy Nguyên" title="Nhà đất Thủy Nguyên">
                    </div>
                    <a class="video-popup" href="https://www.youtube.com/watch?v=HA3zGiBspuQ">
                        <i class="zmdi zmdi-play-circle-outline"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form-area">
                    <h2 class="title-form">Để lại thông tin tư vấn</h2>
                    <?php
                    webform_node_view(node_load(106),'full');
                    print theme_webform_view(node_load(106)->content)
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->
<section class="gallery mt-30">
    <div class="container">
        <h2 class="tilte-gallery mb-30">Hình ảnh dự án</h2>
        <div class="popup-gallery">
            <?php $galleries = node_load_multiple(['103','104']); ?>
            <?php $i = 0; ?>
            <?php foreach($galleries as $gallery):?>
<!--            --><?php //shuffle($gallery->field_anh_lien_quan['und'])?>
            <?php foreach ($gallery->field_anh_lien_quan['und'] as $id => $item):?>
                 <?php if ($i%4==0 && $i !=0):?>
                    </div>
                <?php endif;?>
                    <?php if ($i%4==0):?>
                        <div class="row mb-30">
                        <?php endif;?>
                    <?php $path_image = image_style_url('370_x_250',$item['uri'])?>
                    <?php $path_image_1 = file_create_url($item['uri'])?>
                        <div class="col-md-3">
                            <a href="<?=$path_image_1?>" title="<?=$item['title']?>"><img src="<?=$path_image?>" alt="<?=$item['alt']?>" title="<?=$item['title']?>" class="img-responsive"></a>
                        </div>
                    <?php $i++?>
                    <?php if ($i == 17){
                        break;
                    }?>
                <?php endforeach;?>
            <?php endforeach;?>
                        </div>
    </div>
</section>
<div class="modal-overlay closed" id="modal-overlay"></div>
<div class="modal closed" id="modal">
    <button class="close-button" id="close-button">Đóng</button>
    <div class="modal-guts">
        <div class="contact-form-area">
            <h2 class="title-form">Để lại thông tin tư vấn</h2>
            <?php
            webform_node_view(node_load(106),'full');
            print theme_webform_view(node_load(106)->content)
            ?>
        </div>
    </div>
</div>

<footer class="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                  <?php print getNodeContent(14) ?>
                </div>
                <div class="col-md-3 col-xs-12">
                  <?php print getNodeContent(15) ?>
                </div>
                <div class="col-md-4 col-xs-12">
                    <?php if ($page['col3_footer']) print render($page['col3_footer'])?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->
    <!-- Footer Bottom Area Start -->
    <?php if($page['footer']) print str_replace('2020', date("Y"), render($page['footer']))?>
    <!-- Footer Bottom Area End -->
</footer>

