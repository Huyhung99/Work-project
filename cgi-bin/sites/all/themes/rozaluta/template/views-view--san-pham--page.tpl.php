<div class="food-menu4-area">
  <div class="container menu-list-wrapper">
    <h1 class="title-color"><?php print t('SẢN PHẨM ROZALUTA') ?></h1>
    <span class="subtitle-color">Sữa chua truyền thống</span>
    <div class="menu-list">
      <div class="row">
        <?php if($view['product_left']) print render($view['product_left'])?>
        <?php if($page['banner_right']) print html_entity_decode(render($page['banner_right']))?>
      </div>
      <?php if($page['main_product_1']) print render($page['main_product_1']) ?>
      <div class="row">
        <?php if($page['banner_left']) print html_entity_decode(render($page['banner_left']) )?>
        <?php if($page['product_right']) print render($page['product_right']) ?>
      </div>
    </div>
  </div>
</div>
