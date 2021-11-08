<?php
$str='<div class="sidebar-area">
                            <div class="search-box">
                                <form action="/demo/tim-kiem" class="box-search">
                                    <input class="form-control" placeholder="Tìm kiếm ..." name="title" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>'
?>
<div class="inner-page">

  <!--Full width header Start-->
  <div class="full-width-header">

    <!-- Toolbar Start -->
<!--    <div class="rs-toolbar">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="col-md-6">-->
<!--            <div class="rs-toolbar-left">-->
<!--              <div class="welcome-message">-->
<!--                <i class="fa fa-bank"></i><span>--><?//=node_load(34)->field_mo_ta_slider['und'][0]['value'];?><!--</span>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header-2" class="rs-header-2">
      <!-- Menu Start -->
      <div class="menu-area menu-sticky">
        <div class="container">
          <div class="row rs-vertical-middle">
            <div class="col-lg-2 col-md-12">
              <div class="logo-area">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Trung tâm ngoại ngữ Berlin'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Trung tâm ngoại ngữ Berlin'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-10 col-md-12">
              <div class="main-menu">
                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                <nav class="rs-menu">
                  <?php print getMenuMain()?>
                </nav>
                <div class="searce-box">
                  <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->
    </header>
    <!--Header End-->
  </div>
  <!--Full width header End-->

  <!-- Breadcrumbs Start -->
  <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <?php if ($title):?>
              <h1 class="page-title"><?=$title?></h1>
            <?php endif;?>
            <?php if ($breadcrumb||$title): ?>
              <div class="breadcrumb"><ul><?php  print '<li><a href="'.$front_page.'">Trang chủ </a></li><li> '.$title.'</li>'; ?></ul></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  <?php print $messages; ?>

  <!-- History Start -->
  <div id="rs-courses-3" class="rs-courses-3 mt-60">
    <div class="container">
      <div class="row">
        <?php
        $col = 12;
        if ($page['sidebar_first']):?>
          <?php $col = 9?>
        <?php endif;?>
        <div class="col-md-<?= $col?>">
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
        <?php if ($page['sidebar_first']): ?>
          <div class="col-md-3">
            <?php print str_replace('{{-tim-kiem-}}',$str,str_replace('<div>{{-}}</div>',chuyenmuc(),render($page['sidebar_first'])));?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
  <!-- Partner End -->
  <!-- Footer Start -->
    <footer id="rs-footer" class="bg3 rs-footer rs-footer-style8">
        <div class="container">
            <!-- Footer Address -->
            <div>
                <?php if ($page['contact_footer']) print render($page['contact_footer']) ?>
            </div>
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <?php if ($page['footer_col1']) print render($page['footer_col1']) ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h5 class="footer-title">LIÊN KẾT</h5>
                        <?php print getMenuFooter()?>
                        <!--                    --><?php //if ($page['footer_col3']) print render($page['footer_col3'])?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <?php if ($page['footer_col4']) print render($page['footer_col4']) ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2021 <a href="/">Trung tâm ngoại ngữ Berlin</a>. Thiết kế bởi <a href="//minhhien.com.vn" target="_blank">MinhHien&nbspSolutions</a>.</p>
                </div>
            </div>
        </div>
    </footer>
  <!-- Footer End -->

  <!-- start scrollUp  -->
  <div id="scrollUp">
    <i class="fa fa-angle-up"></i>
  </div>

  <!-- Search Modal Start -->
  <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="search-block clearfix">
          <form action="/demo/tim-kiem">
            <div class="form-group">
              <input class="form-control" placeholder="Tìm kiếm" type="text" name="title">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Search Modal End -->
    <?php if ($page['banner-ads']) print html_entity_decode(render($page['banner-ads']))?>
</div>
