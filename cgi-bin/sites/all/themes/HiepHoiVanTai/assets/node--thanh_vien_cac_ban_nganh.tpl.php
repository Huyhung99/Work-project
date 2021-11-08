<div class="box-shadow-hoi-vien mb-30">
  <div class="row">
    <div class="col-md-4">
      <img src="<?php  isset($node->field_image['und'][0]['uri']) ? print str_replace('public://','/sites/default/files/',$node->field_image['und'][0]['uri']) : print '';?>" alt="<?php print $node->title;?>">
    </div>
    <div class="col-md-8">
      <h3 class="title_hoi_vien text-center">Thông tin chung</h3>
      <p class="title_hoi_vien"><strong>Tên thành viên : <?php print $node->title;?></strong></p>
      <div class="thong_tin_chung">
        <p class="so_dien_thoai mrb-0"><strong>Đơn vị công tác : </strong><?php isset($node->field_don_vi_cong_tac['und'][0]['value']) ? print $node->field_don_vi_cong_tac['und'][0]['value']: print 'đang cập nhật'?></p>
        <p class="so_dien_thoai mrb-0"><strong>Chức vụ : </strong><?php isset($node->field_chuc_vu['und'][0]['value']) ? print $node->field_chuc_vu['und'][0]['value']: print 'đang cập nhật'?></p>
        <p class="so_dien_thoai mrb-0"><strong>Số di động : </strong><?php isset($node->field_so_di_dong['und'][0]['value']) ? print $node->field_so_di_dong['und'][0]['value']: print 'đang cập nhật'?></p>
        <p class="email_hoi_vien mrb-0"><strong>Email : </strong><?php isset($node->field_email['und'][0]['value']) ? print $node->field_email['und'][0]['value']: print 'đang cập nhật'?></p>
      </div>
    </div>
  </div>
  <hr>
  <h3 class="title_hoi_vien text-center">Thông tin chi tiết</h3>
  <p><?php isset($node->body['und'][0]['value']) ? print $node->body['und'][0]['value'] : print 'Đang cập nhật'?></p>
</div>
