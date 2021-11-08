<!--[order_id]{{}}[field_images]{{}}[sku]{{}}[quantity]{{}}[commerce_price]{{}}[line_item_title]{{}}[path]?sku=[sku]-->


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
    <?php $linkCart = print l('<i aria-hidden="true" class="fa fa-shopping-bag"></i> <span>'.$tong_sl.'</span>',
        'cart', array(
            'html' => true,
        ));
    ?>
    <ul class="dropdown-menu cart-list">
        <?php foreach ($skus as $sku => $item): ?>
        <li>
            <?php print l($item['field_images'], $item['path'], array(
                'html' => true,
                'attributes' => array(
                        'class' => array('photo','isDisable'),
                )
            )); ?>
            <h6><?php print l($item['line_item_title'], $item['path'],array(
                    'html' => true,
                    'attributes' => array(
                        'class' => array('isDisable')
                    )
                )); ?></h6>
            <p><?php print $item['quantity']; ?>x - <span class="price"><?=number_format($item['quantity'] *$item['commerce_price'], 0, '', '.'); ?>đ</span></p>
        </li>
        <?php endforeach; ?>
        <li class="total">
            <span class="pull-right text-thm1"><strong>Tổng: </strong><?=number_format($tong_tien, 0, '', '.')?> VNĐ</span>
            <?php print l('Giỏ hàng', 'cart',array('attributes' => array('class' => 'text-white btn btn-default btn-cart bgc-green')));?>
        </li>
    </ul>

