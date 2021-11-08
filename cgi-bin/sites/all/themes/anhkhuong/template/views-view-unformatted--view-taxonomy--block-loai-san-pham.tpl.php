<div class="block block-products-carousel" data-layout="grid-4"
     data-mobile-grid-columns="2">
  <div class="container">
    <div class="block-header">
      <h3 class="block-header__title">Loại sản phẩm</h3>
      <div class="block-header__divider"></div>
      <div class="block-header__arrows-list">
        <button class="block-header__arrow block-header__arrow--left"
                type="button">
          <i width="7px" height="11px" class="fa fa-angle-left"></i>
        </button>
        <button class="block-header__arrow block-header__arrow--right"
                type="button">
          <i width="7px" height="11px" class="fa fa-angle-right"></i>
        </button>
      </div>
    </div>
    <div class="block-products-carousel__slider">
      <div class="block-products-carousel__preloader"></div>
      <div class="owl-carousel">
        <?php foreach ($rows as $id => $row): ?>
          <div class="block-products-carousel__column">
            <div class="block-products-carousel__cell">
              <div class="product-card product-card--hidden-actions ">
                <?php print $row; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



