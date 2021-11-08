<?php

?>
<div class="row single-product-area product-details-inner ">
    <div class="col-lg-5 col-md-6">
        <!-- Product Details Left -->
        <?php print render($content['field_image']); ?>
        <div class="product-thumbnail">
            <?php print render($content['product:field_images']); ?>
        </div>


        <!--// Product Details Left -->
    </div>

    <div class="col-lg-7 col-md-6">
        <div class="product-details-view-content">
            <div class="product-info">
                <h3><?=$node->title?></h3>
                <div class="sku"><span>Mã sản phẩm: </span><span class="title-sku"><?=$content['product:sku']['#sku']?></span></div>
                <div class="category"><span><?= render($content['field_product_category'])?></span></div>
                <div class="price-box">
                    <?php if (isset($content['product:commerce_price']['#items'][0]['amount'])):
                        $length = strlen($content['product:commerce_price']['#items'][0]['amount']);
                        $price = substr_replace($content['product:commerce_price']['#items'][0]['amount'],'',$length-2,2);
                        $price_formated = number_format($price,'0','.',',')
                        ?>
                        <span class="new-price"><span>Giá: </span><?= $price_formated?> đ</span>
                    <?php endif;?>
                </div>
                <?php if (isset($node->body['und'][0]['summary'])):?>
                    <p><?=$node->body['und'][0]['summary']?></p>
                <?php endif;?>
                <div class="single-add-to-cart">
                    <?php print render($content['field_product'])?>
                </div>
                <ul class="stock-cont">
                    <?php if ($node->field_tags != ''):?>
                        <li class="product-stock-status"><?= render($content['field_tags'])?></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-description-area section-pt">
    <div class="row">
        <div class="col-lg-12">
            <div class="product-details-tab">
                <ul role="tablist" class="nav">
                    <li class="active" role="presentation">
                        <a data-toggle="tab" role="tab" href="#description" class="active text-uppercase">Mô tả</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="product_details_tab_content tab-content">
                <!-- Start Single Content -->
                <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                    <div class="product_description_wrap  mt-30">
                        <div class="product_desc mb-30">
                            <?php if (!empty($content['body'])):?>
                                <?php print render($content['body'])?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
