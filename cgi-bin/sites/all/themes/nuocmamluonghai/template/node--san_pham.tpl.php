<?php
?>
<div class="inner-shop-details">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="inner-product-details-left">
                <div class="tab-content">
                    <?php print render($content['field_image'])?>
                </div>
                <div class="image-thumbnail">
                    <?php print render($content['field_anh_lien_quan'])?>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="inner-product-details-right">
                <h3><?=$node->title?></h3>
                <p><?php print $node->body['und'][0]['summary'];?></p>
                <p class="price">Giá : <span class="contact color-yellow"> Liên hệ</span></p>
            </div>
        </div>
    </div>
    <div class="product-details-tab-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="border-description">
                    <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Mô tả</a></li>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="description">
                        <p><?php print render($content['body']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



