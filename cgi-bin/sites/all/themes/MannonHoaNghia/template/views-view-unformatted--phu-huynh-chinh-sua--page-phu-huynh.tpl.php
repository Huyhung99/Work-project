<div class="container">
  <form action="/danh-sach-phu-huynh" method="post" id="form-danh-sach-phu-huynh" accept-charset="UTF-8"><div>
      <div class="modal fade" id="form_tiem_kiem_pop_up_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="load_du_lieu"><div class="text-center"><div class="spinner-border text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                  </div><p class="mt-15 mb-0">Dữ liệu đang được xử lý</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"><a href="#" class="them-dong-phu-huynh btn btn-primary"><i class="fa fa-plus"></i> Thêm phụ huynh</a></div>
        <div class="col-md-6"><div class="title_danh_sach_giao_vien"><h3 class="text-center">DANH SÁCH PHỤ HUYNH</h3></div></div>
        <div class="col-md-3">
          <div class="text-right">
            <a class="btn btn-success color-white" data-toggle="modal" data-target="#myModal99">Tìm kiếm</a>
          </div>
        </div>
        <div class="modal" id="myModal11">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>

              <div class="modal-body">
                Bạn có chắc xóa phụ huynh này không, vì sẽ ảnh hưởng tới các học sinh.
              </div>

              <div class="modal-footer">
                <span class="nut_xoa_pop_up_phuhuynh_hehe"></span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table class="table danh_sach_phu_huynh table-bordered table-striped text-nowarp sticky-enabled">
        <thead><tr><th width="1%">STT</th><th width="25%">Tên phụ huynh</th><th width="15%">Số điện thoại</th><th width="25%">Email</th><th width="14%" class="text-center">Thông tin con</th><th width="25%" class="text-center">Thao tác</th> </tr></thead>
        <tbody>
        <?php foreach ($rows as $id => $row):?>
          <?php $user= user_load(trim(strip_tags($row)));?>
          <tr class="<?php $id%2==0 ? print 'even' :  print 'odd';?>"><td width="1%"><?php print ($id+1)?></td><td width="20%"><?php isset($user->field_phu_huynh['und'][0]['value']) ? print 'Bố : '.$user->field_phu_huynh['und'][0]['value'] : print 'Đang cập nhật'?>
              <?php isset($user->field_ten_me['und'][0]['value']) ? print '<br>Mẹ : '.$user->field_ten_me['und'][0]['value'] : print ''?></td><td width="15%"><?php isset($user->field_so_dien_thoai['und'][0]['value']) ? print $user->field_so_dien_thoai['und'][0]['value'] : print 'Đang cập nhật'?></td><td width="25%"><?= $user->mail?></td><td width="10%" class="text-center"><a href="#" class="thong-tin-con" data-value="<?= $user->uid ;?>"><i class=" fa fa-eye"></i> </a></td><td width="20%"><div class="chinh_sua_phu_huynh text-center"><a href="#"><i class="fas fa-edit edit-phu-huynh" data-value="<?= $user->uid ;?>"></i></a>/<a href=""><i class="fa fa-trash pop_up_phu_huynh" aria-hidden="true" data-value="<?= $user->uid ;?>" data-toggle="modal" data-target="#myModal11"></i></a></div></td> </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </form>
</div>
