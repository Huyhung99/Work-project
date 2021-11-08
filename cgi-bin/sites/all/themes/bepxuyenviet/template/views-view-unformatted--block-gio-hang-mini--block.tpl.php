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
<div class="header-bottom-right">
  <div class="shop-cart">
    <a href="#"><span class="lnr lnr-cart"></span>Giỏ hàng(<?=$tong_sl?>)</a>
  </div>
  <?php if($tong_sl!=0):?>
  <div class="shop-cart-hover fix">
    <ul class="can_heigth">
      <?php foreach ($skus as $item):?>
      <?php if($item['commerce_price']):?>
        <li>
          <div class="cart-img">
            <a href="<?=$item['path']?>"><?=$item['field_images']?></a>
          </div>
          <div class="cart-content">
            <h4><a href="<?=$item['path']?>">
                <h4><?=$item['line_item_title']?></h4>
              </a></h4>
            <span class="quantity"><?=$item['quantity']?> × <?= number_format(substr_replace($item['commerce_price'],'',strlen($item['commerce_price'])-2,2))?></span>
            <div class="price-box"><span class="new-price"><i class="fa fa-money" aria-hidden="true"></i> : <?= number_format(substr_replace($item['commerce_price'] * $item['quantity'],'',strlen($item['commerce_price'])-2,2))?> đ</span></div>
          </div>
        </li>
      <?php endif;?>
      <?php endforeach;?>
    </ul>
    <ul>
      <li class="total-price"><h3>Tổng tiền : <span><?=number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2), 0, '', ',')?> đ</span></h3></li>
      <li class="checkout-bg">
        <a href="/cart">Xem giỏ hàng<i class="fa fa-angle-right"></i></a>
        <a href="/checkout">Thanh toán<i class="fa fa-angle-right"></i></a>
      </li>
    </ul>
  </div>
  <?php endif;?>
</div>
