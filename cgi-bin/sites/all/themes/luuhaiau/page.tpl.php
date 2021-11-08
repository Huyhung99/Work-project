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
<div class="lgx-container ">
  <!--HEADER-->
  <header>
    <div class="row">

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog" style="display: none;">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
<!--            <div class="modal-header">-->
<!--              <button type="button" class="close" data-dismiss="modal">×</button>-->
<!--            </div>-->
            <div class="modal-body">
              <div class="thong-tin">
                <a class="buttonload">
                  <i class="fa fa-refresh fa-spin"></i>
                </a>
                <p class="text-center">Đang kiểm tra</p>
              </div>
            </div>
            <div class="modal-footer bat_tat d-none">
              <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="lgx-header" class="lgx-header">
      <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed ">
        <div class="lgx-container"> <!--lgx-container-fluid-->
          <nav class="navbar navbar-default lgx-navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="lgx-logo">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>"  class="lgx-scroll" title="<?php print t('Khóa học Môi giới bất động sản'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Khóa học Môi giới bất động sản'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
            </div>
            <?php print getNodeContentLuuHaiAu(1); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--HEADER END-->

  <!--BANNER-->
  <?php print getNodeContentLuuHaiAu(2); ?>
  <!--BANNER END-->
<!--  --><?php //print $messages; ?>
  <!--ABOUT-->
  <?php print getNodeContentLuuHaiAu(3); ?>
  <!--ABOUT END-->

  <!--SCHEDULE-->
  <section>
    <div id="lgx-schedule" class="lgx-schedule">
      <div class="lgx-inner">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <?php print getNodeContentLuuHaiAu(5); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="lgx-tab">
                <ul class="nav nav-pills lgx-nav">
                  <?php
                    $danhsachngay=taxonomy_get_tree(2);
                    $chay=0;
                    $idngay=array();
                  ?>
                  <?php foreach ($danhsachngay as $item):?>
                    <li class="<?php if($chay==0) print 'active'?>"><a data-toggle="pill" href="#menu<?=$chay?>"><h3><?=$item->name;?></h3> <p><i class="fa fa-angle-double-right"></i> Xem thông tin</p></a></li>
                  <?php $idngay[$chay]=$item->tid;?>
                  <?php $chay++;?>
                  <?php endforeach;?>
                </ul>
                <div class="tab-content lgx-tab-content">
                  <?php for ($i=0;$i<count($idngay);$i++):?>
                    <div id="menu<?=$i?>" class="tab-pane fade in <?php if($i==0) print 'in active'?>">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <?php $dsbainodela=node_theo_idtaxonomy($idngay[$i]);?>
                      <?php foreach ($dsbainodela as $id1=>$item1):?>
                        <div class="panel panel-default lgx-panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <div class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?=$id1?>" aria-expanded="true" aria-controls="collapseOne">
                              <div class="lgx-single-schedule">
                                <div class="author">
                                  <?php if(isset($item1->field_image['und'][0]['uri'])):?>
                                    <img src="<?=str_replace('public://','/sites/default/files/',$item1->field_image['und'][0]['uri'])?>" alt="<?=$item1->title?>"/>
                                  <?else:?>
                                    <img src="/sites/all/themes/luuhaiau/assets/img/schedule/speaker1.jpg" alt="<?=$item1->title?>">
                                  <?endif;?>
                                </div>
                                <div class="schedule-info">
                                  <h3 class="title"><?=$item1->title?></h3>
                                  <h4 class="author-info">Người dạy <span><?=$item1->field_nguoi_day['und'][0]['value']?></span></h4>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div id="collapseOne<?=$id1?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <p class="text">
                              <?= $item1->body['und'][0]['value']?>
                            </p>
                            <h4 class="location"><a href="#">Đăng kí để biết thêm về khóa học</a></h4>
                          </div>
                        </div>
                      </div>
                      <?php endforeach;?>
                    </div>
                  </div>
                  <?endfor;?>
                </div>
              </div>
            </div>
          </div>
          <!--//.ROW-->
        </div>
        <!-- //.CONTAINER -->
      </div>
      <!-- //.INNER -->
    </div>
  </section>
  <!--SCHEDULE END-->
  <!--SPEAKERS-->
  <?php print getNodeContentLuuHaiAu(4); ?>
  <!--SPEAKERS END-->
  <footer>
    <div id="lgx-footer" class="lgx-footer"> <!--lgx-footer-white-->
      <div class="lgx-inner-footer">
        <div class="container">
          <div class="lgx-footer-area">


            <div class="lgx-footer-single">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>"  class="lgx-scroll" title="<?php print t('Khóa học Môi giới bất động sản'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" class="logo_footer" alt="<?php print t('Khóa học Môi giới bất động sản'); ?>" />
                </a>
              <?php endif; ?>
            </div> <!--//footer-area-->
            <?php print getNodeContentLuuHaiAu(10); ?>
            <!--<div class="lgx-footer-single">
                <h2 class="footer-title">Instagram Feed</h2>
                <div id="instafeed">
                </div>
            </div>--> <!--//footer-area-->
          </div>
          <!-- Modal-->
          <div id="lgx-modal-map" class="modal fade lgx-modal">
            <?php print getNodeContentLuuHaiAu(11); ?>
          </div> <!-- //.Modal-->

          <div class="lgx-footer-bottom">
            <?php print getNodeContentLuuHaiAu(12); ?>
          </div>

        </div>
        <!-- //.CONTAINER -->
      </div>
      <!-- //.footer Middle -->
    </div>
  </footer>
</div>
