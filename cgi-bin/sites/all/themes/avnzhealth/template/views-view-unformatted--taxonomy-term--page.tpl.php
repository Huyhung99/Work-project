<div class="shopify-section index-section index-section-prosli">
  <div data-section-id="1490952827558" data-section-type="prosli-section">
    <section class="home_prosli_layout">
      <div class="home_prosli_wrapper">
        <div class="row">
          <?php foreach ($rows as $id => $row): ?>
            <div class="content_product col-sm-3 col-xs-6">
              <?php print str_replace('Giá₫', '',
                str_replace('Giá gốc₫','<span class="original-price">',
                  str_replace('Giá bán₫', ' đ</span>',
                    $row))); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>
</div>
