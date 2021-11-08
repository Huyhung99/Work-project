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
<header class="header">
    <!-- haeader Mid Start -->
    <div class="haeader-bottom-area bg-menu header-sticky">
        <div class="haeader-mid-area border-bm-1 d-none d-lg-block bgc-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="logo-area">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                   id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <?php if ($page['center_header']) print render($page['center_header']) ?>

                    </div>
                    <div class="col-md-3">
                        <div class="right-blok-box text-white d-flex ">
                            <div class="shopping-cart-wrap d-none d-sm-block">
                                <?php if ($page['form_front_search']) print render($page['form_front_search']) ?>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="/sites/default/files/bg-menu.png" alt="Phú An"></a>
                                </div>
                            </div>
                        </div>

                        <!--              --><?php //if ($page['right_header']) print  html_entity_decode(render($page['right_header']))?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="main-menu-area white_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation">
                            <?php print getMainMenuMinhHienStore(); ?>
                        </nav>
                    </div>
                </div>
                <div class="col-5 col-md-6 d-block d-lg-none">
                    <div class="logo">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                               id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-7">
                    <div class="right-blok-box text-white d-flex ">
                        <div class="shopping-cart-wrap d-none d-sm-block">
                            <!--                              --><?php //if ($page['form_front_search']) print render($page['form_front_search'])?>
                        </div>

                        <div class="mobile-menu-btn d-block d-lg-none">
                            <div class="off-canvas-btn">
                                <a href="#"><img src="/sites/default/files/bg-menu-1.png" alt="Phú An"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- haeader bottom End -->


    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fas fa-times"></i>
            </div>

            <div class="off-canvas-inner">
                <div class="search-box-offcanvas">
                    <?php if ($page['search_mobile']) print render($page['search_mobile']) ?>
                </div>

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <?php print getMainMenuMobileMinhHienStore() ?>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->


                <!-- offcanvas widget area start -->
                <!--        <div class="offcanvas-widget-area">-->
                <!--          <div class="top-info-wrap text-left text-black">-->
                <!--            <h5>Giở hàng của bạn</h5>-->
                <!--            <ul class="offcanvas-account-container">-->
                <!--              <li><a href="/cart">Giỏ hàng</a></li>-->
                <!--              <li><a href="/checkout">Thanh toán</a></li>-->
                <!--            </ul>-->
                <!--          </div>-->
                <!---->
                <!--        </div>-->
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

</header>
<!-- Hero Section Start -->
<!--<div class="hero-slider-area">-->
<!--    --><?php //if ($page['slider']) print render($page['slider']) ?>
<!--</div>-->
<?php /*print $messages*/?>

<!--slider-->
<?php $sliders = load_node_by_type('slideshow'); ?>

<div class="slider-front">
    <?php foreach($sliders as $slider):?>
        <?php  $path = image_style_url('1440_x_450',$slider->field_image['vi'][0]['uri'])?>
        <img class="img-fluid lozad" data-src="<?=trim($path)?>" alt="<?=$slider->field_image['vi'][0]['alt']?>">
    <?php endforeach;?>
</div>

<!--about us-->
<?php if ($page['introduction']) print html_entity_decode(render($page['introduction'])) ?>

