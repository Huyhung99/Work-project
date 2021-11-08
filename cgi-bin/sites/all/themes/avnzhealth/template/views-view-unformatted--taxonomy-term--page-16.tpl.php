<!--[path]{{}}[title_1]{{}}[status]{{}}[field_image]{{}}[field_image_1]{{}}[title]{{}}[commerce_price]-->
<div class="shopify-section index-section index-section-prosli">
  <div data-section-id="1490952827558" data-section-type="prosli-section">
    <section class="home_prosli_layout">
      <div class="home_prosli_wrapper">
        <div class="row">
          <?php foreach ($rows as $id => $row): ?>
            <?php $arr = explode('{{}}', $row) ; ?>
            <div class="content_product col-sm-3 col-xs-6">

              <div class="row-container product list-unstyled clearfix">
                <div class="row-left">
                  <a href="<?= $arr[0]?>" title="<?= $arr[1]?>" class="hoverBorder container_item">
                    <?= $arr[2]?>
                    <div class="hoverBorderWrapper">
                      <?= $arr[3]?>
                      <div class="mask"></div>
                      <?= $arr[4]?>
                    </div>
                  </a>
                  <div class="hover-mask">
                    <div class="group-mask">
                      <div class="inner-mask">
                        <div class="group-actionbutton">
                          <ul class="quickview-wishlist-wrapper">
                            <li class="quickview hidden-xs hidden-sm">
                              <div class="product-ajax-cart">
                                <span class="overlay_mask"></span>

                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!--inner-mask-->
                    </div>
                    <!--Group mask-->
                  </div>
                </div>
                <div class="mh-162">
                <div class="title-search">
                  <div class="product-title"><h3><?= $arr[5]?></h3></div>
                </div>

                <?php if(strlen($arr[6])>=3):?>
                <div class="product-price-all-product">
                  <span class="price_sale">Giá: <span class="money"><?php print str_replace('Giá₫', '',
                        str_replace('Giá gốc₫','<span class="original-price">',
                          str_replace('Giá bán₫', ' đ</span>',
                            $arr[6]))); ?></span></span>
                </div>
                <?php endif;?>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>
</div>
