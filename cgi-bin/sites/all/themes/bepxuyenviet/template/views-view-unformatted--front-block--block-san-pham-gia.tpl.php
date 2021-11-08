<!--[add_to_cart_form]{{}}[product_id]{{}}[commerce_price]{{}}
[title]{{}}[path]{{}}[field__nh]{{}}[field_image]{{}}
[field_cho_phep_dat_hang_vao_gio]{{}}[field_image_1]
{{}}[field_images_1---]{{}}[nid]-->
<div class="section-title hot-deal-title section-title-4">
  <h2><?php print $view->get_title()?></h2>
</div>
<div class="row">
  <div class="hot-deal-active">
    <?php foreach ($rows as $id => $row):?>
      <?php $arr = explode('{{}}',$row);?>
      <div class="col-lg-12">
        <div class="single-new-product hot-product">
          <div class="product-img">
            <a href="<?=$arr[4]?>">
              <?=$arr[6]?>
              <!--                      --><?//=$spnoibat[7]?>
            </a>
          </div>
          <!--                <div class="product-cuntdown">-->
          <!--                  <div class="timer">-->
          <!--                    <div data-countdown="2018/06/01"></div>-->
          <!--                  </div>-->
          <!--                </div>-->
          <div class="text-center">
            <div class="align-items-center d-grid height-full height-content-big"><div class="product-content text-center">
                <h3><a href="<?=$arr[4]?>"><?=$arr[3]?></a></h3>
                <div class="price">
<!--                  <h4>--><?//=str_replace('.00','',$row[2])?><!--</h4>-->
                    <h4><a href="/bao-gia-san-pham?id=<?=trim($arr[10])?>" class="btn btn-danger" ><span class="lnr lnr-phone-handset"></span> Liên hệ</a></h4>
                </div>
              </div>
            </div>
          </div>
<!--          <div class="product-icon-wrapper">-->
<!--            <div class="product-icon">-->
<!--              <ul>-->
<!--                <li><a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span></a><div class="add-to-cart d-none">-->
<!--                    --><?//=$row[0]?><!--</div></li>-->
<!--              </ul>-->
<!--            </div>-->
<!--          </div>-->
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>
