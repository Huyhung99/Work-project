
<div class="page-product">
    <div class="caregory-products-area">
        <div class="row mlr-0">
            <?php
            //[title_field]{{}}[commerce_price]{{}}[path]{{}}[field_image]{{}}[field_cho_phep_dat_hang_vao_gio]
            foreach ($rows as $id => $row):?>
                <?php $product = explode('{{}}',$row);
                $title = $product[0];
                $price = $product[1];
                $path = $product[2];
                $image = $product[3];
                $state_product = $product[4];
                $nid = $product[5];
                $add_to_cart = $product[6];
                ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-6 plr-0 border-product">
                    <div class="single-new-product category-new-product ">
                        <div class="product-img">
                            <a href="<?=$path?>">
                                <img src="<?=$image?>" class="first_img" alt="<?=trim($title)?>" title="<?=trim($title)?>" />
                            </a>
                            <div class="new-product-action">
                                <?php if ($state_product == 'Có'):?>
                                    <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
                                    <div class="add-to-cart d-none">
                                        <?=$add_to_cart?>
                                    </div>
                                <?php else:?>
                                    <a href="/bao-gia-san-pham?id=<?=trim($nid)?>" ><span class="lnr lnr-phone-handset"></span> Liên hệ</a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h3><a href="<?=$path?>">
                                    <?=(trim($title))?>
                                </a>
                            </h3>
                            <?php if ($state_product == 'Có'):?>
                                <div class="price">
                                    <h4><?=$price?></h4>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
