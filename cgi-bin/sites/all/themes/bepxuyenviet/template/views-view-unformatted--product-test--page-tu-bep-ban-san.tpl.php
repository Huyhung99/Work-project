<!--[nid]{{}}[title]{{}}[field_product]{{}}[commerce_price]{{}}[field_images]{{}}[body]-->

<div class="box-product">
    <?php foreach ($rows as $row):?>
    <?php
        $arr = explode('{{}}',$row);
        $nid = $arr[0];
        $title = $arr[1];
        $field_product = $arr[2];
        $price = $arr[3];
        $image = $arr[4];
        $body = $arr[5];
        $node = node_load($nid);
    ?>
    <div class="item-product">
        <div class="row">
            <div class="col-md-8 col-xl-4 order-2 order-md-2 order-xl-1">
                <h3 class="product-title mb-20 mt-20  d-xl-none d-md-block"><?=$title?></h3>
                <?=$body?>
            </div>
            <div class="col-md-4 col-xl-4 order-1 order-md-1 order-xl-2"><?=$image?></div>
            <div class="col-md-12 col-xl-4 order-3 order-md-3 order-xl-3">
                <div class="product-form-cart">
                    <h3 class="product-title mb-30 d-none d-xl-block"><?=$title?></h3>
                    <nav class="nav box-gia-phu flex-column">
                        <?php $d = 0 ;?>
                        <?php foreach ($node->field_product['und'] as $item):?>
                            <?php
                            $product = commerce_product_load($item['product_id']);
                            $gia_phu = taxonomy_term_load($product->field_gia_phu['und'][0]['tid']);

                            $price_gia_phu = number_format(substr($product->commerce_price['und'][0]['amount'],0,-2),0,'.',',');
                            ?>
                            <?php if ($d == 0):?>
                                <a class="nav-link gia-phu active" href="#" data-id="<?=$item['product_id']?>" data-value="<?=$product->field_gia_phu['und'][0]['tid']?>"><?=$gia_phu->name.': '. $price_gia_phu?> đ</a>
                                <?php $first_product = $item['product_id']?>
                            <?php else:?>
                                <a class="nav-link gia-phu" href="#" data-id="<?=$item['product_id']?>" data-value="<?=$product->field_gia_phu['und'][0]['tid']?>"><?=$gia_phu->name.': '. $price_gia_phu?> đ</a>
                            <?php endif;
                            $d++;
                            ?>

                        <?php endforeach;?>
                    </nav>
                    <div class="quantity">
                    <div class="box-btn">
                        <a href="#" class="btn btn-decrease btn-primary"> - </a>
                        <input class="form-control product-quantity" type="number" name="quantity" min="1" max="1000" value="1" >
                        <a href="#" class="btn btn-increase btn-primary"> + </a>
                    </div>
                    <a class="btn btn-primary add-to-cart-form mt-30" href="/commerce/add-to-cart/<?=$first_product?>?path=<?=current_path();?>"> Thêm vào giỏ hàng</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
