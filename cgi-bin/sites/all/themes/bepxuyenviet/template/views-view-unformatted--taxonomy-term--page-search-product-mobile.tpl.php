<!--[title_field]{{}}[field_image]{{}}[path]{{}}[commerce_price_1]{{}}[add_to_cart_form]{{}}[field_cho_phep_dat_hang_vao_gio]-->
<div class="page-product">
    <div class="caregory-products-area">
        <div class="row">
            <?php foreach ($rows as $row): ?>
                <?php $arr = explode('{{}}', $row);
                $title = $arr[0];
                $field_image = $arr[1];
                $path = $arr[2];
                $price = $arr[3];
                $add_to_cart = $arr[4];
                $state_product = $arr[5];
                $nid = $arr[6];
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="single-new-product mt-40 category-new-product box-shadow bdr-10">
                        <div class="product-img">
                            <a href="<?=$path?>">
                                <img src="<?=$field_image?>" class="first_img" alt="<?=trim($title)?>" title="<?=trim($title)?>" />
                                <img src="<?=$field_image?>" class="seceond_img" alt="<?=trim($title)?>" title="<?=trim($title)?>"/>
                            </a>
                            <div class="new-product-action">
                                <?php if ($state_product == 'Có'):?>
                                    <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
                                    <div class="add-to-cart d-none">
                                        <?=$add_to_cart?>
                                    </div>
                                <?php else:?>
                                    <a href="/bao-gia-san-pham?id=<?=$nid?>" ><span class="lnr lnr-phone-handset"></span> Liên hệ</a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <a href="<?=$path?>">
                                <h3><?=$title?></h3>
                            </a>
                            <div class="product-price-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <?php if ($state_product == 'Có'):?>
                                <div class="price">
                                    <h4><?=$price?></h4>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
