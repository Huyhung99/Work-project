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
        <div class="col-md-4 product-image">
            <div id="quick-shop-image" class="product-image-wrapper">
                <div id="featuted-image" class="main-image featured1">
                    <?=$field_images?>
                </div>
            </div>
        </div>
        <div class="col-md-8 product-information">
            <div id="quick-shop-container">
                <h3 id="quick-shop-title"><?=$line_item_title?></h3>
                <div class="rating-star"><span class="shopify-product-reviews-badge" data-id="6537875078"></span></div>
                <div class="description">
                    <div id="quick-shop-description" class="text-left">
                        <p><strong>Mã sản phẩm: </strong><?=$sku?></p>
                        <p><strong>Số lượng: </strong><?=$quantity?></p>
                        <div>
                            <?php if ($commerce_price != $commerce_unit_price):?>
                                <del class="color-gray"><?=number_format($commerce_price,0,',','.')?> đ </del>
                                <span class="color-red m-l20"><?=number_format($commerce_unit_price,0,',','.')?> đ</span>
                            <?php else:?>
                                <p><strong>Giá: </strong><span class="color-red"><?=number_format($commerce_unit_price,0,',','.')?> đ</span></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <h3 class="color-red">Tổng cộng: <?=number_format($commerce_total,0,',','.')?> đ</h3>
            </div>
        </div>
    </div>

<?php endforeach; ?>