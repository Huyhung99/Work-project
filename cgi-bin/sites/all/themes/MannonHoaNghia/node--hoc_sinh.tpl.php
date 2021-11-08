<div>
  <h3 class="title_thong_tin_con text-center">Thông tin học sinh</h3>
  <div class="danh_sach_thong_tin_gom">
    <div class="row">
      <div class="col-md-4">
        <p class="mb-0"><strong>Tên học sinh : </strong><?=$node->title?></p>
        <p class="mb-0"><strong>Ngày sinh : </strong><?=date('d-m-Y',strtotime($node->field_ngay_sinh_cua_ban['und'][0]['value']))?></p>
        <p class="mb-0"><strong>Giới tính : </strong><?=$node->field_gioi_tinh['und'][0]['value']?></p>
      </div>
      <div class="col-md-4">
        <p class="mb-0"><strong>Tên bố : </strong><?php isset(user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_phu_huynh['und'][0]['value']) ? print user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_phu_huynh['und'][0]['value'] : print 'Đang cập nhật'?></p>
        <p class="mb-0"><strong>Tên mẹ : </strong><?php isset(user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_ten_me['und'][0]['value']) ? print user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_ten_me['und'][0]['value'] : print 'Đang cập nhật'?></p>
        <p class="mb-0"><strong>Số điện thoại : </strong><?php isset(user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_so_dien_thoai['und'][0]['value']) ? print user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_so_dien_thoai['und'][0]['value'] : print 'Đang cập nhật'?></p>
      </div>
      <div class="col-md-4">
        <p class="mb-0"><strong>Địa chỉ : </strong><?php isset(user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_dia_chi['und'][0]['value']) ? print user_load($node->field_ten_phu_huynh['und'][0]['target_id'])->field_dia_chi['und'][0]['value'] : print 'Đang cập nhật'?></p>
      </div>
    </div>
  </div>
  <div class="danh_sach_thong_tin_gom">
    <h3 class="title_thong_tin_con">Giáo viên nhận của xét</h3>
    <?php print render($content['body']) ?>
    <div class="mt-30">
      <h3 class="title_thong_tin_con">Bài giảng hôm nay</h3>
      <div class="row">
        <?php print views_embed_view('sidebar_front','block_cach_day_con')?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="danh_sach_thong_tin_gom height-full">
        <div class="thong_tin_xuat_an height-full">
          <h3 class="title_thong_tin_con">Thông tin xuất ăn</h3>
          <?php print node_load(1436)->body['und'][0]['value'];?>
        </div>
      </div>
    </div>
    <div class="col-md-6 mt-30-mb">
      <div class="danh_sach_thong_tin_gom height-full">
        <h3 class="title_thong_tin_con">Ảnh hoạt động của bé</h3>
        <?php
          $link_anh=array();
          $link_anh_pc=array();
          $dem_1=0;
          $dem_2=0;
          if(isset($node->field_anh_lien_quan['und']) && count($node->field_anh_lien_quan['und'])>0)
          {
            $danh_sach_anh_hoat_dong=$node->field_anh_lien_quan['und'];
            foreach ($danh_sach_anh_hoat_dong as $item_hinh_anh_hoat_dong)
            {
              array_push($link_anh,image_style_url('600x600', $item_hinh_anh_hoat_dong['uri']));
            }
          }
          if(count($link_anh)<=4)
          {
            for ($i=count($link_anh);$i<4;$i++)
            {
              array_push($link_anh,'/sites/default/files/pngtree-student-glyph-black-icon-png-image_691145.jpg');
            }
          }
          foreach ($link_anh as $iem_anh_mt)
          {
            if($dem_2==2)
            {
              $dem_2=0;
              $dem_1++;
            }
            $link_anh_pc[$dem_1][$dem_2]=$iem_anh_mt;
            $dem_2++;
          }
        ?>
        <div class="display-none-mb">
          <div id="demo_pc" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php foreach ($link_anh_pc as  $id => $item_pc_hinh_anh):?>
              <div class="carousel-item <?php $id==0 ? print 'active' : print ''; ?>">
                <div class="row">
                  <?php foreach ($item_pc_hinh_anh as $item_hinh_anh):?>
                    <div class="col-md-6">
                      <img src="<?php print trim($item_hinh_anh)?>" class="img-responsive img-fluid" alt="Los Angeles">
                    </div>
                  <?php endforeach;?>
                </div>
              </div>
              <?php endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#demo_pc" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo_pc" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <!-- Left and right controls -->
          </div>
        </div>
        <div class="display-none-pc">
          <div id="demo_mb" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php foreach ($link_anh as  $id => $item_pc_hinh_anh):?>
                <div class="carousel-item <?php $id==0 ? print 'active' : print ''; ?>">
                  <img src="<?php print trim($item_pc_hinh_anh)?>" class="img-responsive img-fluid" alt="Los Angeles">
                </div>
              <?php endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#demo_mb" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo_mb" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <!-- Left and right controls -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <h3 class="title_thong_tin_con text-center mt-30">Thông tin các lớp học</h3>
    <table class="table table-striped table-bordered">
      <thead>
      <tr>
        <th>Tên lớp</th><th>Năm học</th><th>Tên giáo viên 1</th><th>Số đt giáo viên 1</th><th>Tên giáo viên 2</th><th>Số đt giáo viên 2</th><th>Trạng thái</th>
      </tr>
      </thead>
      <tbody>
      <?php $nam_hoc_hien_tai=0;?>
      <?php $nam_hoc_cu=0;?>
      <?php $danh_sach_node_lop_hoc=node_lop_co_hoc_sinh_tung_hoc($node->nid);?>
      <?php foreach ($danh_sach_node_lop_hoc as $itemlop):?>
        <tr>
          <td><?php isset(taxonomy_term_load($itemlop->field_lop['und'][0]['tid'])->name) ? print taxonomy_term_load($itemlop->field_lop['und'][0]['tid'])->name : print ''?></td>
          <td><?php isset(taxonomy_term_load($itemlop->field_nam_hoc['und'][0]['tid'])->name) ? print taxonomy_term_load($itemlop->field_nam_hoc['und'][0]['tid'])->name : print '';?></td>
          <td><?php isset($itemlop->field_giao_vien_1['und'][0]['target_id']) ? print user_load($itemlop->field_giao_vien_1['und'][0]['target_id'])->name : print 'Đang cập nhật';?></td>
          <td><?php isset($itemlop->field_giao_vien_1['und'][0]['target_id']) ? print user_load($itemlop->field_giao_vien_1['und'][0]['target_id'])->field_so_dien_thoai['und'][0]['value'] : print 'Đang cập nhật';?></td>
          <td><?php isset($itemlop->field_giao_vien_1['und'][1]['target_id']) ? print user_load($itemlop->field_giao_vien_1['und'][1]['target_id'])->name : print 'Đang cập nhật';?></td>
          <td><?php isset($itemlop->field_giao_vien_1['und'][1]['target_id']) ? print user_load($itemlop->field_giao_vien_1['und'][1]['target_id'])->field_so_dien_thoai['und'][0]['value'] : print 'Đang cập nhật';?></td>
          <td><?php isset($itemlop->field_trang_thai_lop['und'][0]['value']) ? print $itemlop->field_trang_thai_lop['und'][0]['value'] : print 'Đang cập nhật'?></td>
          <?php
            if($itemlop->field_trang_thai_lop['und'][0]['value']=='Đang học')
            {
              $nam_hoc_hien_tai=$itemlop->field_nam_hoc['und'][0]['tid'];
            }
            $nam_hoc_cu=$itemlop->field_nam_hoc['und'][0]['tid'];
          ?>
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>
  <?php $node_hoc_phi_hoc_sinh_tung_thang=node_hoc_phi_hoc_sinh_tung_thang($node->nid);?>
  <?php if(count($node_hoc_phi_hoc_sinh_tung_thang)>0):?>
  <h3 class="title_thong_tin_con text-center mt-30">Thông tin đóng học phí</h3>
  <div class="row mb-10">
    <div class="col-md-6"><h4>Các khoản phí đi kèm</h4></div>
    <div class="col-md-6"><div class="text-right"><a href="/chi-tiet-thong-tin-cac-khoan-phi" class="btn btn-primary">Xem thông tin các khoản đi kèm</a></div></div>
  </div>
  <?php
    if($nam_hoc_hien_tai==0)
    {
      $nam_hoc_hien_tai=$nam_hoc_cu;
    }
  ?>
