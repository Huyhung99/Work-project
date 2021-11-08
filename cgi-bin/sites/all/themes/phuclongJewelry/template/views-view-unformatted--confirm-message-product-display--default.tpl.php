<?php

?>
  <!--    [quantity]{{}}[commerce_total]{{}}[line_item_title]{{}}[field_images]{{}}[commerce_price]{{}}[sku]{{}}[commerce_unit_price]-->
<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}',$row);
  $quantity = floatval(trim($arr[0]));
  $commerce_total = trim($arr[1]);
  $line_item_title = trim($arr[2]);
  $field_images = trim($arr[3]);
  $commerce_price = trim($arr[4]);
  $sku = trim($arr[5]);
  $commerce_unit_price = trim($arr[6]);
  ?>
  <div class="row">
    <div class="col-md-24"><h3 id="quick-shop-title"><?=$line_item_title?></h3></div>
    <div class="col-md-8 product-image">
      <div id="quick-shop-image" class="product-image-wrapper">
        <div id="featuted-image" class="main-image featured1">
          <?=$field_images?>
        </div>
      </div>
    </div>
    <div class="col-md-16 product-information">
      <div id="quick-shop-container">
        <div class="rating-star">
          <i class="color-yellow fa fa-star"></i>
          <i class="color-yellow fa fa-star"></i>
          <i class="color-yellow fa fa-star"></i>
          <i class="color-yellow fa fa-star"></i>
          <?php $random=mt_rand(0,3);?>
          <i class="<?php if($random%2==0) print 'color-yellow'?> fa fa-star"></i>
        </div>
        <div class="description">
          <div id="quick-shop-description" class="text-left">
            <p><strong>Mã sản phẩm: </strong><?=$sku?></p>
            <p><strong>Số lượng: </strong><?=$quantity?></p>
            <div class="price-card">
              <?php if ($commerce_price != $commerce_unit_price):?>
                <del class="color-price">$<?=number_format($commerce_price,0,',','.')?></del>
                <span class="color-price m-l20">$<?=number_format($commerce_unit_price,0,',','.')?></span>
              <?php else:?>
                <p><strong>Giá: </strong><span class="color-price">$<?=number_format(substr($commerce_unit_price, 0, -2),0,',',',').'.'.substr($commerce_unit_price,  -2)?> </span></p>
              <?php endif;?>
            </div>
          </div>
        </div>
        <h3 class="price-sum color-red">Tổng cộng: <span class="color-price">$<?=number_format(substr($commerce_total, 0, -2),0,',',',').'.'.substr($commerce_total,  -2)?></span></h3>
      </div>
    </div>
  </div>

<?php endforeach; ?>
