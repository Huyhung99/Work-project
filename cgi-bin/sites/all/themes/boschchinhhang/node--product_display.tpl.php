<?php
//$img_full = array();
//$img_full[0] = str_replace('public://','/sites/default/files/',$node->field_image['vi'][0]['uri']);
//$arr_anh_goc=array();
//$arr_anh_goc[0]=$node->field_image['vi'][0]['uri'];
//if(isset($node->field_product['und']) && (count($node->field_product['und'])>0))
//{
//  foreach ($node->field_product['und'] as $id_sp)
//  {
//    if(isset(commerce_product_load($id_sp['product_id'])->field_images['und']))
//    {
//      $ds_anh_cua_tung_sp=commerce_product_load($id_sp['product_id'])->field_images['und'];
//      foreach ($ds_anh_cua_tung_sp as $tung_hinh)
//      {
//        $anh=str_replace('public://','/sites/default/files/',$tung_hinh['uri']);
//        array_push($img_full,$anh);
//        array_push($arr_anh_goc,$tung_hinh['uri']);
//      }
//    }
//  }
//}
//?>


<?php
if(isset($node->field_image[0]['uri']))
{
  $img_full = array();
  $img_full[0] = str_replace('public://','/sites/default/files/',$node->field_image[0]['uri']);
  $arr_anh_goc=array();
  $arr_anh_goc[0]=$node->field_image[0]['uri'];
}
elseif (isset($node->field_image['vi'][0]['uri']))
{
  $img_full = array();
  $img_full[0] = str_replace('public://','/sites/default/files/',$node->field_image['vi'][0]['uri']);
  $arr_anh_goc=array();
  $arr_anh_goc[0]=$node->field_image['vi'][0]['uri'];
}
if(isset($node->field_product['und']))
{
  if(isset($node->field_product['und']) && (count($node->field_product['und'])>0))
  {
    foreach ($node->field_product['und'] as $id_sp)
    {
      if(isset(commerce_product_load($id_sp['product_id'])->field_images['und']))
      {
        $ds_anh_cua_tung_sp=commerce_product_load($id_sp['product_id'])->field_images['und'];
        foreach ($ds_anh_cua_tung_sp as $tung_hinh)
        {
          $anh=str_replace('public://','/sites/default/files/',$tung_hinh['uri']);
          array_push($img_full,$anh);
          array_push($arr_anh_goc,$tung_hinh['uri']);
        }
      }
    }
  }
}
elseif (isset($node->field_product[0]['product_id']))
{
//  $abc=commerce_product_load($node->field_product[0]['product_id']);
  foreach ($node->field_product as $id_sp)
  {
    if(isset(commerce_product_load($id_sp['product_id'])->field_images))
    {
      $ds_anh_cua_tung_sp=commerce_product_load($id_sp['product_id'])->field_images;
      if(isset($ds_anh_cua_tung_sp['und']))
      {
        foreach ($ds_anh_cua_tung_sp['und'] as $tung_hinh)
        {
          $anh=str_replace('public://','/sites/default/files/',$tung_hinh['uri']);
          array_push($img_full,$anh);
          array_push($arr_anh_goc,$tung_hinh['uri']);
        }
      }
      elseif (isset($ds_anh_cua_tung_sp[0]))
      {
        foreach ($ds_anh_cua_tung_sp as $tung_hinh)
        {
          $anh=str_replace('public://','/sites/default/files/',$tung_hinh['uri']);
          array_push($img_full,$anh);
          array_push($arr_anh_goc,$tung_hinh['uri']);
        }
      }
    }
  }
//    if((count($node->field_product)>0))
//    {
//
//    }
}
?>
<div class="row">
  <div class="col-lg-6">
    <div class="single-product-slider">
      <div class="single-product-thumb">
        <div class="swiper-container single-product-thumb-slider">
          <div class="swiper-wrapper">
            <?php foreach ($img_full as $hinh_anh):?>
            <div class="swiper-slide zoom zoom-hover">
              <div class="thumb-item">
                <a class="lightbox-image" data-fancybox="gallery" href="<?=$hinh_anh?>">
                  <img src="<?=$hinh_anh?>" alt="<?php print $node->title; ?>" title="<?php print $node->title; ?>">
                </a>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
      <div class="single-product-nav">
        <div class="swiper-container single-product-nav-slider">
          <div class="swiper-wrapper">
            <?php foreach ($arr_anh_goc as $hinh_anh):?>
            <div class="swiper-slide">
              <div class="nav-item">
                <img src="<?= image_style_url('300x200',$hinh_anh)?>" alt="<?php print $node->title; ?>" title="<?php print $node->title; ?>">
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="single-product-info product-info-variable">
      <h4 class="title"><?=$node->title; ?></h4>
      <div class="product-ratting mb-10">
        <div class="ratting-icons">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
      </div>
      <div class="prices">
        <span class="price"><?php print str_replace('.00','',render($content['product:commerce_price']))?></span>
      </div>
      <div class="product-desc mb-10">
        <?=$content['body']['#items'][0]['summary'];?>
        <div class="nut_like">
          <?php print render($content['fblikebutton_field']); ?>
        </div>
      </div>
      <div class="quick-add-to-cart">
        <?php print render($content['field_product']) ?>
      </div>
    </div>
  </div>
</div>
<div class="product-area product-description-review-area mt-50">
    <div class="row">
        <div class="col-lg-12">
            <div class="product-description-review">
                <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Mô tả</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Thông tin kĩ thuật</button>
                    </li>
                </ul>
                <div class="tab-content product-description-tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                        <div class="product-desc">
                            <?= render($content['body'])?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="productReview" role="tabpanel" aria-labelledby="product-review-tab">
                        <?=  render($content['field_thong_so_ki_thuat'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
