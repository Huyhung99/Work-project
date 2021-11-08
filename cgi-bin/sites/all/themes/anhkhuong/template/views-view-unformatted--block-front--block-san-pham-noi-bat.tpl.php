<!--[path]{{}}[field_image]{{}}[title]{{}}[body]-->
<div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
  <div class="container">
    <div class="block-header">
      <h3 class="block-header__title">Sản phẩm nổi bật</h3>
      <div class="block-header__divider"></div>
    </div>
    <div class="block-products__body">
      <?php $a=0;?>
      <?php foreach ($rows as $id => $row): ?>
      <?php $arr = explode('{{}}', $row) ; ?>
      <?php if($a==0):?>
      <div class="block-products__featured">
        <div class="block-products__featured-item">
          <div class="product-card product-card--hidden-actions ">
            <div class="product-card__image product-image img-loaisanpham">
              <a href="<?= $arr[0]?>" class="product-image__body">
                <img class="product-image__img" src="<?= $arr[1]?>" alt="thiết bị vệ sinh anh khương">
              </a>
            </div>
            <div class="product-card__info title-taxonomy">
              <div class="product-card__name">
                <h3 class="title-taxonomy-loaisanpham"><?= $arr[2]?></h3>
                <p class="body-spnb"><?=$arr[3]?></p>
              </div>
            </div>
            <div class="product-card__actions">
              <div class="product-card__prices">
                <p class="price-spnb"><span class="red-color">Giá: </span><a href="tel:+840600730">Liên hệ <i class="fa fa-phone"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-products__list">
        <?php endif;?>
        <?php if($a!=0):?>

          <div class="block-products__list-item">
            <div class="product-card product-card--hidden-actions ">
              <div class="product-card__image product-image img-loaisanpham">
                <a href="<?= $arr[0]?>" class="product-image__body">
                  <img class="product-image__img" src="<?= $arr[1]?>" alt="thiết bị vệ sinh anh khương">
                </a>
              </div>
              <div class="product-card__info title-taxonomy">
                <div class="product-card__name">
                  <h3 class="title-taxonomy-loaisanpham"><?= $arr[2]?></h3>
                </div>
              </div>
              <div class="product-card__actions">
                <div class="product-card__prices">
                  <p class="price-spnb"><span class="red-color">Giá: </span><a href="tel:+840600730">Liên hệ <i class="fa fa-phone"></i></a></p>
                </div>
              </div>
            </div>
          </div>
        <?php endif;?>
        <?php $a++;?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

