
<div class="product-detail">
    <div class="row">
        <div class="col-md-6">
            <div class="product-image">
                <?php print render($content['field_image'])?>
                <?php print render($content['field_anh_lien_quan'])?>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="product-title"><?=$node->title?></h2>
            <?php if ($node->field_ma_san_pham['und'][0]['value']):?>
                <strong class="sku">
                    Mã sản phẩm:
                </strong>
                <span><?= $node->field_ma_san_pham['und'][0]['value']?></span>
            <?php endif;?>
            <div class="product-summary">
                <?php print render($content['field_mo_ta_ngan'])?>
                <strong class="d-block">Tính năng:</strong>
                <?php print render($content['field_tinh_nang'])?>
            </div>
            <p class="mrt-20">
                <a href="tel:0339646668" class="cs-btn-one">Liên hệ</a>
            </p>
        </div>
    </div>

    <div class="detail-content">
        <ul class="nav nav-tabs mrt-30" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Chi tiết sản phẩm</a>
            </li>
        </ul>
        <div class="tab-content mrt-30" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php print render($content['body'])?>
            </div>
        </div>
    </div>
</div>