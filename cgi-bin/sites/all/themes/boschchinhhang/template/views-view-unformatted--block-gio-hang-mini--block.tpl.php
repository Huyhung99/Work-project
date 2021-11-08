<?php $tong_sl = 0; $tong_tien = 0; $skus = array(); ?>
<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}', $row);
  $field_images = trim($arr[1]);
  $sku = trim($arr[2]);
  $quantity = trim($arr[3]);
  $line_item_title = trim($arr[5]);
  $path = trim($arr[6]);
  $commerce_price = intval($arr[4]);
  if(!isset($skus[$sku])){
    $skus[$sku]['line_item_title'] = $line_item_title;
    $skus[$sku]['field_images'] = $field_images;
    $skus[$sku]['sku'] = $sku;
    $skus[$sku]['quantity'] = intval($quantity);
    $skus[$sku]['path'] =  $path;
    $skus[$sku]['commerce_price'] = $commerce_price;
  }else{
    $skus[$sku]['quantity'] += intval($quantity);
  }
  if($skus[$sku]['commerce_price']!=null)
  {
    $tong_sl += intval($quantity);
    $tong_tien += (intval($quantity) * $commerce_price);
  }
  ?>
<?php endforeach; ?>
<div class="header-action-cart">
  <a class="cart-icon" href="/cart">
    <span class="cart-count"><?=$tong_sl?></span>
    <i class="ti-shopping-cart"></i>
  </a>
  <?php if($tong_sl!=0):?>
  <div class="cart-dropdown-menu">
    <div class="minicart-action">
      <?php foreach ($skus as $item):?>
      <?php if($item['commerce_price']):?>
      <div class="minicart-item">
        <div class="thumb">
          <a href="<?=$item['path']?>"><?=$item['field_images']?></a>
        </div>
        <div class="content">
          <h4 class="title"><a href="<?=$item['path']?>"><?=$item['line_item_title']?></a></h4>
          <p class="price mb-0"><?=$item['quantity']?> × <?= number_format(substr_replace($item['commerce_price'],'',strlen($item['commerce_price'])-2,2))?> VND</p>
          <?php $tong_tien_tung_hang=intval($item['quantity']) * intval($item['commerce_price']);?>
          <p class="price"><i class="fa fa-money mr-5"></i><?=number_format(substr_replace($tong_tien_tung_hang,'',strlen($item['commerce_price'])-2,2))?> VND</p>
        </div>
      </div>
      <?php endif;?>
      <?php endforeach;?>
    </div>
    <div class="shopping-cart-total">
      <h4>Tổng tiền <span><?=number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2), 0, '', ',')?> VNĐ</span></h4>
    </div>
    <div class="shopping-cart-btn">
      <a class="btn-theme m-0" href="/cart">Xem giỏ hàng</a>
      <a class="btn-theme m-0" href="/checkout">Thanh toán</a>
    </div>
  </div>
  <?php endif;?>
</div>
