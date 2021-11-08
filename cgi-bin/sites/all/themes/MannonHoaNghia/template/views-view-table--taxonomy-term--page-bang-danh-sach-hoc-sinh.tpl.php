<?php $arr=array(0=>'1%',1=>'10%',2=>'12%',3=>'15%',4=>'10%',5=>'18%',6=>'12%',7=>'10%',8=>'10%')?>
<div class="thong_them_hocsinh mt-30">
  <div class="row">
    <div class="col-md-6">
      <h4 class="height-full align-items-center d-flex"><strong>Danh sách học sinh</strong></h4>
    </div>
    <div class="col-md-6">
      <div class="d-flex float-right">
        <div class="form_tim_kiem_block_1 mr-10">
          <h3><a href="#" class="popup_timkiem btn btn-primary pr-40 pl-40"  data-toggle="modal" data-target="#form_tiem_kiem_pop_up"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</a></h3>
        </div>
        <div class="form_tim_kiem_block_2 mr-10">
          <ul class="menu_con">
            <li aria-haspopup="true">
              <div class="btn-chuc-nang btn btn-success">Chức năng <i class="fas fa-caret-down"></i></div>
              <ul class="sub-menu-con">
                <li aria-haspopup="true"><a href="#" class="nghi_hoc_edit_moi" title="Tin tức" class="popup_id_delete" data-toggle="modal" data-target="#form_tiem_kiem_pop_up_5">Nghỉ học</a></li>
                <li aria-haspopup="true"><a href="#" class="chuyen_lop_edit" title="Tin tức" data-toggle="modal" data-target="#form_tiem_kiem_pop_up_6">Chuyển lớp</a></li>
                <li aria-haspopup="true"><a href="/them-lop-hoc" title="Tin tức">Danh sách lớp học</a></li>
                <li aria-haspopup="true"><a href="/nhap-hoc-sinh" title="Thêm học sinh">Thêm học sinh vào lớp</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cart-page-top table-responsive">
  <div class="thongbao-bang"></div>
  <form id="table-danhsachhocsinh">
    <table class="table table-hover table-bordered table-striped">
      <?php if (!empty($header)) : ?>
        <thead>
        <tr>
          <?php $dem=0;?>
          <?php foreach ($header as $field => $label): ?>
            <th <?php print 'width="'.$arr[$dem].'"'?> <?php if($dem==7 || $dem==1 || $dem==2) print 'class="text-center"'?>>
              <?php  $dem++;?>
              <?php print $label; ?>
            </th>
          <?php endforeach; ?>
        </tr>
        </thead>
      <?php endif; ?>
      <tbody>
      <?php foreach ($rows as $row_count => $row): ?>
        <tr>
          <?php $dem=0;?>
          <?php foreach ($row as $field => $content): ?>
            <td <?php if($dem==7 || $dem==1 || $dem==2) print 'class="text-center"'?>>
              <?php if(strlen($content)-strlen(str_replace('{{}}','',$content))!=0):?>
                <?php
                  $content=explode('{{}}',$content);
                  if(trim(strip_tags($content[1]))=='Nghỉ học')
                  {
                    print $content[0].'<br>X '.$content[1];
                  }
                  else
                  {
                    print $content[0].'<br>'.'<i class="fa fa-check" aria-hidden="true"></i> Đang học';
                  }
                ?>
              <?php else:?>
                <?php print $content; ?>
              <?php endif;?>
              <?php  $dem++;?>
            </td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </form>
</div>

