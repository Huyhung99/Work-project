<?php

?>
<div class="detail-product-page">
    <div class="row">
        <div class="col-md-6">
            <?php
            $avatar_uri = $node->field_image['und'][0]['uri'];
            $path_avatar = image_style_url('500_x_400', $avatar_uri);
            $original_avatar = file_create_url($avatar_uri);
            ?>
            <div class="overlay-link">
                <a class="lightbox-image" data-fancybox="product" href="<?=$original_avatar?>">
                    <img src="<?=$path_avatar?>" class="img-fluid" title="<?=$node->field_image['und'][0]['alt']?>" alt="<?=$node->field_image['und'][0]['alt']?>"/>
                </a>
            </div>
            <div class="overlay-link">
            <?php
            foreach ($node->field_anh_lien_quan['und'] as $item):
                $path_img = image_style_url('100_x_100', $item['uri']);
                $original_img = file_create_url($item['uri']);
            ?>
                <a class="lightbox-image" data-fancybox="product" href="<?=$original_img?>">
                    <img src="<?=$path_img?>" class="img-fluid" title="<?=$item['title']?>" alt="<?=$item['alt']?>"/>
                </a>
            <?php endforeach;?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-product">
                <h1 class="title-product"><?=$node->title?></h1>
                <p class="text-justify">
                    <?php print (str_replace('<p>','<p class="text-justify">',$content['body']['#items'][0]['summary']))?>
                </p>
                <div class="contact">
                    <a class="btn btn-danger" href="tel:0936809468">Liên hệ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-discription">
        <div class="tabs-box">
            <div class="tab-btn-box">
                <ul class="tab-btns tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab-1">Chi tiết sản phẩm</li>
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    <div class="content-box">
                        <?php if ($content['body']) print render($content['body'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

