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
<div class="breadcrumb-area jarallax" style="background-image:url('/sites/default/files/banner-minato-2.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <?php if ($breadcrumb||$title): ?>
          <div class="breadcrumb-inner">
            <?php print '<h1 class="page-title">'.$title.'</h1><ul class="page-list">
            <li><a href="'.$front_page.'">Trang ch???</a></li>
            <li>'.$title.'</li>
          </ul>'; ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- footer area start -->
<div class="property-area pd-top-30">
  <?php print $messages; ?>
  <div class="container">
    <div class="row">
      <?php
      if ($page['sidebar_right']):?>
        <?php $col = 9?>
      <?php endif;?>
      <?php
      if ($page['sidebar_right']): ?>
        <div class="col-md-3 order-2">
          <?php print render($page['sidebar_right']);?>
        </div>
      <?php endif; ?>
      <div class="col-md-<?php print $col;?>">
        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?>
          </ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>
<div class="support-online-show dong_tab_hien_thi">
  <div class="header-box">
    <h3>T??M B???T ?????NG S???N</h3>
    <a href="#" class="dong_hien_thi"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
  </div>
  <div class="search-box">
    <div class="row no-gutters">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-input left-icon">
          <input type="text" placeholder="T??n c??n h???" name="title">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="from_price">
            <option value="">Gi?? t???i thi???u</option>
            <option value="300">~ $300</option>
            <option value="350">$ 350</option>
            <option value="400">$ 400</option>
            <option value="450">$ 450</option>
            <option value="500">$ 500</option>
            <option value="550">$ 550</option>
            <option value="600">$ 600</option>
            <option value="650">$ 650</option>
            <option value="700">$ 700</option>
            <option value="750">$ 750</option>
            <option value="800">$ 800</option>
            <option value="850">$ 850</option>
            <option value="900">$ 900</option>
            <option value="950">$ 950</option>
            <option value="1000">$ 1000</option>
            <option value="1100">$ 1100</option>
            <option value="1200">$ 1200</option>
            <option value="1300">$ 1300</option>
            <option value="1400">$ 1400</option>
            <option value="1500">$ 1500</option>
            <option value="1600">$ 1600</option>
            <option value="1700">$ 1700</option>
            <option value="1800">$ 1800</option>
            <option value="1900">$ 1900</option>
            <option value="2000">$ 2000</option>
            <option value="2100">$ 2100</option>
            <option value="2200">$ 2200</option>
            <option value="2300">$ 2300</option>
            <option value="2400">$ 2400</option>
            <option value="2500">$ 2500</option>
            <option value="2600">$ 2600</option>
            <option value="2700">$ 2700</option>
            <option value="2800">$ 2800</option>
            <option value="2900">$ 2900</option>
            <option value="3000">$ 3000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="4500">$ 4500</option>
            <option value="5000">$ 5000</option>
            <option value="6000">$ 6000</option>
            <option value="7000">$ 7000</option>
            <option value="8000">$ 8000</option>
            <option value="9000">$ 9000</option>
            <option value="10000">$ 10000</option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="to_price">
            <option value="">Gi?? t???i ??a</option>
            <option value="300">~ $300</option>
            <option value="350">$ 350</option>
            <option value="400">$ 400</option>
            <option value="450">$ 450</option>
            <option value="500">$ 500</option>
            <option value="550">$ 550</option>
            <option value="600">$ 600</option>
            <option value="650">$ 650</option>
            <option value="700">$ 700</option>
            <option value="750">$ 750</option>
            <option value="800">$ 800</option>
            <option value="850">$ 850</option>
            <option value="900">$ 900</option>
            <option value="950">$ 950</option>
            <option value="1000">$ 1000</option>
            <option value="1100">$ 1100</option>
            <option value="1200">$ 1200</option>
            <option value="1300">$ 1300</option>
            <option value="1400">$ 1400</option>
            <option value="1500">$ 1500</option>
            <option value="1600">$ 1600</option>
            <option value="1700">$ 1700</option>
            <option value="1800">$ 1800</option>
            <option value="1900">$ 1900</option>
            <option value="2000">$ 2000</option>
            <option value="2100">$ 2100</option>
            <option value="2200">$ 2200</option>
            <option value="2300">$ 2300</option>
            <option value="2400">$ 2400</option>
            <option value="2500">$ 2500</option>
            <option value="2600">$ 2600</option>
            <option value="2700">$ 2700</option>
            <option value="2800">$ 2800</option>
            <option value="2900">$ 2900</option>
            <option value="3000">$ 3000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="4500">$ 4500</option>
            <option value="5000">$ 5000</option>
            <option value="6000">$ 6000</option>
            <option value="7000">$ 7000</option>
            <option value="8000">$ 8000</option>
            <option value="9000">$ 9000</option>
            <option value="10000">$ 10000</option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="from_area">
            <option value="">DT t???i thi???u</option>
            <option value="20">~20 m<sup>2</sup></option>
            <option value="25 ">25 m<sup>2</sup></option>
            <option value="30 ">30 m<sup>2</sup></option>
            <option value="35 ">35 m<sup>2</sup></option>
            <option value="40 ">40 m<sup>2</sup></option>
            <option value="45 ">45 m<sup>2</sup></option>
            <option value="50 ">50 m<sup>2</sup></option>
            <option value="55 ">55 m<sup>2</sup></option>
            <option value="60 ">60 m<sup>2</sup></option>
            <option value="65 ">65 m<sup>2</sup></option>
            <option value="70 ">70 m<sup>2</sup></option>
            <option value="75 ">75 m<sup>2</sup></option>
            <option value="80 ">80 m<sup>2</sup></option>
            <option value="85 ">85 m<sup>2</sup></option>
            <option value="90 ">90 m<sup>2</sup></option>
            <option value="100 ">100 m<sup>2</sup></option>
            <option value="110 ">110 m<sup>2</sup></option>
            <option value="120 ">120 m<sup>2</sup></option>
            <option value="130 ">130 m<sup>2</sup></option>
            <option value="140 ">140 m<sup>2</sup></option>
            <option value="150 ">150 m<sup>2</sup></option>
            <option value="160 ">160 m<sup>2</sup></option>
            <option value="170 ">170 m<sup>2</sup></option>
            <option value="180 ">180 m<sup>2</sup></option>
            <option value="190 ">190 m<sup>2</sup></option>
            <option value="200 ">200 m<sup>2</sup></option>
            <option value="220 ">220 m<sup>2</sup></option>
            <option value="240 ">240 m<sup>2</sup></option>
            <option value="260 ">260 m<sup>2</sup></option>
            <option value="280 ">280 m<sup>2</sup></option>
            <option value="300 ">300 m<sup>2</sup></option>
            <option value="350 ">350 m<sup>2</sup></option>
            <option value="400 ">400 m<sup>2</sup></option>
            <option value="450 ">450 m<sup>2</sup></option>
            <option value="500 ">500 m<sup>2</sup></option>
            <option value="600 ">600 m<sup>2</sup></option>
            <option value="700 ">700 m<sup>2</sup></option>
            <option value="800 ">800 m<sup>2</sup></option>
            <option value="900 ">900 m<sup>2</sup></option>
            <option value="1000 ">1000 m<sup>2</sup></option>
            <option value="2000 ">2000 m<sup>2</sup></option>
            <option value="3000 ">3000 m<sup>2</sup></option>
            <option value="4000 ">4000 m<sup>2</sup></option>
            <option value="5000 ">5000 m<sup>2</sup></option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="to_area">
            <option value="">DT t???i ??a</option>
            <option value="20">~20 m<sup>2</sup></option>
            <option value="25 ">25 m<sup>2</sup></option>
            <option value="30 ">30 m<sup>2</sup></option>
            <option value="35 ">35 m<sup>2</sup></option>
            <option value="40 ">40 m<sup>2</sup></option>
            <option value="45 ">45 m<sup>2</sup></option>
            <option value="50 ">50 m<sup>2</sup></option>
            <option value="55 ">55 m<sup>2</sup></option>
            <option value="60 ">60 m<sup>2</sup></option>
            <option value="65 ">65 m<sup>2</sup></option>
            <option value="70 ">70 m<sup>2</sup></option>
            <option value="75 ">75 m<sup>2</sup></option>
            <option value="80 ">80 m<sup>2</sup></option>
            <option value="85 ">85 m<sup>2</sup></option>
            <option value="90 ">90 m<sup>2</sup></option>
            <option value="100 ">100 m<sup>2</sup></option>
            <option value="110 ">110 m<sup>2</sup></option>
            <option value="120 ">120 m<sup>2</sup></option>
            <option value="130 ">130 m<sup>2</sup></option>
            <option value="140 ">140 m<sup>2</sup></option>
            <option value="150 ">150 m<sup>2</sup></option>
            <option value="160 ">160 m<sup>2</sup></option>
            <option value="170 ">170 m<sup>2</sup></option>
            <option value="180 ">180 m<sup>2</sup></option>
            <option value="190 ">190 m<sup>2</sup></option>
            <option value="200 ">200 m<sup>2</sup></option>
            <option value="220 ">220 m<sup>2</sup></option>
            <option value="240 ">240 m<sup>2</sup></option>
            <option value="260 ">260 m<sup>2</sup></option>
            <option value="280 ">280 m<sup>2</sup></option>
            <option value="300 ">300 m<sup>2</sup></option>
            <option value="350 ">350 m<sup>2</sup></option>
            <option value="400 ">400 m<sup>2</sup></option>
            <option value="450 ">450 m<sup>2</sup></option>
            <option value="500 ">500 m<sup>2</sup></option>
            <option value="600 ">600 m<sup>2</sup></option>
            <option value="700 ">700 m<sup>2</sup></option>
            <option value="800 ">800 m<sup>2</sup></option>
            <option value="900 ">900 m<sup>2</sup></option>
            <option value="1000 ">1000 m<sup>2</sup></option>
            <option value="2000 ">2000 m<sup>2</sup></option>
            <option value="3000 ">3000 m<sup>2</sup></option>
            <option value="4000 ">4000 m<sup>2</sup></option>
            <option value="5000 ">5000 m<sup>2</sup></option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="bedRooms[]" multiple="multiple" class="bed-room">
            <option value="1">1 ph??ng ng???</option>
            <option value="2">2 ph??ng ng???</option>
            <option value="3">3 ph??ng ng???</option>
            <option value="4">4 ph??ng ng???</option>
            <option value="5">5 ph??ng ng???</option>
            <option value="6">6 ph??ng ng???</option>
            <option value="7">7 ph??ng ng???</option>
            <option value="8">8 ph??ng ng???</option>
            <option value="9">9 ph??ng ng???</option>
            <option value="10">10 ph??ng ng???</option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="bathRooms[]" multiple="multiple" class="bath-room">
            <option value="1">1 ph??ng t???m</option>
            <option value="2">2 ph??ng t???m</option>
            <option value="3">3 ph??ng t???m</option>
            <option value="4">4 ph??ng t???m</option>
            <option value="5">5 ph??ng t???m</option>
            <option value="6">6 ph??ng t???m</option>
            <option value="7">7 ph??ng t???m</option>
            <option value="8">8 ph??ng t???m</option>
            <option value="9">9 ph??ng t???m</option>
            <option value="10">10 ph??ng t???m</option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <?php
        $typeProperties = taxonomy_vocabulary_machine_name_load('loai_san_pham');
        $tree_typeProperties = taxonomy_get_tree($typeProperties->vid);
        ?>
        <div class="rld-single-select">
          <select  name="typeProperties[]" multiple="multiple" class="type-properties">
            <?php foreach ($tree_typeProperties as $item):?>
              <option value="<?=$item->tid?>"><?=str_replace('C??n h??? t???i ','',$item->name)?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <?php
          $locations = taxonomy_vocabulary_machine_name_load('khu_vuc');
          $tree = taxonomy_get_tree($locations->vid);
          ?>
          <select  name="locations[]" multiple="multiple" class="locations">
            <?php foreach ($tree as $item):?>
              <option value="<?=$item->tid?>"><?=str_replace('C??n h??? t???i ','',$item->name)?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <a class="btn btn-yellow btn-search" href="#">T??m ki???m</a>
      </div>
    </div>
  </div>
</div>
<?php print getFooterHPLand($page)?>
