
    <div class="block">
        <div class="product product--layout--sidebar" data-layout="sidebar">
            <div class="product__content">
                <!-- .product__gallery -->
                <div class="product__gallery">
                    <div class="product-gallery">
                        <div class="product-gallery__featured">
                            <button class="product-gallery__zoom">
                                <svg width="24px" height="24px">
                                    <use xlink:href="/sites/default/files/sprite.svg#zoom-in-24"></use>
                                </svg>
                            </button>
                            <div class="owl-carousel" id="product-image">
                                <?php foreach ($node->field_anh_lien_quan['und'] as $item):?>
                                    <div class="product-image product-image--location--gallery">
                                        <!--
                The data-width and data-height attributes must contain the size of a larger version
                of the product image.

                If you do not know the image size, you can remove the data-width and data-height
                attribute, in which case the width and height will be obtained from the naturalWidth
                and naturalHeight property of img.product-image__img.
                -->
<!--                                        file_create_url($node->field_image['und'][0]['uri']);-->
                                        <?php $item['path'] = file_create_url($item['uri']);?>
                                        <a href="<?=$item['path']?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                            <img class="product-image__img" src="<?=$item['path']?>" alt="<?=$item['alt']?>">
                                        </a>
                                    </div>

                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="product-gallery__carousel">
                            <div class="owl-carousel" id="product-carousel">
                                <?php foreach ($node->field_anh_lien_quan['und'] as $item):?>
                                    <?php $item['path'] = file_create_url($item['uri']);?>
                                    <a href="<?=$item['path']?>" class="product-image product-gallery__carousel-item">
                                        <div class="product-image__body">
                                            <img class="product-image__img product-gallery__carousel-image img-responsive" src="<?=$item['path']?>" alt="<?=$item['alt']?>">
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .product__gallery / end -->
                <!-- .product__info -->
                <div class="product__info">
                    <h2 class="product__name"><?=$title?></h2>
                    <div class="product__description">
                        <?=$node->body['und'][0]['summary']?>
                    </div>
                </div>
                <!-- .product__info / end -->
                <!-- .product__sidebar -->
                <div class="product__sidebar">
                    <div class="product__availability">
                        Tình trạng: <span class="text-success">Còn hàng</span>
                    </div>
                    <div class="product__prices">
                        Giá :<span class=color-blue> Liên hệ</span>
                    </div>
                    <!-- .product__options -->

                    <!-- .product__options / end -->
                </div>
                <!-- .product__end -->

            </div>
        </div>
        <div class="product-tabs  product-tabs--layout--sidebar  product-tabs--sticky">
            <div class="product-tabs__list">
                <div class="product-tabs__list-body">
                    <div class="product-tabs__list-container container">
                        <a href="#tab-description" class="product-tabs__item product-tabs__item--active">Mô tả chi tiết</a>
                        <a href="#tab-feedback" class="product-tabs__item">Phản hồi</a>
                    </div>
                </div>
            </div>
            <div class="product-tabs__content">
                <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                    <div class="typography">
                        <?php print render($content['body'])?>
                        <?php print render($content['field_tags'])?>
                    </div>
                </div>
                <div class="product-tabs__pane" id="tab-feedback">

                    <?php $i = 0;
                    $length = count($content['comments']['comments']); ?>

                        <div class="reviews-view">
                            <div class="reviews-view__list">
                                <h3 class="reviews-view__header">Đánh giá của khách hàng</h3>
                                <div class="reviews-list">
                                    <ol class="reviews-list__content">
                                        <?php foreach($content['comments']['comments'] as $item):
                                        $i++;
                                        if ($i ==($length-2)){
                                            break;
                                        }
                                        ?>
                                        <li class="reviews-list__item">
                                            <div class="review">
                                                <div class="review__avatar"><img src="/sites/default/files/no-image.jpg" alt="Thiết bị vệ sinh Anh Khương"></div>
                                                <div class="review__content">
                                                    <div class="review__author"><?=$item['comment_body']['#object']->name?></div>
                                                    <div class="review__text"><?=$item['comment_body']['#object']->comment_body['und'][0]['value']?></div>
                                                    <?php $created = date('d-m-Y',$item['comment_body']['#object']->created)?>
                                                    <div class="review__date"><?=$created?></div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach;?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <?php print render($content['comments']['comment_form'])?>

                </div>
            </div>
        </div>
    </div>
