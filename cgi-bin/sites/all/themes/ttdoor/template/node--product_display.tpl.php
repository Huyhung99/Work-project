<div class="row">
    <!-- product image gallery -->
    <div class="col-lg-5">
        <?php print render($content['field_image']); ?>
        <div class="product-thumbnail">
            <?php print render($content['product:field_images']); ?>
        </div>
    </div>
    <div class="col-lg-7 product-info">
        <h1 class="product-info__title" id="title-product"><?=$node->title?></h1>
        <div class="product-info__rate">
            <div class="product-rate">
                <div class="product-rate__star">
                    <span class="rate-5"></span>
                </div>
            </div>
        </div>
        <div class="product-info__desc">
            <?= $node->body['und'][0]['summary']?>
            <div class="product-info__price">
                <span class="title-price">Giá: </span><a href="/lien-he"><span class="color-blue"><i class="fas fa-phone"></i> Liên hệ</span></a>
            </div>
            <div class="content-contact">
                <a href="tel:0867188579" class="contact-product btn btn-submit mr-10"><i class="fas fa-phone"></i> Gọi CSKH</a>
                <a href="/modal_forms/nojs/webform/193" class="ctools-use-modal cctools-modal-modal-popup-medium btn btn-submit" id="contact"><i class="fas fa-download"></i> Yêu cầu báo giá</a>
            </div>
        </div>
    </div>
    <!-- product main information -->
</div>
<div class="product-details my-30">
    <h3 class="color-yellow"><strong>MÔ TẢ CHI TIẾT</strong></span></h3>
    <div class="tab-content product-details__content" id="pills-tabContent">
        <!-- product description tab -->
        <div class="tab-pane fade product-details__content--desc show active" id="pills-desc" role="tabpanel"
             aria-labelledby="pills-desc-tab">
            <?= render($content['body'])?>
        </div>
        <!-- product size tab -->
    </div>
</div>