<div class="container">
    <!--News & event-->
    <?php $news = load_node_by_categories_1(369,4); ?>
    <?php $services = load_node_by_categories('blog_post','chuyen_muc','Tin dịch vụ',4)?>
    <div class="block-quicktabs">
        <div class="title-tabs">
            <h2>Tin tức sự kiện</h2>
            <nav class="items-list">
                <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tin mới</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tin dịch vụ</a>
                </div>
            </nav>
            <a class="view-more ml-auto" href="/chuyen-muc/tin-moi">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="news">
                    <div class="grid">
                        <?php $i = 1?>
                        <?php foreach ($news as $item):?>
                            <?php if ($i ==1):?>
                                <div class="grid-left">
                                    <div class="items-news">
                                        <div class="img-item-news">
                                            <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                            <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                                <img class="lozad" data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" >
                                            </a>
                                        </div>
                                        <div class="content-news">
                                            <h5 class="subtitle-news">Tin tức</h5>
                                            <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                            <span class="date-news"><?=date('d/m/Y',$item->created)?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if ($i==2):?>
                                <div class="grid-right">
                            <?php endif;?>
                            <?php if ($i!=1):?>
                                <div class="items-news">
                                    <div class="img-item-news">
                                        <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                            <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                        </a>
                                    </div>
                                    <div class="content-news">
                                        <h5 class="subtitle-news">Tin tức</h5>
                                        <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                        <span class="date-news"><?=date('d/m/Y',$item->created)?></span>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if ($i==4):?>
                                </div>
                            <?php endif;?>
                            <?php $i++;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="news">
                    <div class="grid">
                        <?php $i = 1?>
                        <?php foreach ($services as $item):?>
                            <?php if ($i ==1):?>
                                <div class="grid-left">
                                    <div class="items-news">
                                        <div class="img-item-news">
                                            <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                            <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                                <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                            </a>
                                        </div>
                                        <div class="content-news">
                                            <h5 class="subtitle-news">Tin tức</h5>
                                            <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                            <span class="date-news"><?=date('d/m/Y',$item->created)?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if ($i==2):?>
                                <div class="grid-right">
                            <?php endif;?>
                            <?php if ($i!=1):?>
                                <div class="items-news">
                                    <div class="img-item-news">
                                        <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                            <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                        </a>
                                    </div>
                                    <div class="content-news">
                                        <h5 class="subtitle-news">Tin tức</h5>
                                        <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                        <span class="date-news"><?=date('d/m/Y',$item->created)?></span>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if ($i==4):?>
                                </div>
                            <?php endif;?>
                            <?php $i++;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Goi cuoc chinh-->
    <div class="block-quicktabs mt-50">
        <div class="title-tabs">
            <h2>Gói cước chính</h2>
            <a class="view-more ml-auto" href="/chuyen-muc/goi-cuoc-chinh">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <!--                Gói cước chính-->
            <?php $main_data_package = load_node_by_category_services('dich_vu','dich_vu','Gói cước chính',4)?>
            <div class="data ">
                <?php foreach ($main_data_package as $id => $item):?>
                    <?php
                    if (isset($item->field_gia['und'][0]['value']))
                    {
                        $field_gia = $item->field_gia['und'][0]['value'];
                    }else{
                        $field_gia = '';
                    }
                    ?>
                    <?php if (isset($item->field_ngay['und'][0]['value']))
                    {
                        $field_ngay = $item->field_ngay['und'][0]['value'];
                    }else{
                        $field_ngay = '';
                    }?>

                    <?php if (isset($item->body['und'][0]['value']))
                    {
                        $field_body = $item->body['und'][0]['value'];
                    }else{
                        $field_body = '';
                    }?>
                    <div class="item-packdata box bdr-10 mb-30">
                        <h3 class="title-packdata">
                            <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a>
                        </h3>
                        <p class="price-packdata"><?=number_format($field_gia,0,',','.')?>đ / <?=$field_ngay?></p>
                        <div class="content mb-20">
                            <?php print $field_body?>
                        </div>
                        <p class="btn-detail"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="btn btn-white">Chi tiết</a></p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<!--    Dịch vụ di động-->
    <div class="block-quicktabs mt-50">
        <div class="title-tabs">
            <h2>Dịch vụ di động</h2>
            <nav class="items-list">
                <div class="nav nav-tabs " id="nav-tab-dich-vu-di-dong" role="tablist">
                    <a class="nav-item nav-link active" id="nav-goi-data-tab" data-toggle="tab" href="#nav-goi-data" role="tab" aria-controls="nav-home" aria-selected="true">Gói data</a>
                    <a class="nav-item nav-link" id="nav-dich-vu-gtgt-tab" data-toggle="tab" href="#nav-dich-vu-gtgt" role="tab" aria-controls="nav-profile" aria-selected="false">Dịch vụ GTGT</a>
                    <a class="nav-item nav-link" id="nav-dich-vu-quoc-te-tab" data-toggle="tab" href="#nav-dich-vu-quoc-te" role="tab" aria-controls="nav-profile" aria-selected="false">Dịch vụ quốc tế</a>
                </div>
            </nav>
            <a class="view-more ml-auto" href="/chuyen-muc/goi-cuoc-data">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="tab-content" id="nav-tabContent">
