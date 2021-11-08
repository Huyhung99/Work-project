<!--[title]{{}}[field_image]{{}}[body]{{}}[nid]{{}}[path]-->
<section class="bg-silver-light pdl-15 pdr-15 pdt-15 pdb-15" data-background="images/bg/abs-bg5.png">
  <?php foreach ($rows as $row):?>
    <?php $ar=explode('{{}}',$row)?>
    <div class=" mrb-20 back-ground-white">
      <div class="row">
        <div class="col-md-4">
          <?=$ar[1]?>
        </div>
        <?php $node_edit=node_load($ar[3])?>
        <div class="col-md-8">
          <div class="title_page pdt-15 pdb-15 pdr-15">
            <a href="<?=$ar[4]?>"><h3 class="ten_hoi_vien"><strong>Tên thành viên : <?php print $node_edit->title;?></strong></h3></a>
            <div class="thong_tin_chung">
              <p class="so_dien_thoai mrb-0"><strong>Đơn vị công tác : </strong><?php isset($node_edit->field_don_vi_cong_tac['und'][0]['value']) ? print $node_edit->field_don_vi_cong_tac['und'][0]['value']: print 'đang cập nhật'?></p>
              <p class="so_dien_thoai mrb-0"><strong>Chức vụ : </strong><?php isset($node_edit->field_chuc_vu['und'][0]['value']) ? print $node_edit->field_chuc_vu['und'][0]['value']: print 'đang cập nhật'?></p>
              <p class="so_dien_thoai mrb-0"><strong>Số di động : </strong><?php isset($node_edit->field_so_di_dong['und'][0]['value']) ? print $node_edit->field_so_di_dong['und'][0]['value']: print 'đang cập nhật'?></p>
              <p class="email_hoi_vien mrb-0"><strong>Email : </strong><?php isset($node_edit->field_email['und'][0]['value']) ? print $node_edit->field_email['und'][0]['value']: print 'đang cập nhật'?></p>
            </div>
            <a class="xem_them_thanh_vien" href="<?=$ar[4]?>">Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</section>
