<?
?>
<div id="product" class="content clearfix mb-30">
    <div id="product-image" class="product-image row no_full_width col-sm-12">
            <div class="image featured fadeInUp not-animated" data-animate="fadeInUp">
                <img src="<?= file_create_url($node->field_image['vi'][0]['uri'])?>" alt="<?=$node->title?>" class="img-responsive img-product">
            </div>
            <div id="gallery_main" class="product-image-thumb thumbs mobile_full_width ">
                <ul style="opacity: 0; display: block;" class="slide-product-image owl-carousel owl-theme">
                    <?php foreach ($content['product:field_images']['#items'] as $item):?>
                        <li class="image">
                            <a href="<?=file_create_url($item['uri'])?>" class="cloud-zoom-gallery">
                                <img src="<?=file_create_url($item['uri'])?>" alt="<?=$item['title']?>" class="img-responsive img-product">
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    <div id="product-information" class="product-information row text-center no_full_width col-sm-12">
        <h1 id="page-title" class="text-left">
            <span itemprop="name"><?=$node->title?></span>
        </h1>
        <div id="product-header" class="clearfix">
            <div id="product-info-left">
                <div class="description">
                    <p>
                        <?= $node->field_tom_tat_ngan['und'][0]['value']?>
                    </p>
                </div>
                <?php if(!empty($content['field_tags'])):?>
                <div class="relative text-left">
                    <?= render($content['field_tags'])?>
                </div>
                <?php endif;?>
                <div class="detail-price">
                    <span class="price"><?=$content['product:commerce_price'][0]['#markup']?></span>
                </div>
            </div>
            <div id="product-info-right">
                <?=render($content['field_product'])?>
            </div>
        </div>
    </div>
</div>
