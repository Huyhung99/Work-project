<div class="block block-posts" data-layout="grid-3" data-mobile-columns="1">
  <div class="container">
    <div class="block-header">
      <h3 class="block-header__title">Tin tức</h3>
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
    <div class="block-posts__slider">
      <div class="owl-carousel">
        <?php foreach ($rows as $id => $row): ?>
          <div class="post-card  ">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