<!--            Gói data-->
            <?php $services = load_node_by_category_services('dich_vu','dich_vu','Gói cước data',4)?>
            <div class="tab-pane fade show active" id="nav-goi-data" role="tabpanel" aria-labelledby="nav-goi-data-tab">
                <div class="testimonial-slider">
                    <?php foreach ($services as $id => $item): ?>
                        <div>
                            <div class="item-data">
                                <div class="img-data">
                                    <?php $path_image = image_style_url('740_x_1040',$item->field_image['vi'][0]['uri'])?>
                                    <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                        <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                    </a>
                                </div>
                                <div class="content-data">
                                    <div class="left-content">
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="title-data"><?= $item->title ?></a>
                                        <p class="price-data">
                                            <?= number_format($item->field_gia['und'][0]['value'],0,',','.') ?> đ / <?=$item->field_ngay['und'][0]['value']?> </p>
                                    </div>
                                    <div class="right-content">
                                        <span class="capacity-data"><?= $item->field_luu_luong['und'][0]['value'] ?></span>
                                        <p class="quality-data">Tốc độ cao</p>
                                    </div>
                                    <?php if ($item->field_cu_phap['und'][0]['value'] == ''){
                                        $data = '';
                                    }else{
                                        $data = $item->field_cu_phap['und'][0]['value'];
                                    }?>
                                    <p class="btn-registration"><a class="btn btn-white bdr-10" href="/lien-he?data=<?=$data?>&price=<?=$item->field_gia['und'][0]['value']?>">Đăng kí</a></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
<!--            Dịch vụ giá trị gia tăng-->
            <?php $services_GTGT = load_node_by_category_services('dich_vu','dich_vu','Dịch vụ giá trị gia tăng',4)?>
            <div class="tab-pane fade" id="nav-dich-vu-gtgt" role="tabpanel" aria-labelledby="nav-dich-vu-gtgt-tab">
                <div class="dataQT">
                    <?php foreach ($services_GTGT as $id => $item):?>
                        <?php
                        if (isset($item->field_gia['und'][0]['value']))
                        {
                            $field_gia = $item->field_gia['und'][0]['value'];
                        }else{
                            $field_gia = '';
                        }
                        ?>
                        <?php if (isset($item->field_ngay['und'][0]['value']))
                        {
                            $field_ngay = $item->field_ngay['und'][0]['value'];
                        }else{
                            $field_ngay = '';
                        }?>

                        <?php if (isset($item->body['und'][0]['summary']))
                        {
                            $field_body = $item->body['und'][0]['summary'];
                        }else{
                            $field_body = '';
                        }?>
                        <div >
                            <div class="item-gtgt mb-30">
                                <div class="img-gtgt">
                                    <?php $path_image = image_style_url('1100_x_300',$item->field_image['vi'][0]['uri'])?>
                                    <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                        <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                    </a>
                                </div>
                                <div class="content-gtgt box ">
                                    <h3><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                    <div class="detail-gtgt">
                                        <div class="detail-price">
                                            <p><?=$field_body?></p>
                                            <span class="price-gtgt"><?= number_format($field_gia,0,',','.')?>đ/tháng</span>
                                        </div>
                                        <div>
                                            <p class="btn-registration"><a href="/lien-he?data=<?=$item->title?>&price=<?=$field_gia?>" class="btn btn-white bdr-10">Đăng ký</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
<!--            Dịch vụ quốc tế-->
            <?php $services_QT = load_node_by_category_services('dich_vu','dich_vu','Dịch vụ quốc tế',4)?>
            <div class="tab-pane fade" id="nav-dich-vu-quoc-te" role="tabpanel" aria-labelledby="nav-dich-vu-quoc-te-tab">
                <div class="services-holder owl-theme">
                    <?php foreach ($services_QT as $item):?>
                        <?php if (isset($item->body['und'][0]['summary']))
                        {
                            $field_body = $item->body['und'][0]['summary'];
                        }else{
                            $field_body = '';
                        }?>
                        <div class="item-qt mb-30">
                            <div class="img-qt">
                                <?php $path_image = image_style_url('1100_x_300',$item->field_image['vi'][0]['uri'])?>
                                <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                    <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                </a>
                            </div>
                            <div class="content-qt box">
                                <h3><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                <div class="detail-qt">
                                    <div class="detail-content line-clamp-3">
                                        <p><?=strip_tags($field_body)?></p>
                                    </div>
                                    <div class="">
                                        <p class="btn-registration"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="btn btn-white bdr-10">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

