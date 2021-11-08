<!--[order_id]{{}}
[field_images]{{}}
[product_id]{{}}
[quantity]
{{}[commerce_price]
{{}}[line_item_title]
{{}}[path]-->
<?php $tong_sl = 0; $tong_tien = 0; $skus = array(); ?>
<?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}', $row);
    $field_images = trim($arr[1]);
    $sku = trim($arr[2]);
    $quantity = trim($arr[3]);
    $line_item_title = trim($arr[5]);
    $path = trim($arr[6]);
    $commerce_price = floatval($arr[4]);
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
<?php
if ($logged_in):
?>
<li>
    <div class="dropdown dropdown-cart">
        <?php $linkCart = print l('<strong>'.$tong_sl.'</strong>',
            'cart', array(
                'html' => true,
                'attributes' => array('class'=>'cart_bt')
            ));
        ?>
        <div class="dropdown-menu">
            <ul>
                <?php foreach ($skus as $sku => $item): ?>
                    <li>

                        <?php
                        $temp_total = floatval($item['quantity'] * $item['commerce_price']);
                        $total = substr_replace($temp_total,'.',strlen($temp_total)-2,0);
                        ?>
                        <?= l('<figure>'.$item['field_images'].'</figure><strong><span>'.$item['quantity'].' x '.$item['line_item_title'].'</span>'.'£'.$total.'</strong>',
                            $item['path'],
                            array(
                                'html' => true,
                                'attributes' => array('class' => array('isDisabled'))
                            ))?>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="total_drop">
                <div class="clearfix"><strong>Tổng tiền:</strong><span>£<?=substr_replace($tong_tien,'.',strlen($tong_tien)-2,0);?></span></div>
                <a href="/cart" class="btn_1 outline ">Xem giỏ hàng</a><a href="/checkout" class="btn_1">Thanh toán</a>
            </div>
        </div>

    </div>
    <!-- /dropdown-cart-->
</li>
<?php endif;?>


    <li>
        <div class="dropdown dropdown-cart">
            <a href="/cart" class="cart_bt" data-toggle="dropdown"><strong>0</strong></a>
        </div>
        <!-- /dropdown-cart-->
    </li>