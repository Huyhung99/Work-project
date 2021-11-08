<div class="food-menu4-area section-space">
  <div class="container menu-list-wrapper">
    <h2 class="title-color"><?php print t('TRÀ XANH TÂN CƯƠNG - THÁI NGUYÊN') ?></h2>
    <span class="subtitle-color">Đặc sản Việt - Thơm ngon - Tinh khiết</span>
    <div class="row menu-list">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6  menu-item">
          <div class="food-menu4-box">
            <?php print $row; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
