<section class="home-slider-area slider-default">
  <div class="home-slider-content">
    <div class="swiper-container home-slider-container">
      <div class="swiper-wrapper">
        <?php foreach ($rows as $id => $row):?>
        <div class="swiper-slide">
          <!-- Start Slide Item -->
          <div class="home-slider-item bg-img-cover" data-bg-img="<?=trim($row)?>">
            <div class="slider-content-area">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide Item -->
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</section>
