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
  <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="thong_tin_contact">
            <?php print node_load(24)->body['und'][0]['value'];?>
          </div>
          <div class="mt-30 thong_tin_chi_tiet_contact">
            <?php print node_load(23)->body['und'][0]['value'];?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rs-banner-section3 pt-0 pb-0">
            <div class="register-form">
              <div class="form-title text-center">
                <h4 class="title">Đăng ký tư vấn</h4>
              </div>
              <div class="form-group text-center">
                <?php print render($page['content']);?>
              </div>
            </div>
          </div>
        </div>
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