<!--  --><?php //print render(chi_tiet_thong_tin_cac_khoan_phi($nam_hoc_hien_tai));?>
<!--    --><?php //$form=drupal_get_form('form_xem_danh_sach_diem');
//    print drupal_render($form);?>
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
      <tr>
        <th>Năm</th><th>Tháng</th><th>Lớp</th><th>Số tiền đã đóng</th><th>Học phí</th><th>Khoản đi kèm</th><th>Phiếu ăn thừa</th><th>Tổng chi phí</th><th>Trang thái</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($node_hoc_phi_hoc_sinh_tung_thang as $itemhoc):?>
        <tr>
          <?php $id_hoc_phi_goc=$itemhoc->field_hoc_phi['und'][0]['nid'];?>
          <?php $id_lop_dong_hoc=node_load($itemhoc->field_lop_hoc_chi_tiet_hoc_phi['und'][0]['nid'])->field_lop['und'][0]['tid'];?>
          <?php $id_nam_dong_hoc=node_load($itemhoc->field_lop_hoc_chi_tiet_hoc_phi['und'][0]['nid'])->field_nam_hoc['und'][0]['tid'];?>
          <?php $id_version=id_version($id_nam_dong_hoc,$id_lop_dong_hoc)?>
          <?php
          $danh_sach_hoc_phi_can=entity_revision_load('field_collection_item',$id_version);
          $tien_tieng_anh=0;
          $tien_an=$danh_sach_hoc_phi_can->field_tien_an['und'][0]['value'];
          $tien_an_sang=$danh_sach_hoc_phi_can->field_tien_an_sang['und'][0]['value'];
          if(isset($danh_sach_hoc_phi_can->field_tieng_anh['und'][0]['value']))
          {
            $tien_tieng_anh=$danh_sach_hoc_phi_can->field_tieng_anh['und'][0]['value'];
          }
          $tien_ban_tru=$danh_sach_hoc_phi_can->field_tien_phuc_vu_ban_tru['und'][0]['value'];
          $tien_truc_trua=$danh_sach_hoc_phi_can->field_truc_trua['und'][0]['value'];
          $tong_tien=intval($tien_an)*26 + intval($tien_an_sang) + intval($tien_tieng_anh) + intval($tien_ban_tru) + intval($tien_truc_trua);
          $thangcu=intval($itemhoc->field_thang_dong['und'][0]['value'])-1;
          $arr_phieu_an=arr_phieu_an($id_nam_dong_hoc,$id_lop_dong_hoc,$thangcu);
          ?>
          <td><?=taxonomy_term_load($id_nam_dong_hoc)->name?></td>
          <td><?=$itemhoc->field_thang_dong['und'][0]['value'];?></td>
          <td><?=taxonomy_term_load($id_lop_dong_hoc)->name;?></td>
          <?php $itemhoc_thong_tin=explode('/',$itemhoc->field_du_lieu_dong_hoc_phi['und'][0]['value']);?>
          <?php
          $so_tien=0;
          $hoc_phi=0;
          if(isset(node_load($itemhoc->field_hoc_phi['und'][0]['nid'])->field_gia_tri['und'][0]['value']) && intval(node_load($itemhoc->field_hoc_phi['und'][0]['nid'])->field_gia_tri['und'][0]['value'])!=0)
          {
            $hoc_phi=node_load($itemhoc->field_hoc_phi['und'][0]['nid'])->field_gia_tri['und'][0]['value'];
          }
          foreach ($itemhoc_thong_tin as $item_hoc_phi_tung_hoc_sinh)
            {
              $item_hoc_phi_tung_hoc_sinh=explode('-',$item_hoc_phi_tung_hoc_sinh);
              if(trim($item_hoc_phi_tung_hoc_sinh[0])==$node->nid)
              {
                $so_tien=$item_hoc_phi_tung_hoc_sinh[1];
              }
            }
          ?>
          <?php $trang_thai_hoc_phi='Chưa đóng';?>
          <?php
          $so_phieu=26;
          if(isset($arr_phieu_an[$node->nid]) && $arr_phieu_an[$node->nid]!=NULL && $arr_phieu_an[$node->nid]!=0)
          {
            $so_phieu=$arr_phieu_an[$node->nid];
          }
          $tong_cac_chi_phi=intval(intval($tong_tien)+intval($hoc_phi)-(26-intval($so_phieu))*22000);
          if((intval($so_tien)<$tong_cac_chi_phi) && (intval($so_tien)>0))
          {
            $trang_thai_hoc_phi='Chưa đủ';
          }
          else
          {
            if(intval($hoc_phi)>=$tong_cac_chi_phi)
            {
              $trang_thai_hoc_phi='Đã hoàn thành';
            }
          }
          ?>
          <td><?= number_format(intval($so_tien), 0,',','.')?></td>
          <td><?= number_format(intval($hoc_phi), 0,',','.')?></td>
          <td><?= number_format(intval($tong_tien), 0,',','.')?></td>
          <td><?= (26-intval($so_phieu)).' buổi'?></td>
          <td><?= number_format($tong_cac_chi_phi,0,'','.')?></td>
          <td><?=$trang_thai_hoc_phi?></td>
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>
  <?php endif;?>
</div>