<!--        Internet - Truyền hình-->
    <div class="block-quicktabs mt-50">
        <div class="title-tabs">
            <h2>Internet - truyền hình</h2>
            <nav class="items-list">
                <div class="nav nav-tabs " id="nav-tab-internet-truyen-hinh" role="tablist">
                    <a class="nav-item nav-link active" id="nav-internet-tab" data-toggle="tab" href="#nav-internet" role="tab" aria-controls="nav-home" aria-selected="true">Internet</a>
                    <a class="nav-item nav-link" id="nav-truyen-hinh-tab" data-toggle="tab" href="#nav-truyen-hinh" role="tab" aria-controls="nav-profile" aria-selected="false">Truyền hình</a>
                    <a class="nav-item nav-link" id="nav-cb-internet-truyenhinh-tab" data-toggle="tab" href="#nav-cb-internet-truyenhinh" role="tab" aria-controls="nav-profile" aria-selected="false">Combo Internet - Truyền hình</a>
                </div>
            </nav>
            <a class="view-more ml-auto" href="/chuyen-muc/internet">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
        </div>
        <div class="tab-content" id="nav-tabContentInternet">

<!--            Internet-->
            <?php $internets = load_node_by_category_services('dich_vu','dich_vu','Internet',4)?>
            <div class="tab-pane fade show active" id="nav-internet" role="tabpanel" aria-labelledby="nav-internet-tab">
                <div class="box-content">
                    <?php foreach ($internets as $id => $item):?>
                        <?php if (isset($item->body['und'][0]['summary']))
                        {
                            $field_body = $item->body['und'][0]['summary'];
                        }else{
                            $field_body = '';
                        }?>

                        <?php if (isset($item->field_luu_luong['und'][0]['value']))
                        {
                            $field_luu_luong = $item->field_luu_luong['und'][0]['value'];
                        }else{
                            $field_luu_luong = '';
                        }?>
                        <div class="item-internet  mb-30 bdr-10">
                            <div class="box">
                                <div class="image-internet">
                                    <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                    <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                        <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                    </a>
                                </div>
                                <div class="content-internet p-20">
                                    <div class="title-internet">
                                        <h3><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                        <div class="container-capacity">
                                            <span class="capacity"><?=$field_luu_luong?></span>
                                            <span>Mbps</span>
                                        </div>
                                    </div>
                                    <div class="detail-internet line-clamp-7">
                                        <?=$field_body?>
                                    </div>
                                    <p class="btn-registration mt-20">
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="btn btn-white">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>

            </div>

            <!--            Truyen hinh-->
            <?php $truyen_hinh = load_node_by_category_services('dich_vu','dich_vu','Truyền hình',4)?>
            <div class="tab-pane fade" id="nav-truyen-hinh" role="tabpanel" aria-labelledby="nav-truyen-hinh-tab">
                <div>
                    <div class="dataTH">
                        <?php foreach ($truyen_hinh as $id => $item):?>
                            <?php if (isset($item->body['und'][0]['summary']))
                            {
                                $field_body = $item->body['und'][0]['summary'];
                            }else{
                                $field_body = '';
                            }?>

                            <?php if (isset($item->field_luu_luong['und'][0]['value']))
                            {
                                $field_luu_luong = $item->field_luu_luong['und'][0]['value'];
                            }else{
                                $field_luu_luong = '';
                            }?>
                            <div class="item-internet  mb-30 bdr-10">
                                <div class="box">

                                    <div class="image-internet">
                                        <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                            <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                        </a>
                                    </div>
                                    <div class="content-internet p-20">
                                        <div class="title-internet">
                                            <h3><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                            <div class="container-capacity">
                                                <span class="capacity"><?=$field_luu_luong?></span>
                                                <span>Mbps</span>
                                            </div>
                                        </div>
                                        <div class="detail-internet line-clamp-7">
                                            <?=$field_body?>
                                        </div>
                                        <p class="btn-registration mt-20">
                                            <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="btn btn-white">Chi tiết</a>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach;?>
                    </div>
                </div>
            </div>


            <?php $cb_internet_truyen_hinh = load_node_by_category_services('dich_vu','dich_vu','Combo Internet - Truyền hình',4)?>
            <div class="tab-pane fade" id="nav-cb-internet-truyenhinh" role="tabpanel" aria-labelledby="nav-cb-internet-truyenhinh-tab">
                <div class="dataInternetTH">
                    <?php foreach ($cb_internet_truyen_hinh as $id => $item):?>
                        <?php if (isset($item->body['und'][0]['summary']))
                        {
                            $field_body = $item->body['und'][0]['summary'];
                        }else{
                            $field_body = '';
                        }?>

                        <?php if (isset($item->field_luu_luong['und'][0]['value']))
                        {
                            $field_luu_luong = $item->field_luu_luong['und'][0]['value'];
                        }else{
                            $field_luu_luong = '';
                        }?>
                        <div class="item-internet  mb-30 bdr-10">
                            <div class="box">

                                <div class="image-internet">
                                    <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                    <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                        <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                    </a>
                                </div>
                                <div class="content-internet p-20">
                                    <div class="title-internet">
                                        <h3><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                        <div class="container-capacity">
                                            <span class="capacity"><?=$field_luu_luong?></span>
                                            <span>Mbps</span>
                                        </div>
                                    </div>
                                    <div class="detail-internet line-clamp-7">
                                        <?=$field_body?>
                                    </div>
                                    <p class="btn-registration mt-20">
                                        <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>" class="btn btn-white">Chi tiết</a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

