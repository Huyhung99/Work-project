<?php $danhsachcanho=node_type_arr('can_ho');?>
<div class=" mt-30 mb-30">
  <div class="thong-tin_chi_tiet-body">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title_can_ho text-center">THÔNG TIN CHI TIẾT</h3>
        <?php print render($content['body']) ?>
        <?php print render($content['field_anh_lien_quan'])?>
      </div>
    </div>
  </div>
</div>
<h3 class="title_can_ho text-center">DANH SÁCH CĂN HỘ</h3>
<div class="contact-form-wrap-1 main-summary-project">
  <div class="row">
    <?php foreach ($danhsachcanho as $canho):?>
      <?php if($canho->field_du_an['und'][0]['nid']==$node->nid):?>
        <div class="col-md-4 ">
          <div class="single-feature">
            <div class="thumb">
              <a href="<?=check_plain(url('node/'.$canho->nid, array()))?>" class="d-block position-unset-img"><img alt="Ảnh bất động sản" src="<?=image_style_url('450_x_400', $canho->field_image['und'][0]['uri']);?>" title="<?php print $canho->title;?>"></a>
            </div>
            <div class="details">
              <a href="<?=check_plain(url('node/'.$canho->nid, array()))?>" class="feature-logo">
                <img src="/sites/all/themes/leminhland/assets/img/icons/l3.png" alt="icons" title='Ảnh bất động sản'>
              </a>
              <h6 class="title pt-30"><a href="<?=check_plain(url('node/'.$canho->nid, array()))?>"><?php print $canho->title;?></a></h6>
              <h6 class="price"><span class="pri"><?=$canho->field_gia_bang_chu['und'][0]['value']?></span></h6>
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
