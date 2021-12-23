<?php
dpm($node);
dpm($content);
?>
<div class="page-product">
    <div class="row">
        <div class="col-md-6">
            <div class="img-products">
                <?= render($content['field_image'])?>
                <?php print render($content['product:field_images'])?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-details-view-content">
                <div class="product-info">
                    <h3><?=$node->title?></h3>
                    <?=render($content['body']['#items'][0]['summary'])?>
                    <?php if (!empty($content['product:commerce_price'])):?>
                        <div class="price-box">
                            <span class="new-price"><span>Giá: </span><?= number_format(substr($content['product:commerce_price']['#items'][0]['amount'],0,-2),0,'.',',')?> đ</span>
                        </div>
                    <?php endif;?>
                    <?php print render($content['field_product'])?>
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
                                <?php print render($content['body'])?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>