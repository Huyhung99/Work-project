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
<div class="shopping-cart-wrap">
    <a href="/cart"><i class="icon-shopping-bag2"></i><span class="cart-total"><?=$tong_sl?></span> <span class="cart-total-amunt"><?= number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2),0,'',',')?>đ</span></a>
    <ul class="mini-cart">
        <?php foreach ($skus as $item):?>
            <li class="cart-item">
                <div class="cart-image">
                    <a href="<?=$item['path']?>"><?=$item['field_images']?></a>
                </div>
                <div class="cart-title">
                    <a href="<?=$item['path']?>">
                        <h4><?=$item['line_item_title']?></h4>
                    </a>
                    <div class="quanti-price-wrap">
                        <span class="quantity"><?=$item['quantity']?> ×</span>
                        <div class="price-box"><span class="new-price"><?= number_format(substr_replace($item['commerce_price'] * $item['quantity'],'',strlen($item['commerce_price'])-2,2))?> đ</span></div>
                    </div>
                </div>
            </li>
        <?php endforeach;?>
        <li class="subtotal-box">
            <div class="subtotal-title">
                <h3>Tổng tiền :</h3><span><?=number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2), 0, '', ',')?> đ</span>
            </div>
        </li>
        <li class="mini-cart-btns">
            <div class="cart-btns">
                <a href="/cart">Xem giỏ hàng</a>
                <a href="/checkout">Thanh toán</a>
            </div>
        </li>
    </ul>
</div>
