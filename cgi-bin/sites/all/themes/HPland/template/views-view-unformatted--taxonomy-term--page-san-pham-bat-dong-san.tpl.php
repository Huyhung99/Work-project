<!--[path]{{}}[field_image]{{}}[title]{{}}[field_dien_tich_su_dung]{{}}[field_so_giuong]{{}}[field_so_phong_tam]{{}}[field_huong]{{}}[field_gia_bang_chu]{{}}-->
<div class="row">
  <?php foreach ($rows as $id => $row):?>
    <div class="col-md-6 col-12">
      <?php $arr=explode('{{}}',$row);?>
      <div class="single-feature">
        <div class="thumb">
          <a href="<?php print $arr[0]?>" class="d-block position-unset-img"><?php print $arr[1]?></a>
        </div>
        <div class="details">
          <h6 class="title"><?php print $arr[2]?></h6>
          <ul class="info-list">
            <li><i class="fas fa-expand"></i> <?php print $arr[3]?> m<sup>2</sup></li>
            <li><i class="fa fa-bed"></i> <?php print $arr[4]?> PN</li>
            <li><i class="fa fa-bath"></i> <?php print $arr[5]?> VS</li>
            <li><i class="fab fa-safari"></i> <?php print $arr[6]?></li>
          </ul>
          <div class="info-price">
            <div class="left-info">
              <h6 class="price"><i class="fas fa-money-bill"></i> <span class="pri"> <?php (strlen($arr[7])>2) ? print $arr[7] : print node_load(293)->field_mo_ta_slider['und'][0]['value']?></span> </h6>
              <span class="id-properties"></span>
            </div>
            <div class="right-info">
              <a class="btn btn-primary" href="/lien-he"> <i class="fas fa-phone"></i> Liên hệ</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  <?php endforeach;?>
</div>
