
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
<div class="navbar-area navbar-style-three fixed-top">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('VMAKETO - Marketing Doanh nghiệp'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('VMAKETO - Marketing Doanh nghiệp'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-F4F7FC">
                <?php if ($logo): ?>
                    <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('VMAKETO - Marketing Doanh nghiệp'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('VMAKETO - Marketing Doanh nghiệp'); ?>" />
                    </a>
                <?php endif; ?>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?php print getMainMenuVMAKETOV2(); ?>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#" class="search-box"><i class="ri-search-line"></i></a>
                        </div>
                        <div class="option-item">
                            <div class="call-us-box">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <a href="tel:0966867186">0966.867.186</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#" class="search-box"><i class="ri-search-line"></i></a>
                        </div>
                        <div class="option-item">
                            <div class="call-us-box">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <span>Call us:</span>
                                <a href="tel:15143214567">+1 (514) 321-4567</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <h1><?=$title?></h1>
                </div>
                <?php
                $type = arg(0);
                $breadcrumb = '';
                if($type  == "node"){
                    $breadcrumb = node_load(arg(1))->title;
                }elseif ($type == "taxonomy"){
                    $breadcrumb = taxonomy_term_load(arg(2))->name;
                }
                ?>
                <div class="col-lg-7 col-md-7">
                    <ul>
                        <li>
                            <a href="https://vmaketo.com/">Trang chủ</a>
                        </li>
                        <li><?=$title?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="/sites/all/themes/vmaketov2/assets/images/page-banner/shape-1.png" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
        <img src="/sites/all/themes/vmaketov2/assets/images/page-banner/shape-2.png" alt="image">
    </div>
</div>

<div class="blog-details-area ptb-30">
    <div class="container">
        <?php print $messages; ?>
        <div class="row">
            <?php if ($page['sidebar_first']){
                $cols = 9;
            }else{
                $cols = 12;
            } ?>
            <div class="col-lg-<?=$cols?> col-md-<?=$cols?>">
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
            <?php if ($page['sidebar_first']):?>

                <div class="col-lg-3 col-md-3">
                    <aside class="widget-area">
                        <?php print str_replace('<div>{{-tim-kiem-}}</div>', formSearch(), render($page['sidebar_first'])); ?>
                    </aside>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php print getNodeContentVMAKETO2(86) ?>
<footer class="footer-area bg-F4F7FC pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <?php print getNodeContentVMAKETO2(99);?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <?php print menu_footer('Liên kết')?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <?php if($page['col3_footer']) print render($page['col3_footer']) ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <?php print getNodeContentVMAKETO2(100);?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-area bg-FFFFFF">
    <div class="container">
        <div class="copyright-area-content">
            <p>
                VMAKETO © 2021 Thiết kế bởi
                <a href="https://minhhien.com.vn/" target="_blank">MinhHienSolutions</a>
            </p>
        </div>
    </div>
</div>
<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
