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
<div id="umbrella" class="list-inline unmargin">

    <div class="cart-link">
        <a href="/cart" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
            <i class="sub-dropdown1"></i>
            <i class="sub-dropdown"></i>
            <div class="num-items-in-cart">
										<span class="icon">
										  Cart
										  <span class="number"><?=$tong_sl?></span>
										</span>
            </div>
        </a>
        <div id="cart-info" class="dropdown-menu" style="display: none;">
            <div id="cart-content">
                <div class="items control-container">
                    <?php foreach ($skus as $item):?>
                        <div class="row items-wrapper">
                            <div class="col-md-8 cart-left">
                                <a class="cart-image" href="<?=$item['path']?>"><?=$item['field_images']?></a>
                            </div>
                            <div class="col-md-16 cart-right">

                                <div class="cart-title">
                                    <a href="<?=$item['path']?>">
                                        <?=$item['line_item_title']?>
                                    </a>
                                </div>
                                <div class="cart-price">
                                    <?= number_format(floatval(substr_replace($item['commerce_price'] * $item['quantity'],'',strlen($item['commerce_price'])-2,2)),2,',','.')?><span class="x"> x </span><?=$item['quantity']?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="subtotal">
                    <span>Tổng tiền: </span><span class="cart-total-right">$ <?=number_format(substr_replace($tong_tien,'',strlen($tong_tien)-2,2), 2, ',', '.')?> </span>
                </div>
                <div class="action">
                    <a class="btn" href="/checkout">Thanh Toán</a><a class="btn btn-1" href="/cart">Giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
