<!--[path]{{}}[field_image]{{}}[title]{{}}[body]-->
<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}', $row); ?>
<?php endforeach; ?>


<div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
  <div class="container">
    <div class="block-header">
      <h3 class="block-header__title">Sản phẩm mua nhiều</h3>
      <div class="block-header__divider"></div>
      <div class="block-header__arrows-list">
        <button class="block-header__arrow block-header__arrow--left" type="button">
          <i width="7px" height="11px" class="fa fa-angle-left"></i>
        </button>
        <button class="block-header__arrow block-header__arrow--right" type="button">
          <i width="7px" height="11px" class="fa fa-angle-right"></i>
        </button>
      </div>
    </div>
    <div class="block-products-carousel__slider">
      <div class="block-products-carousel__preloader"></div>
      <div class="owl-carousel">
        <?php $a=0;?>
        <?php foreach ($rows as $id => $row): ?>
          <?php if($a%4==0||$a==0){print '<div class="block-products-carousel__column">';}?>
          <div class="block-products-carousel__cell">
            <div class="product-card product-card--hidden-actions ">
              <?php print $row; ?>
            </div>
          </div>
          <?php $a++;?>
          <?php if($a%4==0&&$a!=0){print '</div>';}?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
