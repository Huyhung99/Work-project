<?php
?>
<div class="row">
    <div class="col-md-6">
        <div class="text-center">
            <?php print str_replace('img', 'img class="img-fluid"', render($content['field_image'])) ; ?>
        </div>
        <?php print str_replace('img', 'img class="img-fluid"', render($content['field_anh_lien_quan'])) ; ?>
    </div>
    <div class="col-md-6">
        <div class="content-page-right">
            <h2>ƯU ĐÃI ĐẶC BIỆT:</h2>
            <?php print render($node->field_uu_dai['und'][0]['value'])?>
        </div>
    </div>
</div>
<div class="products-details-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                href="#description" role="tab"
                                aria-controls="description">Mô tả sản phẩm</a></li>
        <li class="nav-item"><a class="nav-link" id="thong-so-ki-thuat-tab" data-bs-toggle="tab" href="#thong-so-ki-thuat"
                                role="tab" aria-controls="thong-so-ki-thuat">Thông số kĩ thuật</a></li>
        <li class="nav-item"><a class="nav-link" id="hinh-anh-san-pham-tab" data-bs-toggle="tab"
                                href="#hinh-anh-san-pham" role="tab" aria-controls="hinh-anh-san-pham">Hình ảnh sản phẩm</a></li>
        <li class="nav-item"><a class="nav-link" id="car-buying-process-tab" data-bs-toggle="tab"
                                href="#car-buying-process" role="tab" aria-controls="car-buying-process">Quy trình mua xe</a></li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel">
            <?=render($content['body'])?>
        </div>
        <div class="tab-pane fade" id="thong-so-ki-thuat" role="tabpanel">
            <?php if (!empty($node->field_thong_so_ky_thuat['und'][0]['value'])) print render($node->field_thong_so_ky_thuat['und'][0]['value']) ?>
        </div>
        <div class="tab-pane fade show" id="hinh-anh-san-pham" role="tabpanel">
            <?php if (!empty($content['field_cac_hinh_anh_xe'])) print render($content['field_cac_hinh_anh_xe'])?>
        </div>
        <div class="tab-pane fade show" id="car-buying-process" role="tabpanel">
            <?php if (!empty($node->field_quy_trinh_mua_xe['und'][0]['value'])) print render($node->field_quy_trinh_mua_xe['und'][0]['value'])?>
        </div>
    </div>
</div>

