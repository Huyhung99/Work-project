
<div class="page-product-detail">
    <div class="all-hyperion-page">
        <div class="product-simple-are">
            <div class="row">
                <div class="col-md-6">
                    <?php print render($content['field_image']); ?>
                    <div class="product-thumbnail">
                        <?php print render($content['product:field_images']); ?>
                    </div>
                    <div class="wrapper_addthis">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-simple-content">
                        <?php if (isset($node->field_cho_phep_dat_hang_vao_gio['und'][0]['value'])):?>
                        <div class="checkbox">
                            <span><i class="fa fa-check-square" aria-hidden="true"></i>Còn hàng</span>
                        </div>
                        <?php endif;?>
                        <ul class="content-detail-product">
                            <?php if (isset($content['product:field_mo_ta_1'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_1'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_2'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_2'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_3'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_3'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_4'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_4'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_5'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_5'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_6'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_6'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_7'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_7'][0]['#markup']?></li>
                            <?php endif;?>
                            <?php if (isset($content['product:field_mo_ta_8'][0]['#markup'])):?>
                                <li><i class="fas fa-chevron-right"></i> <?= $content['product:field_mo_ta_8'][0]['#markup']?></li>
                            <?php endif;?>
                        </ul>
                        <?php if (isset($node->field_cho_phep_dat_hang_vao_gio['und'][0]['value'])):?>
                        <?php if ($node->field_cho_phep_dat_hang_vao_gio['und'][0]['value'] == '1'): ?>
                            <?php if (intval($content['product:commerce_price']['#items'][0]['amount']) > 0):
                                $length = strlen($content['product:commerce_price']['#items'][0]['amount']);
                                $price = substr_replace($content['product:commerce_price']['#items'][0]['amount'], '', $length - 2, 2);
                                $price_formated = number_format($price, '0', '.', ',')
                                ?>
                                <h4 class="node-<?=$node->nid?>-product-commerce-price"><?= $price_formated ?> Đ</h4>
                                <div class="quick-add-to-cart">
                                    <?php print render($content['field_product']) ?>
                                </div>
                            <?php else: ?>
                                <div class="quick-add-to-cart contact-form">
                                    <a href="/bao-gia-san-pham?id=<?=$node->nid?>" class="single_add_to_cart_button hyper-page">Liên hệ</a>
                                </div>
                            <?php endif; ?>
                            <?php else:?>
                                <div class="quick-add-to-cart contact-form">
                                    <a href="/bao-gia-san-pham?id=<?=$node->nid?>" class="single_add_to_cart_button hyper-page">Liên hệ</a>
                                </div>
                        <?php endif; ?>
                        <?php else:?>
                            <div class="quick-add-to-cart contact-form">
                                <a href="/bao-gia-san-pham?id=<?=$node->nid?>" class="single_add_to_cart_button hyper-page">Liên hệ</a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
