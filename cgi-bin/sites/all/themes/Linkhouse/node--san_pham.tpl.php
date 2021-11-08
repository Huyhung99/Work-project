<section id="shop-details" class="anh_lien_quan">
  <div class="shop-details-content">
    <div class="row">
      <div class="col-lg-6">
        <div class="shop-details-img">
          <?php
          $img_full = array();
          $img_full[0] = str_replace('public://','/sites/default/files/',$node->field_image['und'][0]['uri']);
          if(isset($node->field_anh_lien_quan['und']))
          {
            foreach ($node->field_anh_lien_quan['und'] as $hinh_anh)
            {
              $anh=str_replace('public://','/sites/default/files/',$hinh_anh['uri']);
              array_push($img_full,$anh);
            }
          }
          ?>
          <div id="demo_edit" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php foreach ($img_full as $id_edit => $item):?>
                <div class="carousel-item <?php if($id_edit==0) print 'active'?>">
                  <a class="fancybox" rel="group" href="<?php print $item?>">
                    <img src="<?php print $item?>" alt="Ảnh link house" class="img-responsive img-fluid">
                  </a>
                </div>
              <?php endforeach;?>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo_edit" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo_edit" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div>
          <div class="d-flex carousel-indicators">
            <?php foreach ($img_full as $id_edit => $item):?>
              <div data-target="#demo_edit" data-slide-to="<?=$id_edit?>" class="img-responsive img-fluid <?php if($id_edit==0)  print 'active'?>">
                <img src="<?php print $item?>" alt="Ảnh link house" class="img-responsive img-fluid img_edit">
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="shop-details-text">
          <div class="shop-product-title headline">
            <h3><?=$node->title?></h3>
            <div class="customer-review mt-5 mb-5">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="product-details-desc pera-content">
            <p class="lien_he pt-10 pb-10"><a href="tel:0888044222"><i class="fa fa-phone"></i> Liên hệ : 0888.044.222</a></p>
            <?php print $node->body['und'][0]['summary']; ?>
            <p class="pt-10 pb-10"><span class="title_tu_khoa">Từ khóa :</span> <?=render($content['field_tags'])?></p>
            <?php print render($content['fblikebutton_field']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shop-details-review pt-0 mt-30">
    <div class="shop-review-tab">
      <div class="product-review-tab-btn text-center ul-li">
        <ul id="tabs" class="nav text-center text-center nav-tabs">
          <li class="nav-item"><a href="#" data-target="#overview" data-toggle="tab" class="nav-link active text-capitalize">Thông tin chi tiết</a></li>
          <li class="nav-item"><a href="#" data-target="#specific" data-toggle="tab" class="nav-link  text-capitalize ">Thông số kĩ thuật</a></li>
        </ul>
      </div>
      <div id="tabsContent" class="tab-content pr-15 pl-15">
        <div id="overview" class="tab-pane fade active show">
          <div class="product-description-text pera-content">
            <?=render($content['body'])?>
          </div>
        </div>
        <div id="specific" class="tab-pane fade">
          <div class="product-description-text pera-content">
            <?=render($content['field_thong_so_ki_thuat'])?>
            <?=render($content['field_thong_so_ki_thuat_1'])?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
