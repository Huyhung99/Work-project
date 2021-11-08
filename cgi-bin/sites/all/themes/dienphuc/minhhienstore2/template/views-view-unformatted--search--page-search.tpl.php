<!--[title]{{}}[field_image]{{}}[path]{{}}[field_image_1]{{}}[commerce_price]{{}}[sku]{{}}[title_1]-->
<div class="product-area section-pt-30">
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-md-3 col-6">
        <?php $arr=explode('{{}}',$row); ?>
        <?php if(isset($arr[5])):?>
          <div class="single-product-wrap mt-10">
            <div class="product-image">
              <a title="title_field" href="<?=$arr[2]?>?sku=<?=$arr[5]?>"><?=$arr[1]?></a>
            </div>
            <div class="product-content">
              <div class="price-box">
                <span>Giá: </span><span class="new-price"><?=$arr[4]?></span>
              </div>
              <h6 class="product-name"><a href="<?=$arr[2]?>?sku=<?=$arr[5]?>"><?=$arr[1]?></a></h6>
              <div class="product-button-action">
                <a href="#" class="add-to-cart">Mua ngay</a>
                <div class="hide block-add-to-cart-product-1"><?=$arr[4]?></div>
              </div>
            </div>
          </div>
        <?php else:?>
          <div class="single-product-wrap mt-10">
            <div class="product-image">
              <a title="title_field" href="<?=$arr[2]?>?sku=<?=$arr[5]?>"><?=$arr[1]?></a>
            </div>
            <div class="product-content">
              <h6 class="product-name"><a href="<?=$arr[2]?>"><?=$arr[1]?></a></h6>
            </div>
          </div>
        <?php endif;?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
