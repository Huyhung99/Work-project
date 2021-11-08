<div id="carousel-home">
  <div class="owl-carousel owl-theme">
    <?php foreach ($rows as $id => $row): ?>
      <?php $arr = explode('{{}}', $row);
      $image = trim($arr[0]);
      $slideTitle = '';
      $subTitle = '';
      $link = '';
      if(isset($arr[1]))
        $slideTitle = trim($arr[1]);
      if(isset($arr[2]))
        $subTitle = trim($arr[2]);
      if(isset($arr[3]))
        $link = trim($arr[3]);
      ?>
      <div class="owl-slide cover" style="background-image: url('<?=$image ?>');">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
          <div class="container">
            <div class="row justify-content-center justify-content-md-end">
              <div class="col-lg-6 static">
                <div class="slide-text text-right white">
                  <h2 class="owl-slide-animated owl-slide-title"><?=html_entity_decode($slideTitle)?></h2>
                  <p class="owl-slide-animated owl-slide-subtitle">
                    <?=html_entity_decode($subTitle)?>
                  </p>
                  <?php if(trim($link) != ''): ?>
                    <div class="owl-slide-animated owl-slide-cta">
                      <a class="btn_1" href="<?=trim($link)?>" role="button"> Xem thêm</a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div id="icon_drag_mobile"></div>
</div>
