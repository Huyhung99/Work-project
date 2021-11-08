<div class="container">
  <div class="section-title">
    <h2 class="title text-uppercase"><?php print $view->get_title();?></h2>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="featured-slider slider-control-top">
        <?php
        foreach ($rows as $row):
          $arr = explode('{{}}', $row);
          $title = $arr[0];
          $field_image = $arr[1];
          $nid_project = $arr[3];
          $path = $arr[4];
          $field_dien_tich_su_dung = $arr[5];
          $field_so_phong_tam = $arr[6];
          $created = $arr[7];
          $field_so_phong = $arr[8];
          $field_so_giuong = $arr[9];
          $field_gia_san_pham_tu = $arr[10];
          $field_gia_san_pham_den = $arr[11];
          $field_tong_dien_tich_khu_dat = $arr[12];
          $field_gia_bang_chu = $arr[13];
          $field_dien_tich_bang_chu = $arr[14];
          $vi_tri=$arr[15];
          $loai_hinh=$arr[16];
          ?>
          <div class="single-feature box-shadow-product mb-0">
            <div class="thumb" data-src ="<?=$path?>">
              <?=$field_image?>
            </div>
            <div class="details">
              <a href="<?=$path?>" class="feature-logo">
                <img src="/sites/all/themes/leminhland/assets/img/icons/l3.png" alt="icons">
              </a>
              <p class="author"><i class="fa fa-calendar"></i> <?=$created?></p>
              <h6 class="title"><a href="<?=$path?>"><?=$title?></a></h6>
              <h6 class="fafa-location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php if(trim($vi_tri)!=''){print $vi_tri;} else{print 'Đang cập nhật';}?></h6>
              <h6 class="price"><?=$field_gia_bang_chu?></h6>
              <ul class="info-list">
                <li><i class="fa fa-bed"></i> <?php trim($field_so_phong)!='' ? print $field_so_phong : print '0'; ?> phòng</li>
                <li><i class="fa fa-bath"></i> <?php trim($field_so_phong_tam)!='' ? print $field_so_phong_tam : print '0'; ?> phòng WC</li>
                <li><img src="/sites/default/files/7_edit.png" alt="img"> <?php trim($field_dien_tich_su_dung)!='' ? print $field_dien_tich_su_dung.' m<sup>2</sup>' : print '0';?></li>
              </ul>
              <div class="info-list">
                <p class="mb-0">Loại hình : <?=$loai_hinh?><span class="float-right"><a href="<?=$path?>"><i class="fas fa-arrow-right"></i></a></span></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="<?=check_plain(url('/taxonomy/term/35',array()))?>" class="link_xem_chi_tiet mt-0"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Xem Thêm</a>
  </div>
</div>
