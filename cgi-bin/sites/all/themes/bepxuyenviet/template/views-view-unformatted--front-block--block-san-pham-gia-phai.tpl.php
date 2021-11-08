<div class="section-title section-title-4">
  <h2><?php print t($view->get_title())?></h2>
</div>
<div class="row">
  <div class="new-product-home-4-active">
    <?php foreach ($rows as $row):?>
      <?php $row=explode('{{}}',$row);?>
      <div class="col-lg-12">
        <div class="single-new-product hot-product">
          <div class="product-img">
            <a href="<?=$row[4]?>">
              <?=$row[6]?>
              <!--                      --><?//=$arr[7]?>
            </a>
          </div>
          <div class="product-content text-center">
            <h3><a href="<?=$row[4]?>"><?=$row[3]?></a></h3>
            <div class="price">
              <h4><?=str_replace('.00','',$row[2])?></h4>
            </div>
          </div>
          <div class="product-icon-wrapper">
            <div class="product-icon">
              <ul>
                <li><a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span></a><div class="add-to-cart d-none">
                    <?=$row[0]?></div></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach;?>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="single-static-banner display-none-ipad">
      <div class="single-static-img">
        <a href="/san-pham"><img class=" img-responsive img-fluid" src="/sites/default/files/tu-bep-nhua-tan-co-dien-banner.jpg" alt="" /></a>
        <div class="single-static-text single-static-text-4">
          <h3 class="title_image">Sản phẩm chất lượng cao</h3>
          <span class="fs-12pt">Luôn là sự lựa chọn hàng đầu của khách hàng</span>
        </div>
      </div>
    </div>
  </div>
</div>
