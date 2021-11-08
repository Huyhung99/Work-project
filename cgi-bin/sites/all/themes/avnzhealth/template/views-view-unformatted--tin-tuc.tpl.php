<div class="shopify-section index-section index-section-prosli">
    <div data-section-id="1490952827558" data-section-type="prosli-section">
        <section class="home_prosli_layout">
            <div class="home_prosli_wrapper">
                <div class="container">
                    <div class="row">
                        <?php foreach ($rows as $id => $row): ?>
                            <div class="col-xs-6 col-sm-2">
                              <div class="">
                                <?php print str_replace('Giá₫', '',
                                  str_replace('Giá gốc₫','<span class="original-price">',
                                    str_replace('Giá bán₫', ' đ</span>',
                                      $row))); ?>
                              </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