<!--    Tiện ích dịch vụ-->
    <?php $service_utilities = load_node_by_categories('blog_post','chuyen_muc','Tiện ích giải trí',4)?>
    <div class="services_utilities">
        <h2>Tiện ích dịch vụ</h2>
        <div class="news">
            <div class="grid">
                <?php $i = 1?>
                <?php foreach ($service_utilities as $item):?>
                <?php if (isset($item->body['und'][0]['summary'])){
                    $body = $item->body['und'][0]['summary'];
                    }else{
                    $body = '';
                    }?>
                    <?php if ($i ==1):?>
                        <div class="grid-left">
                            <div class="items-news">
                                <div class="img-item-news">
                                    <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                    <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                        <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                    </a>
                                </div>
                                <div class="content-news">
                                    <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                    <p class="line-clamp-4"><?=strip_tags($body)?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if ($i==2):?>
                        <div class="grid-right">
                    <?php endif;?>
                    <?php if ($i!=1):?>
                        <div class="items-news">
                            <div class="img-item-news">
                                <?php $path_image = image_style_url('585_x_350',$item->field_image['vi'][0]['uri'])?>
                                <a href="<?= check_plain(url('node/'.$item->nid, array())) ?>">
                                    <img data-src="<?=$path_image?>" alt="<?=$item->field_image['vi'][0]['alt']?>" title="<?=$item->field_image['vi'][0]['title']?>" class="img-fluid lozad">
                                </a>
                            </div>
                            <div class="content-news">
                                <h3 class="title-news"><a href="<?= check_plain(url('node/'.$item->nid, array())) ?>"><?= $item->title ?></a></h3>
                                <p class="line-clamp-4"><?=strip_tags($body)?></p>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if ($i==4):?>
                        </div>
                    <?php endif;?>
                    <?php $i++;?>
                <?php endforeach;?>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <?php if ($page['main_front']) print render($page['main_front']); ?>
</div>

<?php //if ($page['html_main_front']) print html_entity_decode(render($page['html_main_front'])); ?>
<?php if ($page['bottom_main_front']) print render($page['bottom_main_front']); ?>
<?php //if ($page['bottom_html_main_front']) print html_entity_decode(render($page['bottom_html_main_front'])); ?>

<footer>
    <div class="footer-top section-pb section-pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <?php if ($page['col_1']) print render($page['col_1']) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <?php if ($page['col_2']) print render($page['col_2']) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <?php if ($page['col_3']) print render($page['col_3']) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <?php if ($page['col_4']) print (render($page['col_4'])) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <?php if ($page['col_5']) print (render($page['col_5'])) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <?php if ($page['bottom_footer']) print render($page['bottom_footer']) ?>
                </div>
            </div>
        </div>
    </div>
</footer>
