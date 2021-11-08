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

<!-- navbar start -->
<div class="navbar-area">
  <nav class="navbar navbar-area navbar-expand-lg navbar-area-3">
    <div class="container nav-container">
      <div class="responsive-mobile-menu">
        <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse"
                data-target="#realdeal_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-left"></span>
          <span class="icon-right"></span>
        </button>
      </div>
      <div class="logo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif; ?>
      </div>
      <div class="collapse navbar-collapse" id="realdeal_main_menu">
        <?php print getMenuLeMinhLand() ?>
      </div>
      <div class="dang_ki_min_phi_mb">
        <?php print dang_ki_mien_phi();?>
      </div>
    </div>
  </nav>
</div>
<?php $type = arg(0)?>
<?php if ($type == 'node'){
    $bg = node_load(arg(1));
}elseif ($type = 'taxonomy'){
    $bg = taxonomy_term_load(arg(2));
}?>
<?php if (isset($bg->field_banner['und'][0]['uri'])){
    $background = file_create_url($bg->field_banner['und'][0]['uri']);
}else{
    $background = '/sites/default/files/khu-cong-vien-cay-xanh-tai-angel-island.jpg';
}?>
<div class="breadcrumb-area jarallax" style="background-image:url(<?=$background?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if ($breadcrumb||$title): ?>
                    <div class="breadcrumb-inner">
                        <?php print '<h1 class="page-title">'.$title.'</h1><ul class="page-list">
            <li><a href="'.$front_page.'">Trang chủ</a></li>
            <li>'.$title.'</li>
          </ul>'; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="property-area pd-top-30">
    <?php print $messages; ?>
    <div class="container">
        <?php if(isset($node->type) && $node->type=='du_an'):?>
            <?php $array_path=array();?>
            <?php
            if(isset($node->field_image['und'][0]['uri']))
            {
                $array_path[0]=image_style_url('900_x_500', $node->field_image['und'][0]['uri']);
                //  $array_path_img_sm[0]=image_style_url('900_x_800', $node->field_image['und'][0]['uri']);
            }
            if(isset($node->field_anh_lien_quan['und']))
            {
                $anhlienquan=$node->field_anh_lien_quan['und'];
                foreach ($anhlienquan as $cacanh)
                {
//          array_push($array_path,image_style_url('900_x_500', $cacanh['uri']));
                    //    array_push($array_path_img_sm,image_style_url('900 x 800', $cacanh['uri']));
                }
            }
            ?>
            <div class="contact-form-wrap-1 mb-30">
                <div class="row">
                    <div class="col-md-7">
                        <?php if(count($array_path)<=1):?>
                            <img class="img-responsive img-fluid" alt="<?php print $node->title;?>" src="/sites/default/files/<?php print str_replace('public://','',$node->field_image['und'][0]['uri'])?>" title="<?php print $node->title;?>">
                        <?php else:?>
                            <div id="demo" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <?php foreach ($array_path as $id => $tintunganh):?>
                                        <li data-target="#demo" data-slide-to="<?=$id?>" class="<?php if($id==0) print 'active'?>"></li>
                                    <?php endforeach;?>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <?php foreach ($array_path as $id => $tintunganh):?>
                                        <div class="carousel-item <?php if($id==0) print 'active'?>">
                                            <img alt="ảnh bất động sản" title="ảnh bất động sản" class="mySlides" src="<?=$tintunganh?>" style="width:100%">
                                        </div>
                                    <?php endforeach;?>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>

                        <?php endif;?>
                    </div>
                    <div class="col-md-5 border_left">
                        <div class="summary-project">
                            <h2 class="title_du_an">
                                <?=$node->title?>
                            </h2>
                            <div class="content-summary">
                                <?php if (!empty($node->field_dia_chi_du_an)):?>
                                    <p><i class="fas fa-map-marker-alt"></i> <?=$node->field_dia_chi_du_an['und'][0]['value']?></p>
                                <?php endif;?>
                                <?php if (!empty($node->field_chu_dau_tu)):?>
                                    <p>Chủ đầu tư: <span class="font-weight-600"><?php print $node->field_chu_dau_tu['und'][0]['value'];?></span></p>
                                <?php endif;?>
                                <p>Tổng diện tích: <span class="font-weight-600"><?php print $node->field_tong_dien_tich_khu_dat['und'][0]['value'].'m<sup>2</sup>'?> </span></p>
                                <p class="price">
                                    <?php if ($node->field_gia_bang_chu['und'][0]['value']  != ''):?>
                                        Giá: <span class="pri"><?=$node->field_gia_bang_chu['und'][0]['value']?></span>
                                    <?php else:?>
                                        <?php isset($node->field_gia_san_pham_tu['und'][0]['value']) ? print 'Giá : <span class="pri">'.number_format($node->field_gia_san_pham_tu['und'][0]['value'],'0','.','.').' đ</span>': print '';
                                        isset($node->field_gia_san_pham_den['und'][0]['value']) ? print ' - <span class="pri">'.number_format($node->field_gia_san_pham_den['und'][0]['value'],'0','.','.').' đ</span>': print '';
                                        ?>
                                    <?php endif;?>
                                </p>
                            </div>
                            <a class="btn btn-primary" href="tel:0966867186">Quan tâm</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <div class="row">
            <?php
            $col = 12;
            if ($page['sidebar_right']):?>
                <?php $col = 9?>
            <?php endif;?>
            <?php if ($page['sidebar_right']): ?>
                <div class="col-md-3 order-2">
                    <?php print str_replace('<div>{{-tim-kiem-}}</div>', form_sidebar(), render($page['sidebar_right'])); ?>
                </div>
            <?php endif; ?>
            <div class="col-md-<?= $col?>">
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</div>
<?php print getFooterHPLand($page)?>

