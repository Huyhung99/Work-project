<?php
$banner='';
if(arg(0)=='node')
{
  if(isset($node->field_anh_banner['und'][0]['uri']))
  {
    $banner=str_replace('public://','/sites/default/files/',$node->field_anh_banner['und'][0]['uri']);
  }
}
elseif (arg(0)=='taxonomy')
{
  $taxonomy_term=taxonomy_term_load(arg(2));
  if(isset($taxonomy_term->field_anh_banner['und'][0]['uri']))
  {
    $banner=str_replace('public://','/sites/default/files/',$taxonomy_term->field_anh_banner['und'][0]['uri']);
  }
}
?>
<header class="header-style-two">
  <div class="header-wrapper">
    <div class="header-top-area bg-gradient-color d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 header-top-left-part">
            <?php if ($page['header_left']) print html_entity_decode(render($page['header_left']))?>
          </div>
          <!--                    <div class="col-lg-6 header-top-right-part text-right">-->
          <!--                        <ul class="social-links">-->
          <!--                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
          <!--                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>-->
          <!--                        </ul>-->
          <!--                        <div class="language">-->
          <!--                            <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>-->
          <!--                            <ul class="language-dropdown">-->
          <!--                                <li><a href="#">English</a></li>-->
          <!--                                <li><a href="#">Bangla</a></li>-->
          <!--                                <li><a href="#">French</a></li>-->
          <!--                                <li><a href="#">Spanish</a></li>-->
          <!--                                <li><a href="#">Arabic</a></li>-->
          <!--                            </ul>-->
          <!--                        </div>-->
          <!--                    </div>-->
        </div>
      </div>
    </div>
    <div class="bt_blank_nav"></div>
    <div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="navbar-brand logo f-left  mrt-md-0">
                <img id="logo-image" class="img-center" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
            <div class="mobile-menu-right"></div>
            <div class="header-searchbox-style-two d-none d-xl-block">
              <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
              </div>
              <div class="show-searchbox">
                <a href="#"><i class="webex-icon-Search"></i></a>
              </div>
              <div class="toggle-searchbox">
                <form action="/tim-kiem" id="searchform-all" method="get">
                  <div>
                    <input type="text" id="s" class="form-control" placeholder="Search..." name="title">
                    <div class="input-box">
                      <input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="side-panel-content">
              <div class="close-icon">
                <button><i class="webex-icon-cross"></i></button>
              </div>
              <div class="side-panel-logo mrb-30">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
              <div class="side-info mrb-30">
                <?php print node_load(217)->field_mo_ta_slider['und'][0]['value'];?>
                <div class="side-panel-element mrb-30">
                  <?php if ($page['sidebar_front']) print render($page['sidebar_front'])?>
                </div>
              </div>
              <!--                            <h4 class="mrb-15">Các nền tảng mạng xã hội</h4>-->
              <!--                            <ul class="social-list">-->
              <!--                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
              <!--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>-->
              <!--                            </ul>-->
            </div>
            <div class="main-menu f-right">
              <nav id="mobile-menu-right">
                <?php print getMainMenuHiepHoiVanTai()?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="page-title-section" <?php if($banner!='') print 'style="background-image: url('.$banner.');"'?>>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <div class="page-title-content">
          <h1 class="title text-white"><?php print $title; ?></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><h2 class="element-invisible">Bạn đang ở đây</h2><div id="breadcrumb"><a href="/">Trang chủ</a></div> </li>
              <li class="breadcrumb-item active" aria-current="page"><?php print $title; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-silver-light price-section pdt-50 pdb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12">
        <?php print $messages; ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <div class="content_edit mt-30">
          <form id="form-upload-file-excel" enctype="multipart/form-data" >
            <div class="row">
              <div class="col-md-4">
                <input type="hidden" class="token" name="token_form_upload_excel_hocsinh" value="<?=md5(md5(date("YmdHi")));?>" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                <div class="row">
                  <div class="col-md-12"><label for="myfile">File dữ liệu (.xls/.xlsx)</label></div>
                  <div class="col-md-12"><input type="file" id="myfile" name="myfile"></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="height-full d-flex align-items-center">
                  <div class="flex-auto">
                    <select name="kieu_node" class="hoi_vien"><option value="">-- Loại danh sách --</option>
                      <option value="hoi_vien">Hội viên</option>
                      <option value="tau">Tàu</option>
                    </select>
                    <div class="chon_hoi_vien d-none">
                      <?php print render($page['content']);?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="height-full d-flex align-items-center">
                  <div class="flex-auto">
                    <a href="#" class="gui_file_excel btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      <i class="fa fa-cloud-upload-alt" aria-hidden="true"></i> Tải lên
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="huongdan_luuy">
            <h3 class="mau_huong_dan_tai_ve">Lưu ý:</h3>
            <p class="luu_y ml-30">- Khi chọn tàu thì cần chọn tìm tên hội viên đã có.</p>
            <p class="luu_y ml-30">- Tải file lên có đuôi .xls/.xlsx.</p>
            <p class="luu_y ml-30">- Thông tin các trường cần đúng vụ trí như file mẫu. Tải file mẫu về để xem chi tiết hơn.</p>
            <p class="luu_y ml-30">- Các lần thao tác chỉ có tác dụng trong 3 phút để tránh hacker. Vậy nên khi quá 3 phút cần load lại để thao tác</p>
          </div>
          <div id="ket-qua-nhap"> </div>
          <div class="mau_huong_dan d-flex">
            <div class="huong_dan_tau">
              <h3 class="mau_huong_dan_tai_ve">
                Mẫu danh sách đội tàu
              </h3>
              <span class="file">
                <?php $doitau=node_load(49)->field_file_huong_dan['und'][0]['filename']?>
                <?php $doitau='<span>'.substr($doitau,0,1).'</span>'.substr($doitau,1);?>
                <img class="file-icon" alt="Tập tin" title="<?=node_load(49)->field_file_huong_dan['und'][0]['filemime']?>" src="/modules/file/icons/x-office-spreadsheet.png">
                <a href="<?php isset(node_load(49)->field_file_huong_dan['und'][0]['uri']) ? print str_replace('public://','/sites/default/files/',node_load(49)->field_file_huong_dan['und'][0]['uri']) : print '';?>" type="<?php print node_load(49)->field_file_huong_dan['und'][0]['filemime'].'; length='.node_load(49)->field_file_huong_dan['und'][0]['filesize']?>"><?=$doitau?></a></span>
            </div>
            <div class="huong_dan_hoi_vien">
              <h3 class="mau_huong_dan_tai_ve">
                Mẫu danh sách hội viên
              </h3>
              <span class="file">
                <?php $hoi_vien=node_load(50)->field_file_huong_dan['und'][0]['filename']?>
                <?php $hoi_vien='<span>'.substr($hoi_vien,0,1).'</span>'.substr($hoi_vien,1);?>
                <img class="file-icon" alt="Tập tin" title="<?=node_load(50)->field_file_huong_dan['und'][0]['filemime']?>" src="/modules/file/icons/x-office-spreadsheet.png">
                <a href="<?php isset(node_load(50)->field_file_huong_dan['und'][0]['uri']) ? print str_replace('public://','/sites/default/files/',node_load(50)->field_file_huong_dan['und'][0]['uri']) : print '';?>" type="<?php print node_load(50)->field_file_huong_dan['und'][0]['filemime'].'; length='.node_load(50)->field_file_huong_dan['und'][0]['filesize']?>"><?=$hoi_vien?></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <?php print node_load(219)->field_mo_ta_slider['und'][0]['value'];?>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="widget footer-widget">
            <h5 class="widget-title text-white mrb-30">LIÊN KẾT</h5>
            <?php print getMenuFooter()?>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="text-center">
            <span class="text-light-gray">© 2021 Thiết kế bởi <a class="text-primary-color" target="_blank" href="//minhhien.com.vn"> MinhHien Solutions</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
  <i class="fab fa-angle-up"></i>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="du_lieu_xly">

        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
