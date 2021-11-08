title_du_an<?php $danhsachcanho=node_type_arr('can_ho');?>
<div class="contact-form-wrap-1 mt-30 mb-30">
  <div class="thong-tin_chi_tiet-body">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title_can_ho text-center">THÔNG TIN CHI TIẾT</h3>
        <?php print render($content['body']) ?>
          <?php print render($content['field_anh_lien_quan'])?>
          <div class="d-block mx-auto">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <h4 class="text-center"> Để lại thông tin liên hệ</h4>
                    <form class="form_thong_tin_tu_van-1" onsubmit="return false">
                      <input required="required" placeholder="Nhập họ tên (*)" class="form-control form-text required mb-15" type="text" id="edit-submitted-ho-ten-1" name="ho_ten" value="" size="60" maxlength="128">
                      <div class="row">
                        <div class="col-md-6">
                          <input required="required" placeholder="Nhập số điện thoại (*)" class="form-control form-text form-number required mb-15" type="text" id="edit-submitted-so-dien-thoai-1" name="so_dien_thoai" step="any">
                        </div>
                        <div class="col-md-6">
                          <input required="required" class="email form-control  form-text form-email mb-15" placeholder="Nhập email" type="email" id="edit-submitted-email-1" name="email" size="60">
                        </div>
                      </div>
                      <textarea placeholder="Nội dung" required="required" class="form-control mb-15 form-textarea" id="edit-submitted-noi-dung-1" name="noi_dung" cols="60" rows="5"></textarea>
                        <input  type="hidden" value="<?=md5(md5(date("YmdHi")));?>" name="token">
                        <input type="submit"  href="#" class="btn btn-yellow form_submit_thong_tin_tu_van" value="Gửi thông tin">
                    </form>
                  </div>
              </div>
          </div>

      </div>
    </div>
  </div>
</div>
<h3 class="title_can_ho text-center">DANH SÁCH CĂN HỘ</h3>
<div class="contact-form-wrap-1">
  <div class="row">
    <?php foreach ($danhsachcanho as $canho):?>
      <?php if($canho->field_du_an['und'][0]['nid']==$node->nid):?>
        <div class="col-md-4 ">
          <div class="single-feature">
            <div class="thumb">
              <a href="<?=check_plain(url('node/'.$canho->nid, array()))?>" class="d-block position-unset-img"><img alt="Ảnh bất động sản" src="<?=image_style_url('450_x_400', $canho->field_image['und'][0]['uri']);?>" title="<?php print $canho->title;?>"></a>
              <a href="<?=check_plain(url('node/'.$canho->nid, array()))?>"><i class="fa fa-heart"></i></a>
            </div>
            <div class="details">
              <a href="<?=check_plain(url('node/'.$canho->nid, array()))?>" class="feature-logo">
                <img src="/sites/all/themes/leminhland/assets/img/icons/l3.png" alt="icons" title='Ảnh bất động sản'>
              </a>
              <h6 class="title pt-30"><a href="<?=check_plain(url('node/'.$canho->nid, array()))?>"><?php print $canho->title;?></a></h6>
              <h6 class="price">Giá : <span class="pri"><?=$canho->field_gia_bang_chu['und'][0]['value']?></span></h6>
              <p class="tom_tat"><?=trim(strip_tags($canho->body['und'][0]['safe_summary']))?></p>
              <ul class="info-list">
                <li><i class="fa fa-bed"></i> <?php if(isset($canho->field_so_giuong['und'][0]['value']))
                  {
                    if(intval($canho->field_so_giuong['und'][0]['value'])<10)
                    {
                      print '0'.$canho->field_so_giuong['und'][0]['value'];
                    }
                    else
                    {
                      print $canho->field_so_giuong['und'][0]['value'];
                    }
                  }?> Phòng ngủ</li>
                <li><i class="fa fa-bath"></i> <?php if(isset($canho->field_so_phong_tam['und'][0]['value']))
                  {
                    if(intval($canho->field_so_phong_tam['und'][0]['value'])<10)
                    {
                      print '0'.$canho->field_so_phong_tam['und'][0]['value'];
                    }
                    else
                    {
                      print $canho->field_so_phong_tam['und'][0]['value'];
                    }
                  }?> Phòng tắm</li>
              </ul>
            </div>
          </div>
        </div>
      <?php endif;?>
    <?php endforeach;?>
  </div>
</div>
