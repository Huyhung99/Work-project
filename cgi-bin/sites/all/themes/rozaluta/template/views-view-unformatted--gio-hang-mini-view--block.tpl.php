
<div class="cart-area">
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
        $tong_sl += intval($quantity);
        $tong_tien += (intval($quantity) * $commerce_price);
    ?>
  <?php endforeach; ?>
  <?php $linkCart = print l('<i aria-hidden="true" class="fa fa-shopping-cart"></i> <span>'.$tong_sl.'</span>',
  'cart', array('html' => true));
 ?>

  <ul>
    <?php foreach ($skus as $sku => $item): ?>
      <li>
        <div class="cart-single-product">
          <div class="media">
            <div class="pull-left cart-product-img">
              <?php print l($item['field_images'], $item['path'], array(
                'html' => true,
                  'attributes' => array(
                          'class' => array('isDisabled')
                  )
              )); ?>
            </div>
            <div class="media-body cart-content">
              <ul>
                <li>
                  <h2><?php print l($item['line_item_title'], $item['path'],array(
                          'html' => true,
                          'attributes' => array(
                                  'class' => array('isDisabled')
                          )
                      )); ?></h2>
                  <p><span>SKU:</span> <?=$sku?></p>
                </li>
                <li>
                  <p>X <?php print $item['quantity']; ?></p>
                </li>
                <li>
                  <p class="color-red"><?=number_format(substr_replace($item['quantity'] *$item['commerce_price'],'',strlen($item['commerce_price'])-2,2), 0, '', '.'); ?>đ</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
    <li>
      <span><span>Tổng tiền </span></span><span><?=number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2), 0, '', '.')?> VNĐ</span>
    </li>
    <li>
      <ul class="checkout">
          <li><?php print l('Giỏ hàng', 'cart',array('attributes' => array('class' => 'default-btn')));?></li>
        <li><?php print l('Thanh toán', 'checkout', array('attributes' => array('class' => 'default-btn'))) ?></li>
      </ul>
    </li>
  </ul>
</div>
