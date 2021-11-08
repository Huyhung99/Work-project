<?php
?>
<div class="collection-leftsidebar sidebar clearfix">
  <div class="sidebar-block blogs-bestseller">
    <h3 class="sidebar-title"><span><?php print t($view->get_title()); ?></span></h3>
    <div class="sidebar-content bestseller-content">
      <div class="bestseller-item-inner">
        <!--                [field_image]{{}}[title]{{}}[commerce_price]-->
        <?php foreach ($rows as $id => $row): ?>
          <?php $arr = explode('{{}}',$row);
          $field_image = trim($arr[0]);
          $title = trim($arr[1]);
          $commerce_price = trim($arr[2]);
          ?>
          <div class="col-xs-6 col-md-12">
            <div class="product-tnb">
              <div class="row">
                <div class="col-md-4 col-4">
                  <?=$field_image?>
                </div>
                <div class="col-md-8 col-8">
                  <div class="sidebar-mobile">
                    <div class="product-title"><h3><?=$title?></h3></div>
                    <div class=" no-bg related_products">
                      <span class="money "><?= str_replace('Giá gốc₫','<del>',str_replace('Giá bán₫','</del>',str_replace('Giá₫','',$commerce_price)))?> đ</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
